<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{config('app.name')}} - @yield('title', 'Title') </title>
    <x-partials.head-links />
    <x-partials.head-scripts />
    <x-partials.head-styles />
    @stack('styles')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>