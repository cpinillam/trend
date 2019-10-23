@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      <img src="photos/profiles/photo1.jpg" class="rounded-circle" style="width:200px;"  alt="">  
                        
                    <a href="new-product"><button class="btn btn-primary" >+ Nuevo producto </button></a>
                     </div>

                </div>
                <div class="card" style="margin-top:30px;">
                <div class="card-header">:::: PRODUCTOS ::::</div>
                <div class="card-body" style="display: flex; flex-wrap:wrap;justify-content:flex-start;">
                    @foreach ($products as $product)
                        @if($product->user_id == Auth::user()->id)
                         <form action="{{route('product.show',$product->id)}}" method="get">
                            @csrf
                                <input type="submit" value="{{$product->name}}" class="btn btn-success" style="text-align:center;border-radius:5px;margin: 5px; padding: 38px 0; width: 100px;">
                        </form>
                        @endif
                    @endforeach

                </div>
                 
            </div>
        </div>
    </div>
</div>
@endsection
