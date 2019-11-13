@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body" style="display:flex;">
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
                                    <img class="d-block w-100 h-100" src="../storage/{{$productImage}}" alt="First slide">

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






                    <div class="col-md-6">
                    <h1> {{$productDetails->name}}</h1>
                    <h2>$ {{$productDetails->initial_price}}</h2>
                    <p> {{$productDetails->description}}</p>
                    <p> {{$productDetails->updated_at}}</p>

                        @cannot('isNotOwner', $productDetails)
                            <a href="../checkout/{{$productDetails->id}}" class="btn btn-danger">Comprar</a>
                        @endcannot

                    </div>

                     </div>

                </div>
                <div class="card" style="margin-top:30px;">
                <div class="card-header">Comentarios</div>
                @can('edit',$productDetails)
               <a href="{{$productDetails->id}}/edit"> <button class="btn btn-primary btn-sm"> editar producto</button></a>
               @endCan
                <div name="product" id="product" class="card-body" style="display: flex; flex-wrap:wrap;justify-content:flex-start;">


                </div>

            </div>
        </div>
    </div>
</div>

@endsection


{{-- <img src="../photos/profiles/{{$productDetails->user_id}}/products/{{$productDetails->id}}.jpg" class="rounded-circle" style="width:200px; heigth:200px; background-color:black;"  alt=".">  --}}