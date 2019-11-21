<?php

namespace App\Http\Controllers;

use App\Order;
use App\Products;
use Auth;
use App\User;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

       $data = $request->validate([
        'product_id' => 'required',
        'seller_id' => 'required',
        'buyer_id' => 'required',
        'total_price' => 'required',
        
       ]);

       $order = new Order;
       $order->product_id=$request->product_id;
       $order->seller_id=$request->seller_id;
       $order->buyer_id=$request->buyer_id;
       $order->price=$request->total_price;
       
       $charge = $order->chargeStripe($request);    
       $order->status_id=5;


       $order->save();
       
            
        // TODO ASK $profile = Profile::where('user_id', $request->buyer_id)->first();
        $profile = Auth::user()->profile->id;
        return redirect("profile/$profile");

    }

 

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    public function checkout(Products $product, User $user)
    {
        $currentUser = Auth::user();
       
        if($this->authorize('isOwner',$product)){
           
            $seller = $user->where('id', $product->user_id)->first();
            return view('checkout',['product'=> $product, 'seller' => $seller]);
        }

        return redirect('/');
        
           

        
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
