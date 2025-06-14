<aside 
x-show="open" x-transition x-init="open = getSidebarState()"
    class="z-[50] h-full p-2 border-r bg-zinc-50 dark:bg-zinc-900 border-zinc-300 dark:border-zinc-700 fixed lg:static w-64 md:w-72"
    wire:ignore>

    <button class="ghost-btn !p-2 lg:hidden" 
    @click="open = !open; setSidebarState(open)"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" width="32" height="32" fill="currentColor"
            viewBox="0 0 256 256">
            <path
                d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z">
            </path>
        </svg>
    </button>

    <div id="sidebar-header" class="flex gap-2 justify-center items-center p-2">
        <img src="{{asset('images/logo/LOGOM.webp')}}" loading="lazy" alt="logo" class="w-24">
    </div>

    <x-admin.dashboard.components.sidebar-links />

</aside>
<div x-show="open" x-transition.opacity class="fixed inset-0 bg-transparent bg-opacity-50 z-30 sm:hidden"
    @click="open = false; setSidebarState(open)"></div>