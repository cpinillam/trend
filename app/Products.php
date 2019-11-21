<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Products extends Model
{



    public function User(){

        return $this->hasOne('App\User','user_id');
    }

    public function Puntuation(){
        return $this->hasOne('App\Puntuation');
    }

    public function getFeaturedProducts(){

       $featuredProducts = Products::all()->where("sellable", true)->sortByDesc('points')->take('6');
       return $featuredProducts;

    //To Do Ask Correct Use
       /* $products = collect(Products::all());
       $featuredProducts = $products->sortByDesc('points')->take('6');
    */
    }


    protected $fillable = [
        'user_id','name','description', 'initial_price', 'points','sellable'
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
             $empty = ['storage/default/default.svg'];
             return $empty;
         }

        $indexProductsImages = array();
         if (!empty($result)) {
             foreach ($result as $value) {
                 array_push($indexProductsImages, "storage/".$value);
             }
         }

         return $indexProductsImages;
     }


    public function getProductImageForIndex($products)
    {
        $indexProductsImages = array();
        foreach ($products as $index => $product) {
            $path="users/products/$product->id"; 
            $result=Storage::allFiles($path);
                if (empty($result)) {
                    $indexProductsImages[$index]="storage/default/default.svg";
                }

                if (!empty($result)) {
                     $indexProductsImages[$index]='storage/'.$result[0];
                }
        } 
        return $indexProductsImages; 
    }

     public function PointsAdd($product)

     {
         Products::where('id', $product->id)->update(['points' => ($product->points)+1]);
     }



}
