<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TRAF') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md" style="background-color:#490B96;">
            <div class="container">
                {{--<!--<a class="navbar-brand" href="{{ url('/') }}">
                   {{-- {{ config('app.name', 'TRAF') }} 
                </a>-->--}}
                <a class="navbar-brand o" href="{{-- url('/') --}}"><img src={{ asset('imagenes/logo.png') }}
                        width="64"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    @guest
                        @if (Route::has('login'))

                        @endif

                        {{-- @if (Route::has('register')) --}}
{{-- 
                        @endif --}}
                    @else
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a href="{{'actividades'}}" class="nav-link i"
                            style="color:white">{{ __('Mis actividades ') }}</a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ route ('situaciones.index') }}" class="nav-link i"
                            style="color:white" >{{ __('Mis situaciones') }}</a>
                        </li>
                        {{-- <li class="nav-item active">
                            <a href="{{'asistencia'}}" class="nav-link i"
                            style="color:white" >{{ __('Mis asistencias') }}</a>
                        </li> --}}
                    </ul>
                        {{-- <div class="navbar-nav ml-auto">
                            {{-- <li class="nav-item">
                                <a href="{{ route('inicio') }}">{{ __('Inicio') }}</a> 
                            </li>
                            <li class="nav-item">
                                <a href="">{{ __('Asistencias') }}</a>
                            </li>
                            <a href="{{'actividades'}}">{{ __('Mis actividades ') }}</a>

                        </div> --}}


                    @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
