<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\Category;
use Illuminate\Support\Facades\DB;

class CardapioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cardapio/index');
    }

    /**
     * Retorna categorias para tema, JSON
     * 
     * @param Request $request
     * @return response
     */
    public function category(Request $request)
    {
        $category = $request->has("category") ? $request->category : false;
        if (!$category) {
            abort(404);
        }
        $category_data = Category
            ::where('name', "like", "%$category%")
            ->with('categoriesSon.flavours.flavour_ingredients.ingredients', 'categoriesSon.sizes')
            ->first();
        $category_father_name = $category_data->name;
        $obj = new \stdClass();
        $obj->Group = $category_father_name;
        $category_data->categoriesSon->map(function ($item) use ($category_father_name, &$obj) {
            $subcategory_name = "{$category_father_name} {$item->name}";
            foreach ($item->flavours as $fl) {
                $flavour_name = $fl->name;
                $flavour_val = $fl->new_value;
                foreach ($item->sizes as $size) {
                    $ingredients = [];
                    if ($fl->flavour_ingredients) {
                        foreach ($fl->flavour_ingredients as $ingredients_rel) {
                            $ingredients[] = [
                                "Name" => $ingredients_rel->ingredients->name,
                                "Type" => "Checkbox",
                                "Required" => false,
                                "Ordered" => true
                            ];
                        }
                    }
                    $price = $flavour_val > $size->pivot->value ? $flavour_val : $size->pivot->value;
                    $obj->Items[] = [
                        "Name" => "{$flavour_name} {$size->name}",
                        "Price" => $price,
                        "Group" => $subcategory_name,
                        "Customizable" => !empty($ingredients),
                        "Ingredients" => $ingredients,
                        "Image" => "",
                        "Path" => ""
                    ];
                }
            }
        });
        return response()->json($obj);
    }
}
