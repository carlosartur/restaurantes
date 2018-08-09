<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $name = request()->name ?: '';
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
        $Category = Category::with('categoryFather')->find($id);
        if (empty($Category)) {
            return view('404');
        }
        $Categories = Category::all();
        $CategoriesIsAdditional = $Category->categoryAdditionals();
        return view('crud.categories.edit')
            ->with(compact('Category', 'Categories', 'CategoriesIsAdditional'));
    }

    /**
     * Edit the category on database.
     * @param integer $id
     */
    public function save($id = false)
    {
        $name = request()->name;
        $category_father = request()->has('categories_father') ? request()->categories_father : null;
        //additionals
        $is_additional = request()->exists('additional');
        $required = request()->exists('required');
        $categories = request()->has('categories') ? request()->categories : [];

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
        $Category->category_id = $category_father;
        if ($is_additional) {
            $Category->additional = true;
            $Category->required = $required;
        }
        $Category->save();
        $_this = new Category();
        $_this->setTable('categories_additionals');
        $_this->where('category_son_id', $Category->id)->delete();

        if ($is_additional) {
            foreach ($categories as $category_has) {
                $_this = new Category();
                $_this->setTable('categories_additionals');
                $_this->category_father_id = $category_has;
                $_this->category_son_id = $Category->id;
                $_this->disableTimestamps();
                $_this->save();
            }
        }
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
        $Categories = Category::all();
        return view('crud.categories.add')->with(compact('Categories'));
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
            'nome da tipo de produto' => $name,
        ], [
            'nome da tipo de produto' => 'required|min:4',
        ], [
            'required' => ':attribute é obrigatório.',
            'min' => ':attribute precisa ter no mínimo 4 caracteres.',
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

    public function getSizesPrices($id)
    {
        return response()->json(Category::with('sizes')->find($id));
    }
}
