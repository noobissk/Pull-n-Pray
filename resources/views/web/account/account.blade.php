<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{ asset('css/website.css') }}" rel="stylesheet" />
    </head>
    <body class="font-sans antialiased">
        <div class="content">
            <h1>Welcome to My Website</h1>
            <p>Click <a href="https://example.com" target="_blank">here</a> to visit an example page.</p>
            
            <div class="button-container">
                <button onclick="alert('Button 1 clicked!')">Button 1</button>
                <button onclick="alert('Button 2 clicked!')">Button 2</button>
            </div>
        </div>
    </body>
</html>
