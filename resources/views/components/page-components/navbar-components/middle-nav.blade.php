  <!-- Navbar -->
        <nav class="middle bg-white border-b-1 shadow-sm border-gray-300 fixed md:sticky top-0 w-full z-50">
            <div class="max-w-7xl mx-auto px-4">
                <!-- Desktop Navbar -->
                <div class="flex justify-between items-center py-2">
                    <!-- Logo -->
                    <x-page-components.navbar-components.navbar-logo/>

                    <div class="hidden md:flex">
                        <livewire:components.page-components.searchbar/>
                    </div>

                    <!-- Right Side Icons -->
                    <div class="flex items-center gap-[8px] md:space-x-8">

                        <!-- profile dropdown -->
                        <x-page-components.dropdowns.profile-dropdown/>

                    <!-- Cart dropdown -->
                    <x-page-components.dropdowns.cart/>

                    <!-- Wishlist dropdown -->
                   <x-page-components.dropdowns.wishlist/>

                   <div onclick="toggleSearch()" class="md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
                   </div>

                        <x-page-components.navbar-components.mobile-nav-btn/>

                    </div>
                </div>

                <!-- Mobile Search (below navbar) -->
<div class="block md:hidden w-full mt-2 transition-all h-0 overflow-hidden" id="mobile-searchbar">
  <livewire:components.page-components.searchbar/>
</div>

            </div>

<x-page-components.navbar-components.mobile-menu/>
        </nav>

        @push('scripts')
            <script>
                const toggleSearch = () => {
                    const mobileSearchBar = document.getElementById('mobile-searchbar');
                    mobileSearchBar.classList.toggle("h-auto");
                    mobileSearchBar.classList.toggle("my-4");
                }
            </script>
        @endpush