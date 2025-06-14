<nav
    class="flex justify-between items-center p-2 bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-300 dark:border-zinc-700">
    <div>
        <button class="ghost-btn !p-2" 
        @click="open = !open; setSidebarState(open)">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" width="32" height="32" fill="currentColor"
                viewBox="0 0 256 256">
                <path
                    d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
                </path>
            </svg>
        </button>
    </div>
    <button class="ghost-btn !p-2" type="button" id="theme-toggle-btn">
        theme
    </button>
</nav>