@props([
    'tooltip' => 'tooltip',
    'placement' => 'bottom',
    'class' => ''
])

@php
    $placements = [
        'top' => 'bottom-full group-hover/tooltip:-translate-y-2',
        'bottom' => 'top-full group-hover/tooltip:translate-y-2',
        'left' => 'right-full group-hover/tooltip:-translate-x-2',
        'right' => 'left-full group-hover/tooltip:translate-x-2'
    ];
@endphp
 
<div class="relative group/tooltip flex justify-center items-center {{$class}}">
    <div class="hover:text-gray-800 cursor-pointer">
        {{$button}}
    </div>
    <div class="absolute text-center transform opacity-0 pointer-events-none group-hover/tooltip:opacity-100  transition-all px-4 py-1 bg-gray-950 text-white shadow-2xl backdrop-blur-2xl text-sm rounded-sm z-[99]
    {{$placements[$placement]}}">
        {{$tooltip}}
    </div>
</div>