<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wood Company | @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    @vite('resources/js/app.js')
</body>

</html>
