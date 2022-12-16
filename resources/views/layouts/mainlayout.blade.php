<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wood Company | @yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@100;200;300;400;500;600;700&family=Playfair+Display:wght@100;200;300;400;500;600;700&family=Overpass:wght@200;300;400;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="font-sans text-gray-700 antialiased bg-white">
    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    {{-- @vite('resources/js/app.js') --}}
</body>

</html>
