<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Password Manager - Tadamus</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.png')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
        crossorigin="anonymous"></script>
<header>
    <div class="header-wrap">
        <div class="header-body">
            <div class="logo">
                <a href="{{route('welcome')}}"><h1>Password Manager</h1></a>
            </div>
            <div class="header-menu">
                <div class="mobile-menu">
                    <button id="mobile-menu-activate" class="mobile-menu-btn"><i class="fa fa-bars "></i></button>
                    <div class="clearfix"></div>
                    <ul class="mobile-menu-list" id="mobile-menu-list">
                        @guest
                            <li><a href="{{ route('password.index') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li><a href="{{route('password.index')}}">Passwords</a></li>
                        <li><a href="{{route('password.create')}}">New Password</a></li>
                        <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{ csrf_field() }}--}}
                            </form></li>
                        @endguest
                    </ul>
                </div>
                <ul class="menu-list">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{route('password.index')}}">Passwords</a></li>
                            <li><a href="{{route('password.create')}}">New Password</a></li>
                            <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{ csrf_field() }}--}}
                                </form></li>
                            @endguest
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="body-wrap">
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

{{--<!DOCTYPE html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Laravel') }}--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--@yield('content')--}}
    {{--</div>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}
