<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
        <link href="{{ asset('css/website.css') }}" rel="stylesheet" />
    </head>
    <body>
        {{-- @include('web.account.inc.login') --}}
        @yield("content")
    </body>
</html>
