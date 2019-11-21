@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1 class="likit-h1">Create New Product</h1>

                    
                    <form method="POST" action="/product">
                        @csrf

                        <div class="form-group row">
                            <div class="col-12">
                                <!-- To Do Ask Value into a INPUT -->
                                <input  type="number" name="user_id" id="user_id" value="{{ Auth::user()->id }}" hidden>
                                <!--  ----->


                                    <div class="likit-container likit-margin-Bottom">
                                        <input placeholder="Product Name" id="name" type="text" class="col-12 likit-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        <div  class="icon-container">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-12">
                                <div class="likit-container likit-margin-Bottom">
                                    <input placeholder="Price" id="initial_price" type="number" class="col-12 likit-input @error('initial_price') is-invalid @enderror" name="initial_price" value="{{ old('initial_price') }}" required autofocus>

                                        <div  class="icon-container">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    @error('initial_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                                <div class="col-12">
                                    <div class="likit-container likit-margin-Bottom">
                                        <input placeholder="Description" id="description" type="text" class="col-12 likit-input @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autofocus>
        
                                        <div  class="icon-container">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                        <button type="submit" class="likit-forms-Button col-12">
                                Enviar
                        </button>

                    </form>    
        </div>
    </div>
</div>
@endsection
