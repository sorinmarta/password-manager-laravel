@extends('layouts.app')
@section('content');
<div class="colorated-container">
    <div class="page-title">
        <h1 class="page-title-h1">Add New Password</h1>
    </div>
    <form action="">
            <label for="password">Password</label>
            <br>
            <input type="text" placeholder="Password" class="form-field" id="password">
            <a href="javascript:void(0)" class="button" id="generate">Generate</a>
            <br />
            <label for="used-at">Used At</label>
            <br>
            <textarea class="form-field used" id="used-at" placeholder="Facebook Twitter Tadacademy" rows="5"></textarea>
            <br />
            <button class="button submit">Submit</button>
        </form>
    </div>
@endsection