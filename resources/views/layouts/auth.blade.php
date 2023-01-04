<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/auth.scss', 'resources/js/auth.js'])
</head>
<body>
    <div id="app" class="h-100">
        @include('layouts/parts/navbar')

        <main class="container-fluid h-100 d-flex align-items-center">

            @yield('content')
        </main>
    </div>
</body>
</html>
