@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="row likid-body-register">
                    <form class="row" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group col-12">
                            <div class="col-12 likit-container">
                                <input id="name" type="text" placeholder="Username" class="col-12 likit-input form-control @error('username') is-invalid @enderror" name="username" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <div class="col-12 likit-container">
                                <input placeholder="Email"  id="email" type="email" class="col-12 likit-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <div class="col-12 likit-container">
                                <input placeholder="Password" id="password" type="password" class="col-12 likit-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <div class="col-12 likit-container">
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="col-12 likit-input form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group col-12 mb-0">
                            <div class="col-12 offset-md-4">
                                <button type="submit" class="col-6 likit-register-Button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
