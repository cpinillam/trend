@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profiles</div>
                @foreach ($profiles as $profile)
                    <div class="bg-primary m-2">
                        {{$profile->username}}
                    <form action="{{route('profile.show',$profile->id)}}" method="get">
                            @csrf
                            <input type="submit" value="Detail" class="btn btn-success">
                    </form>
                    </div>
                @endforeach
            
            </div>
        </div>
    </div>
</div>
@endsection