@extends('layouts.app')

@section('content')

<div class="container col-sm-12">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-sm-12">
            <div class="card">
                <div class="card-header col-12">Profiles</div>
            </div>
            <div class="row">
                @foreach ($profiles as $index => $profile)
                
                    <div class="profile-container col-4" style="position: relative; padding:15px;">
                        <form action="{{route('profile.show',$profile->id)}}" method="get">
                                @csrf

                                <img class="img-profile" src="{{asset($profile_Image[$index])}}"> 
                               
                                <input type="submit" value="{{$profile->username}}" class="btn" style="">
                             </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container col-sm-12">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8 col-sm-12">
            <div class="card">
                <div class="card-header col-12">Exclusive Products</div>
            </div>
            <div class="row">
                @foreach ($exclusive_products as $index => $exclusive_product)
                
                    <div class="profile-container col-4" style="position: relative; padding:15px;">
                        <form action="product/{{$exclusive_product->id}}" method="get" style="position: relative; height:130px;">
                                @csrf
                                <img class="img-profile" src="{{asset($productImg[$index])}}">                            
                                <input type="submit" value="{{$exclusive_product->name}}" class="btn" style="">
                             </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection 