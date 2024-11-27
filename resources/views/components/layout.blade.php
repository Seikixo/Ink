<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;700&family=Megrim&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

        <title></title>
        @vite('resources/css/app.css')
    </head>
    <body >
        <div class="min-h-screen z-0 relative">
            <img class="absolute z-0 min-h-screen" src="{{asset('images/bg-1.jpg')}}" alt="">
            {{ $slot }}
        </div>
    </body>
</html>
