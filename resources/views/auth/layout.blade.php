<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/auth.css') }}" rel="stylesheet" />
        
        <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon"/>
    </head>
    <body>
        @yield("content")
        {{-- <button class="gold" onclick=""></button> --}}
    </body>
</html>
