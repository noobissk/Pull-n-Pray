<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('img/favicon.ico') }}" rel="icon"/>

        <link href="{{ asset('css/auth.css') }}" rel="stylesheet" />
    </head>
    <body>
        @yield("content")
    </body>
</html>
