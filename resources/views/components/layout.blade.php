<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;700&family=Megrim&display=swap" rel="stylesheet">

        <title></title>
        @vite('resources/css/app.css')
    </head>
    <body >
        <div class="bg-custom-brown min-h-screen z-0">
            {{ $slot }}
        </div>
    </body>
</html>
