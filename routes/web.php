<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/user/area/{area}','User\AreaController@store')->name('user.area.store');


Route::group(['prefix' => '{area}'],function (){

    Route::group(['prefix' => 'categories'], function(){
      Route::get('/','Category\CategoryController@index')->name('category.index');



        Route::group(['prefix'=>'/{category}'],function(){
            Route::get('listings','Listing\ListingController@index')->name('listings.index');
        });


    });


    Route::group(['prefix' => '/listing', 'namespace' => 'Listing'],function(){
        Route::get('/favourites', 'ListingFavouriteController@index')
            ->name('listings.favourites.index');
        Route::post('/{listing}/favourites', 'ListingFavouriteController@store')
            ->name('listings.favourites.store');
    });





    /*
     * Listing
     * */

    Route::get('/{listing}','Listing\ListingController@show')->name('listings.show');







});

