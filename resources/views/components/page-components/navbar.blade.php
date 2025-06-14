@php
    $nav_layout = $navbar->getLayout();
@endphp

@isset($nav_layout)
@switch($nav_layout)
    @case(1)
<x-page-components.navbars.navbar-layout-1/>
        @break
        @default
        <h1 class="text-2xl font-bold">Invalid Layout</h1>
        
@endswitch    
@else
<h1 class="text-2xl font-bold text-center mt-4">Please Select A Navbar Layout</h1>
@endisset

