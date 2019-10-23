@extends('layouts.app')
@section('content')
<h1>User_Info:</h1>
<h1>Name: {{$profileDetails->username}}</h1>
<h2>Unique ID: {{$profileDetails->id}}</h2>
<form action="{{route('profile.edit',$profileDetails->id)}}" method="get">
    @csrf
    <input type="submit" class="btn btn-outline-primary btn-sm " value="Edit">
</form>
@endsection
