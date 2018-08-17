<?php

namespace App\Http\Controllers;
use App\Address;
use App\Category;
use App\Flavour;
use App\FlavourSize;
use App\Order;
use App\OrderItems;
use App\Person;
use App\Size;
use Illuminate\Http\Request;
use App\Visit;
use Illuminate\Support\Facades\DB;

class MontaPizzaController extends Controller
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
    	  $categories = Category::all();
        return view('montar/index')->with(compact("categories"));
    }


}
