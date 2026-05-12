<!DOCTYPE html>
<html>
<head>
    <title>{{ __('messages.university') }}</title>
</head>
<body>

    <!-- Header -->
    <h1>{{ __('messages.university') }}</h1>

    <!-- Navigation -->
    <a href="/homepage">{{ __('messages.home') }}</a> |
    <a href="/aboutpage">{{ __('messages.about') }}</a>

    <!-- Language buttons -->
    <div style="margin-top:10px;">
        <a href="/lang/en">English</a>
        <a href="/lang/hi">Hindi</a>
        <a href="/lang/pa">Punjabi</a>
    </div>

    <hr>

    <!-- Dynamic Content -->
    @yield('content')

</body>
</html>