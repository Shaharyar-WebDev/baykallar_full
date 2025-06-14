@section('title', 'cms - navbar management')

<x-admin.dashboard.dashboard-wrapper>

    <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-2">

        {{$navbar->clearCache()}}
        <x-admin.dashboard.components.app-card title="Layout 1" description="" 
        class="{{ $navbar->getLayout() == 1 ? '!border-2 !border-green-600' : '' }}"
        >
        @if ($navbar->getLayout() == 1)
        <x-page-components.button variant="success" class="disabled !px-3">
             <span class="inline-flex justify-between items-center gap-2">
                 <svg xmlns="http://www.w3.org/2000/svg" class="size-5" width="32" height="32" fill="currentColor" viewBox="0 0 256 256"><path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"></path></svg>
                 Selected
            </span>
        </x-page-components.button>
        @else
            <x-page-components.button class="!px-3"  wire_click="select(1)" wire_target="select()" wire_loading="true" variant="ghost">
                <span class="inline-flex justify-between items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" width="32" height="32" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M240,136v64a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V136a16,16,0,0,1,16-16H72a8,8,0,0,1,0,16H32v64H224V136H184a8,8,0,0,1,0-16h40A16,16,0,0,1,240,136Zm-117.66-2.34a8,8,0,0,0,11.32,0l48-48a8,8,0,0,0-11.32-11.32L136,108.69V24a8,8,0,0,0-16,0v84.69L85.66,74.34A8,8,0,0,0,74.34,85.66ZM200,168a12,12,0,1,0-12,12A12,12,0,0,0,200,168Z">
                        </path>
                    </svg>
                    Select
                </span>
            </x-page-components.button>
        @endif

            <a href="{{route('preview', [
    'component' => 'navbar',
    'layout' => '1'
])}}"
target="_blank">
                <x-page-components.button class="!px-3" variant="secondary">
                    <span class="inline-flex justify-between items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" width="32" height="32"
                            fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z">
                            </path>
                        </svg>
                        Preview
                    </span>
                </x-page-components.button>
            </a>

        </x-admin.dashboard.components.app-card>

    </div>


</x-admin.dashboard.dashboard-wrapper>