<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\Cache;
use App\Flavour;
use App\Combo;

class InitController extends Controller
{
    /**
     * Calls the home page, with the cached values
     * @return view
     */
    public function homePage(Request  $request)
    {
        $ip = request()->ip();
        $user_agent = request()->header("user-agent");
        $Visit = new Visit();
        $Visit->saveVisit($ip, $user_agent, $request);

        $Cache = new Cache();
        $cache = $Cache->getAllCache();

        $flavour_retrieve = Flavour::getFlavoursHomePage();
        $combos = Combo::with('flavours')->get();
        return view('homePage')
            ->with(compact('cache', 'flavour_retrieve', 'combos'));
    }
}
