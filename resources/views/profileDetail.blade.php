@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                 
                </div>

                <div class="card-body" style="display:flex;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      

                    <div class="col-md-6">
                            <div class="rounded-circle" style="width:200px; height: 200px; background-color:grey;">
                          <img src="../photos/profiles/{{$profileDetails->id}}.jpg" class="rounded-circle" style="width:200px; heigth:200px; background-color:black;"  alt=".">  
                        </div>
                    </div>
                        
                        

                    <div class="col-md-6">
                        <h2>{{$profileDetails->username}}</h2>
                        <p>{{$profileDetails->first_name}}</p>
                        <p>{{$profileDetails->bio}}</p>

                        
                        <p>Firstname: {{$profileDetails->first_name}}</p>
                        
                        
                        <p>{{$profileDetails->address}}</p>
                        <p>Postal code: {{$profileDetails->post_code}}</p>

                        <h2>Follow me at:</h2>
                        <h6>Facebook: <a href="{{$profileDetails->facebook}}">{{$profileDetails->facebook}}</a></h6>
                        <h6>Instagram: <a href="{{$profileDetails->instagram}}">{{$profileDetails->instagram}}</a></h6>
                        <h6>Youtube: <a href="{{$profileDetails->youtube}}">{{$profileDetails->youtube}}</a></h6>
                        <h6>Twitch: <a href="{{$profileDetails->twitch}}">{{$profileDetails->twitch}}</a></h6>

                    </div>


                    <!-- To Do ask DataById -->
                    <div id="user_id" data-id="{{$profileDetails->id}}"></div>
                    
                </div>


                    <!-- To Do ask conditional components -->
                    @if (!Auth::guest())
                        @if (Auth::user()->id == $profileDetails->id ) 
                        <div class="card-header" style="display:flex;">
                            <form action="{{route('profile.edit',$profileDetails->id)}}" method="get">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="* Edit Profile">
                            </form>

                            <a href="../new-product"><button class="btn btn-primary" style="margin-left:20px;" >+ Nuevo producto </button></a>
                            
                        </div>    
                        @endif
                    @endif

                </div>
                <div class="card" style="margin-top:30px;">
                <div class="card-header">:::: PRODUCTOS ::::</div>
                <div name="product" id="product" class="card-body" style="display: flex; flex-wrap:wrap;justify-content:flex-start;">
                  

                </div>
                 
            </div>
        </div>
    </div>
</div>


<!-- To Do ask Using fetch and API -->
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

