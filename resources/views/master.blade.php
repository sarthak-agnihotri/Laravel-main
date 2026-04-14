<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>This is the master layout</h1>
    @yield('content')
    <footer>
        <p>Copyright &copy; 2026</p>
    </footer>
</body>
</html>