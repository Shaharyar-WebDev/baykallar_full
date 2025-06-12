 <script>
        document.addEventListener('livewire:navigated', function() {

            const menuButton = document.getElementById('menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const searchButton = document.getElementById('search-button');
            const searchBar = document.getElementById('search-bar');
            const closeSearch = document.getElementById('close-search');
            
            if(menuButton) {

                menuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            
            }
        });
</script>