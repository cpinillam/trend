@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1 class="likit-h1">EDIT Product</h1>

                    <form method="POST" action="/product/{{$product->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        
           
                            

                                <div class="likit-container likit-margin-Bottom">
                                    <input id="fileImage" type="file" class="col-12 likit-input likit-file @error('fileImage') is-invalid @enderror" name="fileImage" required autofocus multiple>
                                    <div  class="icon-container">
                                        <i class="far fa-file-image"></i>
                                    </div>

                                    @error('fileImage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                        
                        
                            
                                <div class="likit-container likit-margin-Bottom">
                                    <input id="name" type="text" class="col-12 likit-input @error('name') is-invalid @enderror" name="name" value="{{$product->name}}" required autocomplete="name" autofocus>

                                    
                                    <div  class="icon-container">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                        
                      
                            

                                <div class="likit-container likit-margin-Bottom">
                                    <input id="initial_price" type="number" class="col-12 likit-input @error('initial_price') is-invalid @enderror" name="initial_price" value="{{$product->initial_price}}" required autofocus>

                            
                                    <div  class="icon-container">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    @error('initial_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                        
                             
                                

                                    <div class="likit-container likit-margin-Bottom">
                                        <input id="description" type="text" class="col-12 likit-input @error('description') is-invalid @enderror" name="description" value="{{$product->description}}" required autofocus>

                                        <div  class="icon-container">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                        <button type="submit" class="likit-forms-Button col-12">
                               Editar
                            </button>

                    </form>
        </div>
    </div>
</div>
@endsection
