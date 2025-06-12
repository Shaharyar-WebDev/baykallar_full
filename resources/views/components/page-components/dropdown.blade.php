@props([
    'class' => '',
    'dropdownClass' => '',
    'position' => 'bottom-left', // default position
])

@php
    // Tailwind-based position map
    $positionClasses = [
        'bottom-left' => 'top-8 left-0',
        'bottom-right' => 'top-8 right-0',
        'top-left' => 'bottom-full left-0 mb-2',
        'top-right' => 'bottom-full right-0 mb-2',
        'left' => 'top-0 right-full mr-2',
        'right' => 'top-0 left-full ml-2',
    ];

    $resolvedPosition = $positionClasses[$position] ?? 'top-8 left-0';
@endphp

<div x-data="{ open: false }" class="relative flex justify-start items-center cursor-pointer group transition-all">
    <div @click="open = !open" class="flex justify-center items-center {{ $class }}">
        {{ $button }}
    </div>

    <div class="absolute top-full left-0 h-3 w-full"></div>

    <div
        x-show="open"
        @click.away="open = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-6"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition duration-50"
        x-transition:leave-start="opacity-100 translate-y-6"
        x-transition:leave-end="opacity-0 translate-y-1"
        class="min-w-44 overflow-hidden border border-gray-300 transition-all flex flex-col text-darkBrand bg-gray-100 backdrop-blur-md rounded-md shadow-xl absolute z-[99] pointer-events-auto {{ $resolvedPosition }} {{ $dropdownClass }}"
    >
        {{ $links }}
    </div>
</div>
