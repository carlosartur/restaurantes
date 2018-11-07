<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flavour;
use App\FlavourSize;
use App\FlavourIngredient;
use App\Ingredient;
use App\Helpers;
use App\Size;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FlavourController extends Controller
{
    /**
     * Finds every flavours or searched ones.
     * @return view Form to list the flavours
     */
    public function retrieve(Request $request)
    {
        return $this->index($request);
    }

    /**
     * Finds every flavours or searched ones.
     * @return view Form to list the flavours
     */
    public function index(Request $request)
    {
        $name = $request->has('name') ? $request->name : '';
        $category = $request->has('category') ? $request->category : '';
        $flavour_retrieve = Flavour::where([
            ['flavours.name', 'like', "%$name%"],
            ['categories.name', 'like', "%$category%"]])
            ->select(
                'flavours.id as id',
                'flavours.name as name',
                'flavours.old_value as old_value',
                'flavours.new_value as new_value',
                'categories.name as category_name',
                'categories.id as category_id'
            )
            ->orderBy('name', 'asc')
            ->with('flavour_size.size')
            ->join('categories', 'categories.id', '=', 'flavours.category_id')
            ->get();
        return view('crud.flavours.retrieve')
            ->with('flavour_retrieve', $flavour_retrieve)
            ->with('name', $name)
            ->with('category', $category);
    }

    /**
     * Calls the form to edit a flavour.
     * @param integer $id
     * @return view Form to edit the flavour
     */
    public function edit($id)
    {
        $Categories = Category::all();
        $Flavour = Flavour::where('flavours.id', '=', $id)
            ->select(
                'flavours.id as id',
                'flavours.name as name',
                'flavours.old_value as old_value',
                'flavours.new_value as new_value',
                'categories.name as category_name',
                'categories.id as category_id'
            )
            ->with('flavour_size.size', 'flavour_ingredients.ingredients')
            ->orderBy('name', 'asc')
            ->join('categories', 'categories.id', '=', 'flavours.category_id')
            ->first();
        if (empty($Flavour)) {
            return view('404');
        }

        $Sizes = Size
            ::join('categories_sizes', 'categories_sizes.size_id', '=', 'sizes.id')
            ->join('categories', 'categories.id', '=', 'categories_sizes.category_id')
            ->where('categories.id', $Flavour->category_id)
            ->select('*', DB::raw('sizes.name as name'))
            ->get();
        $Ingredients = Ingredient::all();
        return view('crud.flavours.edit')
            ->with(compact('Flavour', 'Categories', 'Sizes', 'Ingredients'));
    }

    /**
     * Edit the flavour on database.
     * @param integer $id
     */
    public function save($id = false)
    {
        $request = request();
        $name = $request->name;
        $old_value = $request->old_value ? $request->old_value : 0;
        $new_value = $request->new_value ? $request->new_value : 0;
        $category_id = $request->category ? $request->category : null;
        if ($id) {
            $Flavour = Flavour::find($id);
            if (empty($Flavour)) {
                return view('404');
            }
        } else {
            $Flavour = new Flavour();
        }

        $action = $id ? self::ACTION_EDIT : self::ACTION_ADD;
        $validation = $this->validateInput(
            $name,
            $old_value,
            $category_id,
            $action
        );

        if ($validation !== true) {
            return $validation;
        }

        $Flavour->name = $name;
        $Flavour->old_value = Helpers::dinheiroParaFloat($old_value);
        $Flavour->new_value = Helpers::dinheiroParaFloat($new_value);
        $Flavour->category_id = $category_id;
        $Flavour->save();
        if (is_array($request->value_size)) {
            foreach ($request->value_size as $key => $value) {
                (new FlavourSize())->add($Flavour, Size::find($key), Helpers::dinheiroParaFloat($value));
            }
        }
        if (is_array($request->ingredients)) {
            FlavourIngredient::whereNotIn('ingredient_id', $request->ingredients)
                ->where('flavour_id', $Flavour->id)->delete();
            foreach ($request->ingredients as $key => $value) {
                (new FlavourIngredient())->add($Flavour, $value);
            }
        }

        return redirect()->route('admin.flavour.retrieve');
    }

    /**
     * Delete on database the flavour selected.
     * @param integer $id
     */
    public function delete($id)
    {
        $Flavour = Flavour::find($id);
        if (empty($Flavour)) {
            return view('404');
        }
        $Flavour->delete();
        return redirect()->route('admin.flavour.retrieve');
    }

    /**
     * Calls the form to add or add on database a crud.flavours.
     */
    public function add()
    {
        $Categories = Category::all();
        $Sizes = Size::all();
        $Ingredients = Ingredient::orderBy('name')->get();
        return view('crud.flavours.add')->with(compact('Categories', 'Sizes', 'Ingredients'));
    }

    /**
     * Validates inputs from form
     * @param  String $name               Name of flavour
     * @param  Array  $old_value          Old value of a flavour
     * @param  String $action             Action to return in fail case
     * @param  Integer|null $id           ID of flavour
     * @return redirect|boolean
     */
    private function validateInput(
        $name,
        $old_value,
        $category_id,
        $action,
        $id = null
    ) {
        $validate = Validator::make([
            'nome do sabor' => $name,
            'valor' => $old_value,
            'tipo de produto' => $category_id,
        ], [
            'nome do sabor' => 'required|min:4',
            'valor' => 'required',
            'tipo de produto' => 'required',

        ], [
            'required' => ':attribute é obrigatório.',
            'min' => ':attribute precisa ter no mínimo 4 caracteres.',
        ]);
        if ($validate->fails()) {
            $action = "FlavourController@$action";
            return redirect()
                ->action($action, $id)
                ->withErrors($validate)
                ->withInput();
        }

        return true;
    }

    /**
     * Get ingredients by flavour
     */
    public function getIngredients(Request $request, $flavour_id)
    {
        $flavour = Flavour::find($flavour_id);
        $data = FlavourIngredient::where('flavour_id', $flavour_id)
            ->with('ingredients')
            ->get()
            ->pluck('ingredients.name', 'ingredients.id');
        return response()->json(['flavour' => $flavour->name, 'ingredients' => $data]);
    }
}
