@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <form action="/profile/{{$profile->id}}" method="post">
                
                    @csrf
                    @method('PUT')
                    <label class="col-md-6" for="first_name">FirstName</label>
                    <input class="col-md-6" type="text" name="first_name" value={{$profile->first_name}}>
                    <label class="col-md-6" for="last_name">last_name</label>
                    <input class="col-md-6" type="text" name="last_name" value={{$profile->last_name}}>
                    <label class="col-md-6" for="bio">Bio</label>
                    <input class="col-md-6" type="text" name="bio" value={{$profile->bio}} />
                    <label class="col-md-6" for="address">Address</label>
                    <input class="col-md-6" type="text" name="address" value={{$profile->address}}>
                    <label class="col-md-6" for="post_code">post_code</label>
                    <input class="col-md-6" type="text" name="post_code" value={{$profile->post_code}}>
                    <label class="col-md-6" for="facebook">Facebook</label>
                    <input class="col-md-6" type="url" name="facebook" value={{$profile->facebook}}>
                    <label class="col-md-6" for="instagram">instagram</label>
                    <input class="col-md-6" type="url" name="instagram" value={{$profile->instagram}}>
                    <label class="col-md-6" for="youtube">youtube</label>
                    <input class="col-md-6" type="url" name="youtube" value={{$profile->youtube}}>
                    <label class="col-md-6" for="twitch">twitch</label>
                    <input class="col-md-6" type="url" name="twitch" value={{$profile->twitch}}>
                    <input type="submit" value="Save">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
