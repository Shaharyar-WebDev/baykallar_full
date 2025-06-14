@props([
    'variant' => 'primary',
    'type' => 'button',
    'class' => '',
    'id' => 'btn',
    'wire_click' => '',
    'wire_target' => '',
    'wire_loading' => false 
])

@php

$loadingSpinner = null;

$defaultSpinner = '<svg aria-hidden="true" role="status" class="inline w-4 h-4 !text-black animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"></path>
    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"></path>
    </svg>';

  $classes = [
    'primary' => 'bg-gray-950 text-white hover:bg-gray-900 focus:ring-gray-300',
    'secondary' => 'bg-white text-gray-950 border border-gray-300 hover:bg-gray-100 focus:ring-gray-300',
    'ghost' => 'text-gray-950 dark:text-gray-300 hover:text-gray-800 hover:bg-gray-100 focus:ring-gray-300',
    'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-300',
    'success' => 'bg-green-600 text-white hover:bg-green-700 focus:ring-green-300',
    'warning' => 'bg-yellow-500 text-white hover:bg-yellow-600 focus:ring-yellow-300',
];
@endphp

<button type="{{$type}}" id="{{$id}}" 
@if(!empty($wire_click))
wire:click="{{$wire_click}}"
@endif
@if($wire_loading)
wire:loading.class="opacity-50 cursor-not-allowed"
wire:loading.attr="disabled"
@endif
class="px-5 py-2.5 text-sm transition-all font-medium rounded-sm cursor-pointer focus:ring-1 {{$class}} {{$classes[$variant]}}">
  <span class="flex justify-center items-center"
  @if($wire_loading)
  wire:loading.remove
  @endif
  >
    {{trim($slot) ? $slot : 'Button'}}
  </span>
  @if($wire_loading)
   <span wire:loading>
    {!!$loadingSpinner ?? $defaultSpinner !!}
 </span>
 @endif
</button>