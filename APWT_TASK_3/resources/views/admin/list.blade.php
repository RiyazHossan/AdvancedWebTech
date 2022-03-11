@extends('layout.adminApp')
@section('contentAdmin')
    <table class = "table table-border">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Date of Birth</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->accType}}</td>
            <td><a href="/editUser/{{$user->id}}">Edit</a></td>
            <td><a href="/deleteUser/{{$user->id}}">Delete</a></td>
        </tr>
        @endforeach
@endsection
