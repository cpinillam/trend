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

                      <img src="../photos/profiles/{{$profileDetails->id}}.jpg" class="rounded-circle" style="width:200px; background-color:black;"  alt="">  
                        
                    <a href="../new-product"><button class="btn btn-primary" >+ Nuevo producto </button></a>

                    <h1>User_Info:</h1>
                    <h1>Name: {{$profileDetails->username}}</h1>
                    <div id="user_id" data-id="{{$profileDetails->id}}"><h2>Unique ID: {{$profileDetails->id}}</h2></div>
                    <form action="{{route('profile.edit',$profileDetails->id)}}" method="get">
                        @csrf
                        <input type="submit" class="btn btn-outline-primary btn-sm " value="Edit">
                    </form>

                     </div>

                </div>
                <div class="card" style="margin-top:30px;">
                <div class="card-header">:::: PRODUCTOS ::::</div>
                <div name="product" id="product" class="card-body" style="display: flex; flex-wrap:wrap;justify-content:flex-start;">
                  

                </div>
                 
            </div>
        </div>
    </div>
</div>
<script>
        fetch("http://127.0.0.1:8000/product").then(value=>value.json()).then( value=>{
    let container = document.querySelector("#product");
    let user_id = document.getElementById('user_id').getAttribute("data-id");
                 
            value.forEach(element => {
                if (element.user_id == user_id ){
                container.innerHTML += "<form action='../product/"+element.id+"' method='get'><input type='submit' value='"+element.name+"' class='btn btn-success' style='text-align:center;border-radius:5px;margin: 5px; padding: 38px 0; width: 100px;'></form>";
              
               }
              });
        });

        </script>
@endsection

