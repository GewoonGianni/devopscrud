<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SuperVetBlog</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item {{Request::path() === '/' ? 'active' : ''}}">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{Request::path() === 'blog' ? 'active' : ''}}">
                <a class="nav-link" href="/blog">blog</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')

<footer class="footer bg-dark">
    <div class="container">
        <span class="text-muted m-2">Made By Gianni Meesters</span>
    </div>
</footer>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
