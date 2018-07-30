<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Combo;
use App\Flavour;
use App\CombosFlavour;
use Illuminate\Support\Facades\DB;

class CombosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {
        $name = $request->has('name') ? $request->name : '';
        $combos = Combo
            ::where('combos.name', 'like', "%$name%")
            ->select('combos.id', 'combos.name', 'combos.value', 'combos.discount')
            ->orderBy('name', 'asc')
            ->with('flavours')
            ->get();
        $request->flash();
        return view('crud.combos.retrieve')
            ->with(compact('combos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create()
    {
        $flavour_retrieve = Flavour::getFlavoursHomePage();
        return view('crud.combos.add')->with(compact('flavour_retrieve'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ids = explode(', ', $request->ids);
        $combo = new Combo();
        if (empty($request->name)) {
            $flavours = Flavour::whereIn('id', $ids)->get();
            $combo->name = implode(' + ', $flavours->pluck('name')->all());
        } else {
            $combo->name = $request->name;
        }
        $combo->discount = $request->discount;
        $combo->value = (float) str_replace(',', '.', $request->value);
        if (!is_null($request->img)) {
            $name = md5(time() . rand()) . '.' . strtolower($request->img->getClientOriginalExtension());
            $path = $request->img->storeAs('public/images', $name);
        }
        $combo->foto = $name;
        $combo->save();
        $data = [];
        foreach ($ids as $id) {
            $data[] = [
                'combo_id' => $combo->id,
                'flavour_id' => $id,
                'created_at'=>date('Y-m-d H:i:s')
            ];
        }
        CombosFlavour::unguard();
        CombosFlavour::insert($data);
        CombosFlavour::reguard();
        // DB::table('combos_flavour')->insert($data);
        return redirect()->route('admin.combo.retrieve');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
