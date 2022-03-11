@extends('layout.app')
@section('content')
<h1>Product List</h1>
    <ul><ul><h3>
        @foreach($bikes as $b)
            <li>{{$b}}</li>
        @endforeach
        </ul></ul></h3>
@endsection
