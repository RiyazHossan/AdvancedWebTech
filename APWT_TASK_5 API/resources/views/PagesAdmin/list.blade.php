@extends('layouts.appAdmin')
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
            <td>{{$user->user_id}}</td>
            <td>{{$user->dob}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->email}}</td>
            <td><a href="/editUser/{{$user->id}}">Edit</a></td>
            <td><a href="/deleteUser/{{$user->id}}">Delete</a></td>
        </tr>
        @endforeach
@endsection

