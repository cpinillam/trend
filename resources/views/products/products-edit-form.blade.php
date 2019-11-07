@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT Product</div>

                <div class="card-body">
                   {{--  <form action="/profile/{{$profile->id}}" method="post" enctype="multipart/form-data" class="dropzone"
                        id="my-awesome-dropzone">




                        @csrf
                        @method('PUT')
                        <label class="col-md-6" for="file">Your Better Img</label>
                        <input id="file-input" name="file" type="file" multiple/>
 --}}



                    <form method="POST" action="/product/{{$product->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="fileImage" class="col-md-4 col-form-label text-md-right">{{ __('Images') }}</label>

                            <div class="col-md-6">

                                <input id="fileImage" type="file" class="form-control @error('fileImage') is-invalid @enderror" name="fileImage" required autofocus multiple>

                                @error('fileImage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$product->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="initial_price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">

                                <input id="initial_price" type="number" class="form-control @error('initial_price') is-invalid @enderror" name="initial_price" value="{{$product->initial_price}}" required autofocus>

                                @error('initial_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">

                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$product->description}}" required autofocus>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                        <button type="submit" class="btn btn-warning">
                               Editar
                            </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
