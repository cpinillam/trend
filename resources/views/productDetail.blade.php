<<<<<<< HEAD
<h1>:::: {{$productDetails->name}} ::::</h1>
<br>
<h2>Description</h2>
<br>
{{$productDetails->description}}
<br>
<h3>Last update</h3>
<br>
{{$productDetails->created_at}}

<form action="{{route('profile.edit',$profileDetails->id)}}" method="get">
    @csrf
    <input type="submit" class="btn btn-outline-primary btn-sm " value="Edit">
</form>

=======
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
                        <div class="rounded-circle" style="width:200px; height: 200px; background-color:grey;">
                      <img src="../photos/products/{{$productDetails->id}}.jpg" class="rounded-circle" style="width:200px; heigth:200px; background-color:black;"  alt=".">  
                    </div>
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
                <div name="product" id="product" class="card-body" style="display: flex; flex-wrap:wrap;justify-content:flex-start;">
                  

                </div>
                 
            </div>
        </div>
    </div>
</div>

@endsection
>>>>>>> 0f863689a3a85f16e4260b15a319a24ab5e986c9
