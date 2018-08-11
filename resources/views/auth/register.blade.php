@extends('layouts.app')

@section('content')
<div class="small-colorated-container">
    <div class="page-title">
        <h1 class="page-title-h1">Register</h1>
    </div>
    <div class="form-wrap">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>
                                <input id="name" type="text" class="form-field" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-field" name="email" value="{{ old('email') }}" required>
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
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-field" name="password_confirmation" required>
                            </div>
                        <div class="form-group">
                                <button type="submit" class="button">
                                    Register
                                </button>
                            </div>
                    </form>
                </div>
            </div>
@endsection
