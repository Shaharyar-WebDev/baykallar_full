<ul id="links" class="p-2">
    <li>
        @can('administration')
        <a class="sidebar-link active" href="{{route('cms')}}" wire:navigate>
            Content Management 
        </a>
        @endcan
    </li>
</ul>