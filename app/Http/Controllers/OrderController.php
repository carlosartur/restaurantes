<?php

namespace App\Http\Controllers;

use App\Address;
use App\Category;
use App\Flavour;
use App\FlavourSize;
use App\Order;
use App\OrderItems;
use App\Person;
use App\Size;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Auto complete people
     *
     * @param Request $request
     * @return void
     */
    public function autocompletePeople(Request $request, $name)
    {
        $person = Person
            ::where('name', 'LIKE', "%" . $name . "%")
            ->with('address')
            ->get();
        return response()->json($person);
    }

    /**
     * Auto complete city
     *
     * @param Request $request
     * @return void
     */
    public function autocompleteCity(Request $request, $name)
    {
        $city = Address
            ::where('city', 'LIKE', "%" . $name . "%")
            ->get()
            ->pluck('city')
            ->all();
        return response()->json($city);
    }
    /**
     * Auto complete neighborhood
     *
     * @param Request $request
     * @return void
     */
    public function autocompleteNeighborhood(Request $request, $name)
    {
        $neighborhood = Address
            ::where('neighborhood', 'LIKE', "%" . $name . "%")
            ->get()
            ->pluck('neighborhood')
            ->all();
        return response()->json($neighborhood);
    }
    /**
     * First step of order, select size
     *
     * @param Request $request
     * @return void
     */
    public function startOrder(Request $request)
    {
        $categories = Category::all();
        return view('order.start')->with(compact("categories"));
    }

    /**
     * Second step of order, select flavour(s)
     *
     * @param Request $request
     * @return void
     */
    public function step2(Request $request, $size_id)
    {
        $size = Size::find($size_id);
        $size->flavours();
        return view('order.step2')->with(compact("size"));
    }

    /**
     * Third step of order, add item to cart
     *
     * @param Request $request
     * @return void
     */
    public function step3(Request $request)
    {
        $size = Size::find($request->sizes);
        $prize = $this->getPrize($size, $request->flavour);
        $flavours = Flavour::whereIn('id', $request->flavour)->get();
        $key = $this->createKey(compact("size", "flavours", "prize"));
        $request->session()->put("items.$key", compact("size", "flavours", "prize"));
        return redirect()->route('admin.startOrder');
    }

    /**
     * Show cart
     *
     * @param Request $request
     * @return void
     */
    public function cart(Request $request)
    {
        $items = $request->session()->get('items');
        return view('order.cart')->with(compact("items"));
    }

    /**
     * Remove item from cart
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function removeCartItem(Request $request, $id)
    {
        $request->session()->forget("items.$id");
        return redirect()->route('admin.startOrder');
    }

    /**
     * Create cart id of a item
     *
     * @param [type] $obj
     * @return void
     */
    private function createKey($obj)
    {
        return md5(json_encode($obj) . rand() . time());
    }

    /**
     * Get price of a item, using size/flavours selected
     *
     * @param [type] $size
     * @param [type] $flavours
     * @return void
     */
    private function getPrize($size, $flavours)
    {
        $price = 0;
        foreach ($flavours as $flavour) {
            $flavour_size = (new FlavourSize())->getThis(Flavour::find($flavour), $size);
            $price += $flavour_size->value * (1 / (count($flavours)));
        }
        return $price;
    }

    /**
     * Create person for a order
     *
     * @param Request $request
     * @return void
     */
    public function orderPerson(Request $request)
    {
        return view('order.person');
    }

    public function order_ok(Request $request)
    {
        $items = $request->session()->get('items');

        if ((!$request->has("id")) || (!$request->id)) {
            $address = new Address();
            $address->address = $request->has("address") ? $request->address : '';
            $address->neighborhood = $request->has("neighborhood") ? $request->neighborhood : '';
            $address->city = $request->has("city") ? $request->city : '';
            $address->shipcode = $request->has("shipcode") ? $request->shipcode : '';
            $address->save();

            $person = new Person();
            $person->name = $request->has("name") ? $request->name : '';
            $person->address_id = $address->id;
            $person->save();
        } else {
            $person = Person::find($request->id);
            $address = Address::find($person->address_id);
        }

        $order = new Order();
        $order->data = json_encode($items);
        $order->people_id = $person->id;
        $order->value = array_reduce($request->session()->get('items'), function ($carry, $item) {
            return $carry + $item['prize'];
        });
        $order->save();

        $OrderItemsList = [];
        $count = 0;
        foreach ($items as $item) {
            $OrderItems = new OrderItems();
            $OrderItems->size_id = $item['size']->id;
            $OrderItems->flavours = implode(' | ', $item['flavours']->pluck('name')->all());
            $OrderItems->value = $item['prize'];
            $OrderItems->save();
            $OrderItemsList[$count]['item'] = $OrderItems;
            $OrderItemsList[$count]['size'] = $item['size'];
            $count++;
        }

        return view('order.view')->with(compact('OrderItemsList', 'order', 'person', 'address'));
    }
}
