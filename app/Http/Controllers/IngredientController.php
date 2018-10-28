<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
        $ingredient_retrieve = Ingredient::where(
            'ingredients.name', 'like', "%$name%")
            ->select(
                'ingredients.id as id',
                'ingredients.name as name'
            )
            ->orderBy('name', 'asc')
            ->get();
        return view('crud.ingredients.retrieve')
            ->with('ingredient_retrieve', $ingredient_retrieve)
            ->with('name', $name);
    }

    /**
     * Edit the ingredient on database.
     * @param integer $id
     */
    public function save($id = false)
    {
        $name = request()->name;
        $old_value = request()->old_value ? request()->old_value : 0;
        $new_value = request()->new_value ? request()->new_value : 0;
        if ($id) {
            $Ingredient = Ingredient::find($id);
            if (empty($Ingredient)) {
                return view('404');
            }
        } else {
            $Ingredient = new Ingredient();
        }

        $action = $id ? self::ACTION_EDIT : self::ACTION_ADD;
        $validation = $this->validateInput(
            $name,
            $action
        );

        if ($validation !== true) {
            return $validation;
        }

        $Ingredient->name = $name;
        $Ingredient->timestamps = false;
        $Ingredient->save();
        return redirect()->route('admin.ingredient.retrieve');
    }

    /**
     * Calls the form to edit a ingredient.
     * @param integer $id
     * @return view Form to edit the ingredient
     */
    public function edit($id)
    {
        $Ingredient = Ingredient::where('ingredients.id', '=', $id)
            ->select(
                'ingredients.id as id',
                'ingredients.name as name'
            )
            ->orderBy('name', 'asc')
            ->first();
        if (empty($Ingredient)) {
            return view('404');
        }
        return view('crud.ingredients.edit')
            ->with(compact('Ingredient'));
    }

    /**
     * Delete on database the ingredient selected.
     * @param integer $id
     */
    public function delete($id)
    {
        $Ingredient = Ingredient::find($id);
        if (empty($Ingredient)) {
            return view('404');
        }
        $Ingredient->delete();
        return redirect()->route('admin.ingredient.retrieve');
    }

    /**
     * Validates inputs from form
     * @param  String $name               Name of ingredient
     * @param  String $action             Action to return in fail case
     * @param  Integer|null $id           ID of ingredient
     * @return redirect|boolean
     */
    private function validateInput(
        $name,
        $action,
        $id = null
    ) {
        $validate = Validator::make([
            'nome do ingrediente' => $name,
        ], [
            'required' => ':attribute é obrigatório.',
            'min' => ':attribute precisa ter no mínimo 4 caracteres.',
        ]);
        if ($validate->fails()) {
            $action = "IngredientController@$action";
            return redirect()
                ->action($action, $id)
                ->withErrors($validate)
                ->withInput();
        }

        return true;
    }

    /**
     * Calls the form to add or add on database a crud.ingredients.
     */
    public function add()
    {
        return view('crud.ingredients.add');
    }
}
