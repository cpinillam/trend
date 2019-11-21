<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Stripe_Error;

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



// STRIPE IMPLEMENTATION //

    public function StripeCurrency()
    {
        $stripeCurrency = 'eur';
        return $stripeCurrency;
        
    }

    public function StripeDescription($request)
    {
        $stripeDescription = 'Product ID # ' .$request->product_id. ' Vendido por el usuario # ' .$request->seller_id. ' Comprado por el Usuario # '. $request->buyer_id;
        return $stripeDescription;
         
    }

    public function StripeAmount($price)
    {
        $stripeAmount = $price*100;
        return $stripeAmount;
         
    }


    public function chargeStripe($request)
    {
        try {
          

                \Stripe\Stripe::setApiKey('sk_test_sjPRGbhY92CRP4XYNr5Zut6L00d5X33dZT');

                    $charge = \Stripe\Charge::create([
                        'amount' => $this->StripeAmount($request->total_price),
                        'currency' => $this->StripeCurrency(),
                        'description' => $this->StripeDescription($request),
                        'source' => $request->stripeToken,
                    ]);
                                        
                    $this->setNewOwner($charge, $request);
                    
                return $charge;


      
      } catch(\Stripe\Exception\CardException $e) {
        
        
        header('Location: /issue-card/'.$e->getError()->message);
       
       
    
      } 

    }


    public function setNewOwner($charge, $request)
    {
        if ($this->getStatusCharge($charge)){
            $this->changeProductOwner($request);
        }

        
        
    }

    public function getStatusCharge ($charge){
        if ($charge->status === 'succeeded'){
            return true;           
        }
        return false;

    }


    public function changeProductOwner($request){
        Products::where('id',  $request->product_id)->update(['user_id' => $request->buyer_id, 'sellable' => 0]);
    }


    
    

}
