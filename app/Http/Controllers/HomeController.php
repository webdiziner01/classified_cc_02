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

       // $user = auth()->user()->favouriteListings() ;
        $listing = new Listing();
        //$listing = $listing->favouritedBy(auth()->user());
        $listing = $listing->favourites;

        dd($listing);

        $areas = Area::get()->toTree();

        return view('home', compact('areas'));
    }
}
