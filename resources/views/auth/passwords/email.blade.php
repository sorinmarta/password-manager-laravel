@extends('layouts.app')

@section('content')
<div class="small-colorated-container">
    <div class="page-title">
        <h1 class="page-title-h1">Forgot Password</h1>
    </div>
    <div class="form-wrap">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-field" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                        <strong>{{ $errors->first('email') }}</strong>
                                @endif
                            </div>
                        <div class="form-group">
                                <button type="submit" class="button">
                                    Send Password Reset Link
                                </button>
                            </div>
                    </form>
    </div>
</div>
@endsection
