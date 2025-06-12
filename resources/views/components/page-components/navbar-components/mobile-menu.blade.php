            <!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden bg-white/30 backdrop-blur-xl border-t border-gray-200 shadow-inner px-4 py-6 space-y-3 z-50">
    <!-- Primary Links -->
    <div class="space-y-2">
        <a href="#" class="block px-4 py-3 rounded-lg text-base font-semibold text-gray-800 hover:bg-blue-100 hover:text-blue-600 transition-all">Home</a>
        <a href="#" class="block px-4 py-3 rounded-lg text-base font-semibold text-gray-800 hover:bg-blue-100 hover:text-blue-600 transition-all">Shop</a>
        <a href="#" class="block px-4 py-3 rounded-lg text-base font-semibold text-gray-800 hover:bg-blue-100 hover:text-blue-600 transition-all">Categories</a>
        <a href="#" class="block px-4 py-3 rounded-lg text-base font-semibold text-gray-800 hover:bg-blue-100 hover:text-blue-600 transition-all">About</a>
        <a href="#" class="block px-4 py-3 rounded-lg text-base font-semibold text-gray-800 hover:bg-blue-100 hover:text-blue-600 transition-all">Contact</a>
    </div>

    <!-- Dropdowns -->
    <div x-data="{ langOpen: false, themeOpen: false, profileOpen: false }" class="space-y-2">
        <!-- Language Dropdown -->
        <div>
            <button @click="langOpen = !langOpen" class="w-full flex justify-between items-center px-4 py-3 bg-white/60 backdrop-blur-md rounded-lg text-base font-semibold text-gray-800 hover:bg-blue-100 transition">
                Language
                <svg :class="{'rotate-180': langOpen}" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div x-show="langOpen" x-transition class="mt-2 pl-4 space-y-1">
                <a href="#" class="block py-2 px-3 text-gray-700 rounded hover:bg-blue-100">English</a>
                <a href="#" class="block py-2 px-3 text-gray-700 rounded hover:bg-blue-100">Turkish</a>
            </div>
        </div>

        <!-- Theme Dropdown -->
        <div>
            <button @click="themeOpen = !themeOpen" class="w-full flex justify-between items-center px-4 py-3 bg-white/60 backdrop-blur-md rounded-lg text-base font-semibold text-gray-800 hover:bg-blue-100 transition">
                Theme
                <svg :class="{'rotate-180': themeOpen}" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div x-show="themeOpen" x-transition class="mt-2 pl-4 space-y-1">
                <a href="#" class="block py-2 px-3 text-gray-700 rounded hover:bg-blue-100">Light</a>
                <a href="#" class="block py-2 px-3 text-gray-700 rounded hover:bg-blue-100">Dark</a>
            </div>
        </div>

        <!-- Profile Dropdown -->
        <div>
            <button @click="profileOpen = !profileOpen" class="w-full flex justify-between items-center px-4 py-3 bg-white/60 backdrop-blur-md rounded-lg text-base font-semibold text-gray-800 hover:bg-blue-100 transition">
                Profile
                <svg :class="{'rotate-180': profileOpen}" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div x-show="profileOpen" x-transition class="mt-2 pl-4 space-y-1">
                <a href="#" class="block py-2 px-3 text-gray-700 rounded hover:bg-blue-100">Profile</a>
                <a href="#" class="block py-2 px-3 text-gray-700 rounded hover:bg-blue-100">Logout</a>
            </div>
        </div>
    </div>
</div>

  {{-- <livewire:components.page-components.searchbar/> --}}