@extends('layouts.app')

@section('content')
    <div class="small-colorated-container">
        <div class="page-title">
            <h1 class="page-title-h1">Login</h1>
        </div>
        <div class="form-wrap">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <br>
                                <input id="email" type="email" class="form-field" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <br>
                                <input id="password" type="password" class="form-field" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group">
                                    <label>
                                        <input class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                            </div>

                        <div class="form-group">
                                <button type="submit" class="button">Login</button>

                                <a class="forgot-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                            </div>
                    </form>
        </div>
    </div>
@endsection
