@extends('layouts.app')
@section('content');
<div class="colorated-container">
    <div class="page-title">
        <h1 class="page-title-h1">Add New Password</h1>
    </div>
        <form action="{{route('password.store')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="password">Password</label>
                <br>
            </div>
                <input type="text" placeholder="Password" class="form-field" id="password" name="password">
                <a href="javascript:void(0)" class="button" id="generate">Generate</a>
            <div class="form-group">
                <label for="used-at">Used At</label>
                <br>
                <textarea class="form-field used" id="used-at" placeholder="Facebook Twitter Tadacademy" rows="5" name="used_at"></textarea>
            </div>
            <div class="form-group">
                <button class="button submit">Submit</button>
            </div>
        </form>
    </div>
@endsection