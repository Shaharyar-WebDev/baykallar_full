<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-partials.head/>
    
    <body class="text-md dark:text-gray-200 text-gray-950">
        {{ $slot }}
    </body>
    
    <x-partials.scripts/>
    @stack('scripts')
    
</html>
