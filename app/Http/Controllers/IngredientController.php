<?php

namespace App\Http\Controllers;

use App\Ingredients;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
        /**
     * Finds every ingredients or searched ones.
     * @return view Form to list the ingredients
     */
    public function retrieve(Request $request)
    {
        return $this->index($request);
    }

    /**
     * Finds every ingredients or searched ones.
     * @return view Form to list the ingredients
     */
    public function index(Request $request)
    {
        $name = $request->has('name') ? $request->name : '';
        $ingredient_retrieve = Ingredients::where(
            'ingredients.name', 'like', "%$name%")
            ->select(
                'ingredients.id as id',
                'ingredients.name as name'
            )
            ->orderBy('name', 'asc')
            ->get();
        // $ingredient_retrieve = Ingredients::get();
        return view('crud.ingredients.retrieve')
            ->with('ingredient_retrieve', $ingredient_retrieve)
            ->with('name', $name);
    }

    /**
     * Calls the form to add or add on database a crud.flavours.
     */
    public function add()
    {
        return view('crud.ingredients.add');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredients $ingredients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredients $ingredients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredients $ingredients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingredients  $ingredients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredients $ingredients)
    {
        //
    }
}
