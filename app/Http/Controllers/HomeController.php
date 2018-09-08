<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;
use App\Area;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        /*
         * Testing
         * */

        //dd(auth()->user()->viewedListings());


        /*
         * Testing
         * */


        $areas = Area::get()->toTree();

        return view('home', compact('areas'));
    }
}
