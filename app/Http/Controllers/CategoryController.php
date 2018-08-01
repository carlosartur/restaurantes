<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Make sure the auth is running
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Finds every categories or searched ones.
     * @return view Form to list the categories
     */
    public function retrieve()
    {
        $name = request()->name ? : '';
        $category_retrieve = Category::where('name', 'like', "%$name%")
            ->orderBy('name', 'asc')
            ->get();
        return view('crud.categories.retrieve')
            ->with('category_retrieve', $category_retrieve)
            ->with('name', $name);
    }

    /**
     * Calls the form to edit a category.
     * @param integer $id
     * @return view Form to edit the category
     */
    public function edit($id)
    {
        $Category = Category::find($id);
        if (empty($Category)) {
            return view('404');
        }

        return view('crud.categories.edit')
            ->with('Category', $Category);
    }

    /**
     * Edit the category on database.
     * @param integer $id
     */
    public function save($id = false)
    {
        $name = request()->name;
        if ($id) {
            $Category = Category::find($id);
            if (empty($Category)) {
                return view('404');
            }
        } else {
            $Category = new Category();
        }

        $action = $id ? self::ACTION_EDIT : self::ACTION_ADD;
        $validation = $this->validateInput($name, $action);

        if ($validation !== true) {
            return $validation;
        }

        $Category->name = $name;
        $Category->save();
        return redirect()->route('admin.category.retrieve');
    }

    /**
     * Delete on database the category selected.
     * @param integer $id
     */
    public function delete($id)
    {
        $Category = Category::find($id);
        if (empty($Category)) {
            return view('404');
        }
        $Category->delete();
        return redirect()->route('admin.category.retrieve');
    }

    /**
     * Calls the form to add or add on database a crud.categories.
     */
    public function add()
    {
        return view('crud.categories.add');
    }

    /**
     * Validates inputs from form
     * @param  String $name               Name of category
     * @param  String $action             Action to return in fail case
     * @param  Integer|null $id           ID of category
     * @return redirect|boolean
     */
    private function validateInput($name, $action, $id = null)
    {
        $validate = Validator::make([
                'nome da categoria' => $name
            ], [
                'nome da categoria' => 'required|min:4'
            ], [
                'required' => ':attribute é obrigatório.',
                'min' => ':attribute precisa ter no mínimo 4 caracteres.'
        ]);
        if ($validate->fails()) {
            $action = "CategoryController@$action";
            return redirect()
                ->action($action, $id)
                ->withErrors($validate)
                ->withInput();
        }

        return true;
    }
}