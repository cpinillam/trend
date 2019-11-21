<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>likit :D</title>

    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendor/dropzone.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5e23cd948e.js" crossorigin="anonymous"></script>
    
    <script src="https://js.stripe.com/v3/"></script>

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light likit-transparent shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="{{asset("storage/logo-likit.svg")}}" alt="">
                </a>
                <button class="burger-menu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="likit navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="likit nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item likit-nav-button">
                                    <a class="likit nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="likit nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="likit dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="likit dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="likit dropdown-item" href="../profile/{{ Auth::user()->profile->id }}">
                                       Dashboard
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
