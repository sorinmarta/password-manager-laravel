@extends('layouts.app')

@section('content')
<div class="small-colorated-container">
    <div class="page-title">
        <h1 class="page-title-h1">Generate New Password</h1>
    </div>
    <div class="form-wrap">
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-field" name="email" value="{{ $email or old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                                <input id="password" type="password" class="form-field" name="password" required>
                                @if ($errors->has('password'))
                                        <strong>{{ $errors->first('password') }}</strong>
                                @endif
                            </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-field" name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                @endif
                            </div>
                        <div class="form-group">
                                <button type="submit" class="button">
                                    Reset Password
                                </button>
                            </div>
                    </form>
    </div>
</div>
@endsection
