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
                    
                    <label for="first_name">FirstName</label>
                    <input type="text" name="first_name" value={{$profile->first_name}}>

                    <input type="submit" value="Save">

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
