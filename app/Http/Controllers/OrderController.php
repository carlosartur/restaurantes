<?php

namespace App\Http\Controllers;

use App\Address;
use App\Category;
use App\CategoriesSize;
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
     * Auto complete postcode
     *
     * @param Request $request
     * @return void
     */
    public function autocompletePostcode(Request $request, $postcode)
    {
        $postcode = (int) preg_replace('/[^0-9]/', '', $postcode);
        $curl = curl_init("https://viacep.com.br/ws/{$postcode}/json/");
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
        ));
        $result = json_decode(curl_exec($curl));
        curl_close($curl);
        return response()->json($result);
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
        $categories = Category::whereNull('category_id')->with('categoriesSon')->get();
        return view('order.start')->with(compact("categories"));
    }

    /**
     * Second step of order, select flavour(s)
     *
     * @param Request $request
     * @return void
     */
    public function step2(Request $request, $size_id, $category_id)
    {
        $size = Size::find($size_id);
        $size->flavours();
        $categories = Category::with('categoryFather.categoriesSon.flavours')->find($category_id);
        $additionals = $categories->getMyAdditionals()->map(function ($item) {
            $item->flavours;
            return $item;
        });
        return view('order.step2')->with(compact("size", "categories", "additionals"));
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
        $prize = $this->getPrize($size, $request->flavour, $request->categories);
        $flavours = Flavour::whereIn('id', $request->flavour)->get();
        $category = Category::find($request->categories);
        $keyCart = $this->createKey(compact("size", "flavours", "prize"));
        $additionals = [];
        if ($request->flavour_add) {
            foreach ($request->flavour_add as $key => $add) {
                $additionals[] = [
                    'category' => Category::find($key),
                    'flavour' => Flavour::find($add),
                ];
            }
        }
        $request->session()->put("items.$keyCart", compact("size", "flavours", "prize", "additionals", "category"));
        return redirect()->route('admin.startOrder');
    }

    /**
     * Third step of order, add item to cart
     *
     * @param Request $request
     * @return void
     */
    public function restartOrder(Request $request)
    {
        $request->session()->forget("items");
        $request->session()->forget('person');
        return redirect()->route('admin.order_person');
    }
    /**▼
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
    private function getPrize($size, $flavours, $categories)
    {
        $price = 0;
        $flavours = array_filter($flavours);
        foreach ($flavours as $flavour) {
            $flavour_size = (new FlavourSize())->getThis(Flavour::find($flavour), $size);
            if (!$flavour_size) {
                $flavour_size = (new CategoriesSize())->getThis(Category::find($categories), $size);
            }
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
        if (is_null($request->session()->get('person')['person'])) {
            return view('order.person');
        }
        return redirect()->route('admin.startOrder');
    }

    /**
     * Create person for a order in db
     *
     * @param Request $request
     * @return void
     */
    public function newPerson(Request $request)
    {
        if ((!$request->has("id")) || (!$request->id)) {
            $address = new Address();
            $person = new Person();
        } else {
            $person = Person::find($request->id);
            $address = Address::find($person->address_id);
        }
        $address->address = $request->has("address") ? $request->address : '';
        $address->neighborhood = $request->has("neighborhood") ? $request->neighborhood : '';
        $address->city = $request->has("city") ? $request->city : '';
        $address->shipcode = $request->has("shipcode") ? $request->shipcode : '';
        $address->reference = $request->has("reference") ? $request->reference : '';
        $address->save();

        $person->name = $request->has("name") ? $request->name : '';
        $person->birthday = $request->has("birthday") ? $request->birthday : null;
        $person->phone = $request->has("phone") ? $request->phone : '';
        $person->comments = $request->has("comments") ? $request->comments : '';
        $person->preferences = $request->has("preferences") ? $request->preferences : '';
        $person->address_id = $address->id;
        $person->save();

        $request->session()->put("person", compact("person", "address"));
        return redirect()->route('admin.startOrder');
    }

    /**
     * Create order on database
     *
     * @param Request $request
     * @return void
     */
    public function order_ok(Request $request)
    {
        $items = $request->session()->get('items');
        $person = $request->session()->get('person')['person'];
        $address = $request->session()->get('address');
        $address = $person->address;
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

    /**
     * Calls the pre_cadastro form
     */
    public function preCadastro(Request $request, $recomendante = '')
    {
        return view('order.pre_person')->with(compact('recomendante'));
    }

    public function preCadastroSalvar(Request $request)
    {
        $address = new Address();
        $person = new Person();

        $address->address = $request->has("address") ? $request->address : '';
        $address->neighborhood = $request->has("neighborhood") ? $request->neighborhood : '';
        $address->city = $request->has("city") ? $request->city : '';
        $address->shipcode = $request->has("shipcode") ? $request->shipcode : '';
        $address->reference = $request->has("reference") ? $request->reference : '';
        $address->save();

        $person->name = $request->has("name") ? $request->name : '';
        $person->birthday = $request->has("birthday") ? $request->birthday : null;
        $person->phone = $request->has("phone") ? $request->phone : '';
        $person->whatsapp = $request->has("whatsapp") ? $request->whatsapp : '';
        $person->email = $request->has("email") ? $request->email : '';
        $person->ind_name = $request->has("recomendante") && $request->recomendante ? $request->recomendante : 'cheffdapizza';
        $comments[] = $request->has("how_many_pizzas") ? "Pizzas por mês : " . $request->how_many_pizzas : '';
        $comments[] = $request->has("preferences") ? "Preferências : " . $request->preferences : '';
        $person->comments = implode("<br>", array_filter($comments));
        $person->address_id = $address->id;
        $person->save();

        $request->session()->put("person", compact("person", "address"));
        return view('order.pre_cadastro_success')->with(compact('address', 'person'));
    }

    /**
     * List orders 
     */
    public function ordersList(Request $request)
    {
        $orders = Order::with('person')->orderBy('created_at', 'desc')->paginate();
        $orders->setCollection($orders->getCollection()->transform(function ($item) {
            $item->data = json_decode($item->data);
            return $item;
        }));
        return view('order.list')->with(compact('orders'));
    }

    public function relatorioPreCadastro($representante = null)
    {
        if (is_null($representante)) {
            abort(404);
        }
        $people = Person::where('ind_name', $representante)->with('address')->get();
        return view('order.relatorio_pre_cadastro')->with(compact('people'));
    }
}
