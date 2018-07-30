<?php

namespace App\Http\Controllers;

use App\Address;
use App\Flavour;
use App\Order;
use App\Person;
use App\Size;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function autocompletePeople(Request $request)
    {
        $person = Person
            ::where('name', 'LIKE', "%" . $request->name . "%")
            ->with('address')
            ->get();
        return response()->json($person);
    }

    public function startOrder(Request $request)
    {
        $sizes = Size::get();
        return view('order.start')->with(compact("sizes"));
    }

    public function step2(Request $request)
    {
        $size = Size::find($request->size);
        $flavours = Flavour::get();
        return view('order.step2')->with(compact("size", "flavours"));
    }

    public function step3(Request $request)
    {
        $size = Size::find($request->size);
        $prize = $this->getPrize($size, $request->flavour);
        return view('order.step3')->with(compact("size", "flavours", "prize"));
    }

    private function getPrize($size, $flavours)
    {
        if ($flavours->count() == 1) {
            return $flavours->first()->old_value;
        }
        $how_many_slices_per_flavour = floor($size->slices / ($size->flavours ?: 1));
        $prize = 0;
        $flavours = Flavour::whereIn('id', $request->flavour)->get();

        foreach ($flavours as $flavor) {
            $prize_per_flavour = $flavor->old_value / ($size->slices ?: 1);
            $prize += $prize_per_flavour * $how_many_slices_per_flavour;
        }
        return $prize;
    }

    public function order_ok(Request $request)
    {
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

        $order = new Order();
        $order->data = json_encode($request->all());
        $order->people_id = $person->id;
        $order->save();
    }
}
