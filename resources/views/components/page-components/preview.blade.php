
@isset($component)

@if ($component === 'navbar')

@switch($layout)
@case(1)
<x-layouts.preview>
    <x-page-components.navbars.navbar-layout-1/>
</x-layouts.preview>
        @break
        
        @default
        <h1 class="text-2xl text-red-500">Invalid Layout !!</h1>
@endswitch
@endif

@endisset
