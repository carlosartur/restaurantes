<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Visits = Visit
            ::groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"))
            ->select([DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') as data"), DB::raw("COUNT(id) as visitas")])
            ->orderBy('data', 'DESC')
            ->limit(15)
            ->get();
        return view('home')->with(compact('Visits'));
    }
}
