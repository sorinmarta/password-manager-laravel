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
                @foreach($rows as $row)
                    <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['password']}}</td>
                        <td>{{$row['used_at']}}</td>
                        <td><a href="{{route('password.index').'/'.$row['id'].'/edit'}}">Change</a></td>
                        <td>
                            <form action="/lara_passmgr/public/password/{{$row['id']}}" method="POST">
                                {!! method_field('delete') !!}
                                {{csrf_field()}}
                                <button class="btn-design-remove">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
