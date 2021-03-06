<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Laravel - Comics</title>
    </head>
    <body>
        @include('partials.header')

        <main class="container">
            @yield('home-main')
            @yield('comics-main')
        </main>

        @include('partials.footer')
    </body>
</html>