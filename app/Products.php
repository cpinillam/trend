<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function User(){

        return $this->hasOne('App\User');
    }

    //To Do Ask best way to transfer date, DB "acoplamentation"
    public function getProductsById($user_id){
        $sql=DB::table('products')
                ->select(DB::raw('*'))
                ->where('user_id','=',$user_id)
                ->get();

        return $sql;
    }



    protected $fillable = [
        'user_id','name','description'
    ];

}
