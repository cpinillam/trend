@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="card-body" style="display:flex;">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <div class="col-md-6">
                       
                        <div class="profileImgDetailContainer">
                                                            
                            <img src="{{asset($profile_Image)}}" class="profileDetailImg" alt=".">  
                            
                        </div>

                    </div>
                        
             
                    <div class="col-md-6 profileInfo">
                       @include("_profileInfo")
                    </div>



                    <div id="user_id" data-id="{{$profileDetails->id}}"></div>

                </div>




                    @can('edit',$profileDetails)
                    <div class="card-header" style="display:flex;">
                        <form action="{{route('profile.edit',$profileDetails->id)}}" method="get">
                        @csrf
                        <input type="submit" class="likit-border-button" value="Edit Profile">
                        </form>

                        <a href="../new-product"><button class="likit-border-button" style="margin-left:20px;" >+ Nuevo producto</button></a>
                    </div>
                    @endCan
                @include("_productAndOrderProfile")
               
        </div>
    </div>
</div>

@endsection

