@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @csrf
                <form action="" method="post">
                <p>Yo, <strong>{{Auth::user()->profile->first_name}}</strong>, compro este producto:</p>
                <p>{{$product->id}}</p>
                <p>{{$product->name}}</p>
                <p>{{$product->initial_price}}</p>
                <p>{{$product->description}}</p>
                <input type="submit" value="enviar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection