<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/33b1ae1618.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lighter">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-red-orange">
        <div class="container mx-auto">
            <div class="flex justify-between items-center py-2">
                <h1>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <i class="fas fa-user-astronaut text-white"><i
                                    class="text-white font-sans not-italic font-semibold">
                                HQ</i></i>
                    </a>
                </h1>

                <div>
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    {{--                    @guest--}}
                    {{--                        <div class="container">--}}
                    {{--                            <a href="{{ route('login') }}"--}}
                    {{--                               class="button nav-link bg-white text-red-orange">{{ __('Login') }}</a>--}}
                    {{--                            @if (Route::has('register'))--}}
                    {{--                                <a href="{{ route('register') }}"--}}
                    {{--                                   class="button nav-link bg-white text-red-orange">{{ __('Register') }}</a>--}}
                    {{--                            @endif--}}
                    {{--                        </div>--}}
                    {{--                    @else--}}
                    {{--                        <div class="dropdown">--}}
                    {{--                            <button type="button" class="button dropdown-toggle" data-toggle="dropdown"--}}
                    {{--                                    aria-haspopup="true"--}}
                    {{--                                    aria-expanded="false">--}}
                    {{--                                {{ auth()->user()->name }}--}}
                    {{--                            </button>--}}
                    {{--                            <div class="dropdown-menu">--}}
                    {{--                                <a href="#" class="dropdown-item">Logout</a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    @endguest--}}

                    <ul class="navbar-nav ml-auto list-reset">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ auth()->user()->name }} <span class="caret"></span>
                                    <a
                                            id="navbarDropdown"
                                            class="nav-link dropdown-toggle"
                                            href="#" role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            v-pre
                                    >
                                        <img width="50"
                                             class="rounded-full"
                                             src="https://www.gravatar.com/avatar/{{ md5(auth()->user()->email) }}?s=200">
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <a class="dropdown-item"
                                               href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            >
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                    </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto py-6">
        @yield('content')
    </main>
</div>
</body>
</html>
