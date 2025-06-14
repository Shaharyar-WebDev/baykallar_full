<nav class="upper">
    <nav class="flex bg-gray-950 justify-around items-center">
        <div class="hidden md:flex space-x-8 justify-center px-2 py-2 text-white">
            <a href="#" class="upper-nav-link dark:!text-white">About Us</a>
            <a href="#" class="upper-nav-link dark:!text-white">Contact</a>
            <a href="#" class="upper-nav-link dark:!text-white">shery.codes@gmail.com</a>
        </div>

        <div class="hidden md:flex space-x-8 justify-center px-2 py-2 text-white">

            <x-page-components.dropdown class="text-sm gap-2">
                <x-slot:button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="transition-all text-white size-5" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M247.15,212.42l-56-112a8,8,0,0,0-14.31,0l-21.71,43.43A88,88,0,0,1,108,126.93,103.65,103.65,0,0,0,135.69,64H160a8,8,0,0,0,0-16H104V32a8,8,0,0,0-16,0V48H32a8,8,0,0,0,0,16h87.63A87.76,87.76,0,0,1,96,116.35a87.74,87.74,0,0,1-19-31,8,8,0,1,0-15.08,5.34A103.63,103.63,0,0,0,84,127a87.55,87.55,0,0,1-52,17,8,8,0,0,0,0,16,103.46,103.46,0,0,0,64-22.08,104.18,104.18,0,0,0,51.44,21.31l-26.6,53.19a8,8,0,0,0,14.31,7.16L148.94,192h70.11l13.79,27.58A8,8,0,0,0,240,224a8,8,0,0,0,7.15-11.58ZM156.94,176,184,121.89,211.05,176Z">
                        </path>
                    </svg>
                    <span>
                        Language
                    </span>
                </x-slot:button>

                <x-slot:links>
                    <a href="#"
                        class="m-1 rounded-md px-4 py-2 text-start text-gray-950 hover:bg-gray-950 hover:text-white transition-all">
                        English
                    </a>
                    <a href="#"
                        class="m-1 rounded-md px-4 py-2 text-start text-gray-950 hover:bg-gray-950 hover:text-white transition-all">
                        Turkish
                    </a>
                </x-slot:links>
            </x-page-components.dropdown>

            <x-page-components.dropdown class="text-sm gap-2">
                <x-slot:button>
                    <svg class="transition-all text-white size-5" xmlns="http://www.w3.org/2000/svg" width="32"
                        height="32" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M120,40V32a8,8,0,0,1,16,0v8a8,8,0,0,1-16,0Zm72,88a64,64,0,1,1-64-64A64.07,64.07,0,0,1,192,128Zm-16,0a48,48,0,1,0-48,48A48.05,48.05,0,0,0,176,128ZM58.34,69.66A8,8,0,0,0,69.66,58.34l-8-8A8,8,0,0,0,50.34,61.66Zm0,116.68-8,8a8,8,0,0,0,11.32,11.32l8-8a8,8,0,0,0-11.32-11.32ZM192,72a8,8,0,0,0,5.66-2.34l8-8a8,8,0,0,0-11.32-11.32l-8,8A8,8,0,0,0,192,72Zm5.66,114.34a8,8,0,0,0-11.32,11.32l8,8a8,8,0,0,0,11.32-11.32ZM40,120H32a8,8,0,0,0,0,16h8a8,8,0,0,0,0-16Zm88,88a8,8,0,0,0-8,8v8a8,8,0,0,0,16,0v-8A8,8,0,0,0,128,208Zm96-88h-8a8,8,0,0,0,0,16h8a8,8,0,0,0,0-16Z">
                        </path>
                    </svg>
                    <span>
                        Theme
                    </span>
                </x-slot:button>
                <x-slot:links>
                    <a href="#"
                        class="m-1 rounded-md px-4 py-2 text-start text-gray-950 hover:bg-gray-950 hover:text-white transition-all">
                        Light
                    </a>
                    <a href="#"
                        class="m-1 rounded-md px-4 py-2 text-start text-gray-950 hover:bg-gray-950 hover:text-white transition-all">
                        Dark
                    </a>
                </x-slot:links>
            </x-page-components.dropdown>

        </div>

    </nav>
</nav>