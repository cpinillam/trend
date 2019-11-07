<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


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




    public function upDateProductsImages($data)
    {


         if($data->hasFile('fileImage'))
         {
             $file=$data->file('fileImage');

             $extension=$file->getClientOriginalExtension();

             $date=$file->getCTime();
             $file_name=$this->id.'-'.$date.'.'.$extension;
             $file->storeAs("users/products/$this->id",$file_name);


             return "Image Uploaded";

         }

     }

     public function getProductsImages()
     {
         $path="users/products/$this->id/";
         $result=Storage::files($path);
         if(empty($result)){
             $empty = ['/default/default.svg'];
             return $empty;
         }


         return $result;
     }



}
