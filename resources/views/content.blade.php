@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profiles</div>
                @foreach ($profiles as $profile)
                    <div style="margin:10px; float:left;">
                        
                    <form action="{{route('profile.show',$profile->id)}}" method="get">
                            @csrf
                            <input type="submit" value="{{$profile->username}}" class="btn btn-success" style="width:150px; height: 150px;">
                    </form>
                    </div>
                @endforeach
            
            </div>
        </div>
    </div>
</div>
@endsection