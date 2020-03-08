@extends('layout')

@section('content')
    <h1>My {{$foo}} {{$req}} Page</h1>

    <ul>
    @foreach ($tasks as $task)
        <li>{{$task}}</li>    
    @endforeach
@endsection