@extends('layouts.appAdmin')
@section('contentAdmin')
    <div class = "container">
    <br><br>
     <h1>Profile</h1>
    <form action= "{{route('profileAdmin')}}" class "form-group" method = "post">
        {{csrf_field()}}
        <div class="col-md-4 form-group">
        <span>Id</span>
        <input type="text" name="id" value="{{$user->id}}" class="form-control" readonly>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

        <div class ="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value = "{{$user->name}}" class = "form-control"><br>
            @error('name')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="password" value = "{{$user->password}}" class = "form-control"><br>
            @error('name')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Id</span>
            <input type="text" name="user_id" value = "{{$user->user_id}}" class = "form-control"><br>
            @error('id')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Date of Birth</span>
            <input type="date" name="dob" value = "{{$user->dob}}" class = "form-control"><br>
            @error('dob')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value = "{{$user->phone}}" class = "form-control"><br>
            @error('phone')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value = "{{$user->email}}" class = "form-control"><br>
        @error('email')
            <span class = "text-danger">{{$message}}</span>
        @enderror
        </div>
        <input type = "submit" class="btn btn-primary" value = "Update">
    </form>
    </div>
    @endsection
