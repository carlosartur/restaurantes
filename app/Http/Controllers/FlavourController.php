<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flavour;
use App\FlavourSize;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FlavourController extends Controller
{
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
            ->with('flavour_size.size')
            ->orderBy('name', 'asc')
            ->join('categories', 'categories.id', '=', 'flavours.category_id')
            ->first();
        if (empty($Flavour)) {
            return view('404');
        }
        $items = [];
        $Flavour->flavour_size->each(function ($flavour_size) use (&$items) {
            $items[] = $flavour_size->size_id;
        });
        $Sizes = Size::whereNotIn('id', $items)->get();
        return view('crud.flavours.edit')
            ->with(compact('Flavour', 'Categories', 'Sizes'));
    }

    /**
     * Edit the flavour on database.
     * @param integer $id
     */
    public function save($id = false)
    {
        $name = request()->name;
        $old_value = request()->old_value ? request()->old_value : 0;
        $new_value = request()->new_value ? request()->new_value : 0;
        $category_id = request()->category ? request()->category : null;
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
        $Flavour->old_value = $old_value;
        $Flavour->new_value = $new_value;
        $Flavour->category_id = $category_id;
        $Flavour->save();
        foreach (request()->value_size as $key => $value) {
            $FlavourSize = new FlavourSize();
            $FlavourSize->add($Flavour, Size::find($key), $value);
        }

        return redirect()->action('FlavourController@retrieve');
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
        return redirect()->action('FlavourController@retrieve');
    }

    /**
     * Calls the form to add or add on database a crud.flavours.
     */
    public function add()
    {
        $Categories = Category::all();
        $Sizes = Size::all();
        return view('crud.flavours.add')->with(compact('Categories', 'Sizes'));
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
            'categoria' => $category_id,
        ], [
            'nome do sabor' => 'required|min:4',
            'valor' => 'required',
            'categoria' => 'required',

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
}
