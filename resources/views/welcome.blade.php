@extends('layout')

@section('content')
    <h1>My {{$foo}} {{$req}} Page</h1>

    <ul>
    @foreach ($tasks as $task)
        <li>{{$task}}</li>    
    @endforeach
    
    <!-- traditional PHP way to do it -->
    <?php foreach ($tasks as $task) : ?>
        <li><?= $task; ?></li>
    <?php endforeach; ?>
    </ul>
@endsection