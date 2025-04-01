<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Brain') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('/') }}">
                    {{ config('app.name', 'Brain') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                        <li>
                            <form action="">
                                <div class="search_psychol d-flex align-items-lg-stretch
                                    <label for=" search">
                                    <input type="search" name="search" id="search" placeholder="Search..." class="form-control" aria-label="Search">
                                    <button class="btn btn-seccondary" type="submit">P
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    </label>
                                </div>
                            </form>
                        </li>

                        <li>
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Início') }}</a>
                        <li>
                            <a class="nav-link" href="{{ route('psychol') }}">{{ __('Psicólogo') }}</a>
                        </li>

                        <li>
                            <a class="nav-link" href="{{ route('psychol') }}">{{ __('Agenda+') }}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('psychol') }}">{{ __('Consultas') }}</a>
                        </li>
                        <!-- <li>
                            <a class="nav-link" href="{{ route('psychol') }}">{{ __('Notícias') }}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('psychol') }}">{{ __('Contato') }}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('psychol') }}">{{ __('Sobre nós') }}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('psychol') }}">{{ __('Dúvidas') }}</a>
                        </li> -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif

                        @else

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <div class="d-flex-row">{{ Auth::user()->name }}</div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <!-- Essa vai ser a parte do perfil do usuário -->
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Profile') }}
                                </a>

                                <!-- Aqui vai ser o bortão de saida do usuário -->
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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