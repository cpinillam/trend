<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public function user()
    {
        return $this->belongsTo('App\User', 'buyer_id');

    }
    public function product()
    {
        return $this->belongsTo('App\Products');
    }
    
    public function order_status(){
        return $this->hasOne('App\Order_status');
    }

    public function sendToStripe(){
        //this is url redirect to the api
        return true;
    }
}
