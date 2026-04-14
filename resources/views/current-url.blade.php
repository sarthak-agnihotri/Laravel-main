<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current URL</title>
</head>
<body>
    <h1>Current URL</h1>
    <p>The current URL is: {{ url()->current() }}</p>
    <p>The full URL is: {{ url()->full() }}</p>
    <p>The previous URL is: {{ url()->previous() }}</p>
    <p>The current path is: {{ request()->path() }}</p>
    <p>The current URL is: {{ request()->url() }}</p>
</body>
</html>