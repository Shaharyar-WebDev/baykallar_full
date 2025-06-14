@props([
    'href' => '',
    'icon' => '',
    'title' => 'Title',
    'description' => 'Description',
    'class' => ''
])

@if(!empty($href))
<a 
href="{{$href}}" class="app-card group {{$class}}" wire:navigate>
    <div class="icon">
      {!!$icon!!}
    </div>
    <p>
        <h1 class="text-lg font-bold">{{$title}}</h1>
        <span class="text-xs text-zinc-500 dark:text-zinc-400">
            {{$description}}
        </span>
    </p>
    <div class="flex justify-between items-center gap-2">
        {{$slot ?? ''}}
    </div>
</a>
@else
<div tabindex="0" class="app-card group {{$class}}">
    <div class="icon">
      {!!$icon!!}
    </div>
    <p>
        <h1 class="text-lg font-bold">{{$title}}</h1>
        <span class="text-xs text-zinc-500 dark:text-zinc-400">
            {{$description}}
        </span>
    </p>
    <div class="flex justify-between items-center gap-2">
        {{$slot ?? ''}}
    </div>
</div>
@endif