<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-partials.head/>
    
    <body class="text-md">
        {{ $slot }}
    </body>
    
    <x-partials.scripts/>
    @stack('scripts')
</html>
