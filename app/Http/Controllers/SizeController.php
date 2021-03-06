<?php

namespace App\Http\Controllers;

use App\CategoriesSize;
use App\Category;
use App\Size;
use App\Helpers;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Finds every flavours or searched ones.
     * @return view Form to list the flavours
     */
    public function index(Request $request)
    {
        $name = $request->has('name') ? $request->name : '';
        $size_retrieve = Size::where('name', 'like', "%$name%")
            ->orderBy('name', 'asc')
            ->get();
        $request->flush();
        return view('crud.sizes.retrieve')
            ->with(compact('size_retrieve'));
    }

    /**
     * Calls the form to edit a flavour.
     * @param integer $id
     * @return view Form to edit the flavour
     */
    public function edit($id)
    {
        $Size = Size::find($id);
        if (empty($Size)) {
            return view('404');
        }
        $Categories = Category::all();
        return view('crud.sizes.edit')
            ->with(compact('Size', 'Categories'));
    }

    /**
     * Edit the flavour on database.
     * @param integer $id
     */
    public function save(Request $request, $id = false)
    {
        $name = $request->has('name') ? $request->name : null;
        $flavours = $request->has('flavours') ? $request->flavours : null;
        $slices = $request->has('slices') ? $request->slices : null;
        if ($id) {
            $Size = Size::find($id);
            if (empty($Size)) {
                return view('404');
            }
        } else {
            $Size = new Size();
        }

        $Size->name = $name;
        $Size->flavours = $flavours;
        $Size->slices = $slices;
        $Size->save();
        $values = $request->has('values') ? $request->values : [];
        foreach ($request->category as $category_id) {
            $value = isset($values[$category_id]) ? $values[$category_id] : 0;
            (new CategoriesSize())->add(Category::find($category_id), $Size, Helpers::dinheiroParaFloat($value));
        }
        return redirect()->action('SizeController@index');
    }

    /**
     * Delete on database the flavour selected.
     * @param integer $id
     */
    public function delete($id)
    {
        $Size = Size::find($id);
        if (empty($Size)) {
            return view('404');
        }
        $Size->delete();
        return redirect()->action('SizeController@index');
    }

    /**
     * Calls the form to add or add on database a crud.sizes.
     */
    public function add()
    {
        $Categories = Category::all();
        return view('crud.sizes.add')->with(compact('Categories'));
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
            $action = "SizeController@$action";
            return redirect()
                ->action($action, $id)
                ->withErrors($validate)
                ->withInput();
        }

        return true;
    }
}
