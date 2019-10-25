@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                    <a style="float:right;" href="../new-product"><button class="btn btn-primary" >+ Nuevo producto </button></a>

                </div>

                <div class="card-body" style="display:flex;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      <img src="../photos/profiles/{{$profileDetails->id}}.jpg" class="rounded-circle" style="width:200px; height:200px;background-color:black;"  alt="">  
                        <div style="padding:15px;">
                    <h6>UserName: {{$profileDetails->username}}</h6>
                    <h6>Firstname: {{$profileDetails->first_name}}</h6>
                    <h6>Last Name: {{$profileDetails->last_name}}</h6>
                    <h6>Bio: {{$profileDetails->bio}}</h6>
                    <h6>Address: {{$profileDetails->address}}</h6>
                    <h6>Postak code: {{$profileDetails->post_code}}</h6>

                    <h2>Follow me at:</h2>
                    <h6>Facebook: <a href="{{$profileDetails->facebook}}">{{$profileDetails->facebook}}</a></h6>
                    <h6>Instagram: <a href="{{$profileDetails->instagram}}">{{$profileDetails->instagram}}</a></h6>
                    <h6>Youtube: <a href="{{$profileDetails->youtube}}">{{$profileDetails->youtube}}</a></h6>
                    <h6>Twitch: <a href="{{$profileDetails->twitch}}">{{$profileDetails->twitch}}</a></h6>

                    <div id="user_id" data-id="{{$profileDetails->id}}">
                    </div>
                    <form action="{{route('profile.edit',$profileDetails->id)}}" method="get">
                        @csrf
                        <input type="submit" class="btn btn-outline-primary btn-sm " value="Edit">
                    </form>
                </div> 
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
    fetch("http://localhost:8000/product").then(value=>value.json()).then( value=>{
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

