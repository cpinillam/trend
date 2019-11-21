@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


                <div class="row card-body" style="display:flex;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-6">


                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


                        <div class="carousel-inner">

                                @foreach ($productImages as $key => $productImage )

                                <div class="carousel-item @if($key==0) active @endif">
                                    <img class="d-block w-100 h-100" src="{{asset($productImage)}}" alt="First slide">

                                </div>
                                @endforeach

                            </div>






                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>







                    </div>






                    <div class="col-md-6 productInfo likit-margin-Bottom">

                        <h1> {{$productDetails->name}}</h1>
                        <h2>$ {{$productDetails->initial_price}}</h2>
                        <p> {{$productDetails->description}}</p>
                        <p> {{$productDetails->updated_at}}</p>
                    </div>


                </div>

                     <hr>
                    <div class="row"> 
                        @if (!Auth::user())
                                <a href="../checkout/{{$productDetails->id}}" class="likit-border-button">Comprar</a>
                        @endif
                        
                        @cannot('isNotOwner', $productDetails)
                            @can('isNotSold', $productDetails)
                                <a href="../checkout/{{$productDetails->id}}" class="likit-border-button">Comprar</a>
                            @endcan
                        @endcannot

                        @can('edit',$productDetails)
                            <a href="{{$productDetails->id}}/edit"> <button class="likit-border-button"> editar producto</button></a>
                        @endCan
                    </div>

            </div>
        </div>
    </div>
</div>

@endsection


{{-- <img src="../photos/profiles/{{$productDetails->user_id}}/products/{{$productDetails->id}}.jpg" class="rounded-circle" style="width:200px; heigth:200px; background-color:black;"  alt=".">  --}}