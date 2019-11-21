@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1 class="likit-h1">Profile editor</h1>

            <form action="/profile/{{$profile->id}}" method="post" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')
                        <div class="likit-container likit-margin-Bottom">
                            <input class="col-12 likit-input likit-file" id="file-input" name="file" type="file"/>
                            <div  class="icon-container">
                                <i class="far fa-file-image"></i>
                            </div>
                        </div>
                        <div class="likit-container likit-margin-Bottom">
                            <input placeholder="FirstName" class="col-12 likit-input" type="text" name="first_name" value={{$profile->first_name}}>
                            
                            <div  class="icon-container">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="likit-container likit-margin-Bottom">
                            <input placeholder="Last name" class="col-12 likit-input" type="text" name="last_name" value={{$profile->last_name}}>
                            
                            <div  class="icon-container">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="likit-container likit-margin-Bottom">
                            <input placeholder="Bio" class="col-12 likit-input" type="text" name="bio" value={{$profile->bio}} />
                            
                            <div  class="icon-container">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="likit-container likit-margin-Bottom">
                            <input placeholder="Addres c/falsa n123 2º 3ª" class="col-12 likit-input" type="text" name="address" value={{$profile->address}}>
                            
                            <div  class="icon-container">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="likit-container likit-margin-Bottom">
                            <input placeholder="Postal code" class="col-12 likit-input" type="text" name="post_code" value={{$profile->post_code}}>
                            
                            <div  class="icon-container">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="likit-container likit-margin-Bottom">
                            <input placeholder="Facebook" class="col-12 likit-input" type="url" name="facebook" value={{$profile->facebook}}>
                            
                            <div  class="icon-container">
                                <i class="fab fa-facebook-square"></i>
                            </div>
                        </div>
                        <div class="likit-container likit-margin-Bottom">
                            <input placeholder="Instagram" class="col-12 likit-input" type="url" name="instagram" value={{$profile->instagram}}>
                            
                            <div  class="icon-container">
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                        <div class="likit-container likit-margin-Bottom">
                            <input placeholder="Youtube" class="col-12 likit-input" type="url" name="youtube" value={{$profile->youtube}}>
                            
                            <div  class="icon-container">
                                <i class="fab fa-youtube"></i>
                            </div>
                        </div>
                        <div class="likit-container likit-margin-Bottom">
                            <input placeholder="Twitch" class="col-12 likit-input" type="url" name="twitch" value={{$profile->twitch}}>
                            
                            <div  class="icon-container">
                                <i class="fab fa-twitch"></i>
                            </div>
                        </div>
                        <div class="likit-container likit-margin-Bottom">
                            <input class="likit-forms-Button col-12" type="submit" value="Save">
                        </div>
            </form>
        </div>
    </div>
</div>

@endsection
