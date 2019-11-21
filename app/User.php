<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile() 
    {
        return $this->hasOne('App\Profile');
    }

    public function products(){
        return $this->hasMany('App\Products');
    }

    public function orders(){
        return $this->hasMany('App\Order', 'buyer_id');
    }

    public function getOrderProductImages($valor)
     {
         $path="users/products/$valor/";
         $result=Storage::allFiles($path);

         if(empty($result)){
             $empty = 'storage/default/default.svg';
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
}
