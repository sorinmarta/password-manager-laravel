@extends('layouts.app')

@section('content')
    <div class="colorated-container">
        <div class="table-wrap">
            <table class="table">
                <thead>
                    <td>ID</td>
                    <td>Password</td>
                    <td>Used At</td>
                    <td></td>
                    <td></td>
                </thead>
                <tbody>
                    <td>1</td>
                    <td>123</td>
                    <td>Twitter</td>
                    <td><a href="#">Change</a></td>
                    <td><a href="#">Delete</a></td>
                </tbody>
            </table>
        </div>
    </div>
@endsection
