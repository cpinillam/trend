@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <form action="../order/" method="post">
                 @csrf
                <p>Yo, <strong>{{Auth::user()->profile->first_name}}</strong>, compro este producto:</p>
                <p>Product # {{$product->id}}</p>
                <p>Vendedor # {{$seller->username}}</p>
                <p>item: {{$product->name}}</p>
                <p>Price: ${{$product->initial_price}}</p>
                <p>Description: {{$product->description}}</p>

                <input type="hidden" value="{{$product->id}}" name="product_id" />
                <input type="hidden" value="{{$seller->id}}" name="seller_id" />
                <input type="hidden" value="{{Auth::user()->id}}" name="buyer_id" />
                <input type="hidden" value="{{$product->initial_price}}" name="total_price" />
               


                <input type="submit" value="Pagar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection