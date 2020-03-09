@extends('layout')

@section('content')
    <h1 class="title">Projects</h1>
    <ul>
        @foreach ($projects as $prj)
            <li>
                <a href="/projects/{{ $prj->id }}">
                    {{ $prj->title }}
                </a>
            </li>
        @endforeach
    </ul>
    <br>
    <a href="/projects/create">Create</a> a new project
@endsection