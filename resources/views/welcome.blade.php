@extends('layouts.app')

@section('content')
<div class="colorated-container">
    <div class="page-title">
        <h1 class="page-title-welcome">Hello!</h1>
    </div>
    <div class="page-subtitle">
        <h2>Welcome, to <a href="https://tadamus.com">Tadamus</a> Password Manager</h2>
    </div>
    <div class="welcome-text">
        @if(!Auth::check())
            <p>Please <a href="{{route('login')}}">Login</a> or <a href="{{route('register')}}">Register</a> in order to use our password manager </p>
        @else
            <p>Please see our <a href="{{route('password.index')}}">Passwords</a> page to manage your passwords.</p>
        @endif
    </div>
</div>
@endsection