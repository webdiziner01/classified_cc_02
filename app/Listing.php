<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Listing extends Model
{
    use SoftDeletes;



    public function user(){

        return $this->belongsTo(User::class);

    }


    public function category(){

        return $this->belongsTo(Category::class);

    }



    public function area(){

        return $this->belongsTo(Area::class);

}



    public function live() {

        return $this->live;

    }

    public function price(){
        return $this->category->price;

    }



    public function scopeIsLive($query){
        return $query->where('live', true);
    }




    public function scopeIsNotLive($query){
        return $query->where('live', false);
    }


    public function scopeFromCategory($query, Category $category){

        return $query->where('category_id',$category->id);

    }


    public function scopeInArea($query,Area $area){

        return $query->whereIn('area_id', array_merge(
            [$area->id],
            $area->descendants->pluck('id')->toArray()
        ));


    }




















}
