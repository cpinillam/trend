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


/* ***************************************** */

    public function upDateProfileImage($data)
    {
   
        
         if($data->hasFile('file'))
         {
             $file=$data->file('file');
             $extension=$file->getClientOriginalExtension();
<<<<<<< HEAD
             $file_name=$this->user_id.'.'.$extension;
             $file->storeAs("users/$this->user_id/profile_images",$file_name);  
               
             
=======

             $date=$file->getCTime();
             $file_name=$this->id.'-'.$date.'.'.$extension;
             $file->storeAs("users/products/$this->id",$file_name);


>>>>>>> 2872bc80ae94de2e9bab268e8b952fc3f5841298
             return "Image Uploaded";
             
         }
 
     }
<<<<<<< HEAD
 
     public function getProfileImage()
     {        
         $path="users/$this->user_id/profile_images/";
=======

     public function getProductsImages()
     {
         $path="users/products/$this->id/";
>>>>>>> 2872bc80ae94de2e9bab268e8b952fc3f5841298
         $result=Storage::files($path);
         if(empty($result)){
             return "storage/default/default.svg";
         }
         return "storage/".$result[0];
     }

/* ***************************************** */

}
