@extends('layouts.app')
@section('content');
<div class="colorated-container">
    <div class="page-title">
        <h1 class="page-title-h1">Add New Password</h1>
    </div>
    @foreach($rows as $row)
    <form action="{{route('password.index').'/'.$row['id']}}" method="POST">
        {!! method_field('patch') !!}
        {{csrf_field()}}
        <div class="form-group">
            <label for="password">Password</label>
            <br>
        </div>
        <input type="text" placeholder="Password" class="form-field" id="password" name="password" value="{{$row['password']}}">
        <a href="javascript:void(0)" class="button" id="generate">Generate</a>
        <div class="form-group">
            <label for="used-at">Used At</label>
            <br>
            <textarea class="form-field used" id="used-at" placeholder="Facebook Twitter Tadacademy" rows="5" name="used_at">{{$row['used_at']}}</textarea>
            @endforeach
        </div>
        <div class="form-group">
            <button class="button submit">Submit</button>
        </div>
    </form>
</div>
@endsection