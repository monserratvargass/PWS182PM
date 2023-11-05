<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <script src="sweetalert2.all.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/js/app.js'])
        <title>@yield('titulo')</title>
    </head>
        <body>
        @include ('partials.navbar')
        @yield('contenido')
        </body>
</html>
