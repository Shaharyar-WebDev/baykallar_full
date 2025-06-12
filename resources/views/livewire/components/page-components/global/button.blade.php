@props([
    'variant' => 'primary',
    'type' => 'button',
    'class' => ''
])

@php
  $classes = [
    'primary' => 'bg-gray-950 text-white hover:bg-gray-900 focus:ring-gray-300',
    'secondary' => 'bg-white text-gray-950 border border-gray-300 hover:bg-gray-100 focus:ring-gray-300',
    'ghost' => 'text-gray-700 hover:bg-gray-100 focus:ring-gray-300',
    'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-300',
    'success' => 'bg-green-600 text-white hover:bg-green-700 focus:ring-green-300',
    'warning' => 'bg-yellow-500 text-white hover:bg-yellow-600 focus:ring-yellow-300',
];
@endphp

<button type="{{$type}}" wire:loading.class="opacity-50 cursor-not-allowed" wire:loading.attr="disabled" class="px-5 py-2.5 text-sm transition-all font-medium rounded-sm cursor-pointer focus:ring-2 {{$class}} {{$classes[$variant]}}">
  {{$button ?? 'Button'}}
</button>