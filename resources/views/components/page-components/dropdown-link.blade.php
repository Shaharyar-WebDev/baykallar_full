@props([
    'class' => 'text-gray-950 hover:bg-gray-950 hover:text-white',
    'href' => ''
])

<a href="#" class="m-1 rounded-md px-4 py-2 text-start transition-all {{$class}}">
            {{$text}}
</a>