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
                        
                        @foreach ($productImages as $productImage )
                      
                        <div style="width:300px; height: 300px; background-color:grey;">
                        <img src="../storage/{{$productImage}}" style="width:100%; heigth:auto; background-color:black;"  alt=".">  
                       
                        </div>
                        @endforeach
                        
                    </div>

                    <div class="col-md-6">
                    <h1> {{$productDetails->name}}</h1>
                    <h2>$ {{$productDetails->initial_price}}</h2>
                    <p> {{$productDetails->description}}</p>
                    <p> {{$productDetails->updated_at}}</p>
                    <button class="btn btn-danger"> Comprar</button>
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
