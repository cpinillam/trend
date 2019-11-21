@extends('layouts.app')


@section('content')
<div class="container">

    <div class="imageLogingContainner">
        <img src="{{asset("storage/login_armour/part1.png")}}"/>
        <img src="{{asset("storage/login_armour/part3.png")}}"/>
        <img class="glowArmor" src="{{asset("storage/login_armour/part2.png")}}"/>
        <div class="fixedGloss">
    </div>

   
    
</div>
    <div class="row justify-content-center">
        <div class="col-8">

                <div class="row likid-body-login">
                    <form method="POST" class="col-12" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                          
                            <div class="col-12">
                                <div class="likit-container">
                                    <input id="email" type="email" placeholder="Email" class="likit-input col-12 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                    <div  class="icon-container">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">                        

                            <div class="col-12">
                                <div class="likit-container">
                                    <input id="password" type="password" placeholder="Password" class="likit-input col-12 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    
                                    <div  class="icon-container">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0 buttonGrandParent">
                            <div class="col-12 buttonParent">
                                   <div class="col-12">
                                        <div class="col-12">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>


                                <button type="submit" class="likit-singIn-Button col-12">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="col-12" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
