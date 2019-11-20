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

    public function chargeStripe($request)
    {
       \Stripe\Stripe::setApiKey('sk_test_sjPRGbhY92CRP4XYNr5Zut6L00d5X33dZT');



        $charge = \Stripe\Charge::create([
            'amount' => $request->total_price*100,
            'currency' => 'eur',
            'description' => 'Product # ' .$request->product_id. 'Sale By: ' .$request->seller_id. 'Buy by: '. $request->buyer_id,
            'source' => $request->stripeToken,
        ]);
    }


}
