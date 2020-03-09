<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1>Projects</h1>
    <ul>
        @foreach ($projects as $prj)
            <li>
                <a href="/projects/{{ $prj->id }}">
                    {{ $prj->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="/projects/create">Create</a> a new project
</body>
</html>