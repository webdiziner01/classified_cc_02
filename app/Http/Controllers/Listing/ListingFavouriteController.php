<?php

namespace App\Http\Controllers\Listing;

use App\Area;
use App\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingFavouriteController extends Controller
{


    public function __construct()
    {
        return $this->middleware(['auth']);
    }

    public function store(Request $request, Area $area, Listing $listing){
        $request->user()->favouriteListings()->syncWithoutDetaching([$listing->id]);

        return back();
    }







}
