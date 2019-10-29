@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header col-12">Profiles</div>
            </div>
            <div class="row">
                @foreach ($profiles as $profile)
                    <div class="profile-container col-4" style="position: relative; padding:15px;">
                        <form action="{{route('profile.show',$profile->id)}}" method="get" style="position: relative; height:130px;">
                                @csrf
                                <img class="img-profile" src="../images/profiles/{{$profile->id}}/portrait_img/{{$profile->id}}.jpg">
                                <input type="submit" value="{{$profile->username}}" class="btn" style="">
                             </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection