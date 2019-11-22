@extends('layouts.app')

@section('content')


@include("_banner-home")

<div class="container col-sm-12">
<div class="container col-sm-12  likit-margin-Bottom">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6 col-sm-12">
            <h1 class="likit-h1">Cosplayers & Makers</h1>
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

<div class="container col-sm-12  likit-margin-Bottom">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6 col-sm-12">
            <h1 class="likit-h1">Exclusive Products</h1>
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