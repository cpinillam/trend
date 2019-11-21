@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <center>
                    <img class="soldItem-checkout col-8" src="{{asset($productImage)}}" alt="">
                </center>
                <form action="../order/" method="post" id="payment-form">
                 @csrf
                <div class="row likit-checkout-details">
                    <div class="col-6">Yo, <strong>{{Auth::user()->profile->first_name}}</strong>, compro este producto:</div>
                    <div class="col-6">Product # {{$product->id}}</div>
                    <div class="col-6">Vendedor # {{$seller->username}}</div>
                    <div class="col-6">item: {{$product->name}}</div>
                    <div class="col-6">Price: ${{$product->initial_price}}</div>
                    <div class="col-6">Description: {{$product->description}}</div>
                </div>

                <input type="hidden" value="{{$product->id}}" name="product_id" />
                <input type="hidden" value="{{$seller->id}}" name="seller_id" />
                <input type="hidden" value="{{Auth::user()->id}}" name="buyer_id" />
                <input type="hidden" value="{{$product->initial_price}}" name="total_price" />



                
                    <div class="likit-checkout form-row">
                        <label for="card-element">
                            Credit or debit card
                        </label>
                        
                        <div id="stripeContAnim" class="likit-container-stripe likit-margin-Bottom">
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->                              
                            </div>  
                            <div  class="icon-container">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>

                    <button class="likit-forms-Button col-12" type="submit" >Pagar</button>
                </form>
        </div>
    </div>
</div>
@endsection