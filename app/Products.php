<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Collection;

class Products extends Model
{
    public function User(){

        return $this->hasOne('App\User');
    }

    public function Puntuation(){
        return $this->hasOne('App\Puntuation');
    }
    
    public function getFeaturedProducts(){

       $featuredProducts = Products::all()->sortByDesc('points')->take('6'); 
       return $featuredProducts;

    //To Do Ask Correct Use
       /* $products = collect(Products::all());
       $featuredProducts = $products->sortByDesc('points')->take('6'); 
    */
    }

    public function addPoints($id_product){
        $id_product->update();
    }

    protected $fillable = [
        'user_id','name','description', 'initial_price', 'points'
    ];

}
