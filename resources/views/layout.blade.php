<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <title>@yield('title', 'Laravel tutorial')</title>
</head>
<body>
    <div class="container">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/projects">Projects</a></li>
        </ul>
    </div>

    <br>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>