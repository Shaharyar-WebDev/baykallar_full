<div>
    <div x-data="{open : false}" @click.away="open = false" class="flex search relative justify-center items-center group">
    <div class="inline-flex gap-1 w-full">

        <input type="text" class="w-full md:w-64 lg:w-80 border-gray-300 px-3 py-2 rounded border" placeholder="Search..."
        wire:model.live.debounce.600ms="search"
         @focus="open = true"
         >
        <x-page-components.button variant="secondary" class="hidden md:flex">
            <span wire:loading>
                <svg aria-hidden="true" role="status" class="inline w-4 h-4 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"></path>
    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"></path>
    </svg>
            </span>
        <span wire:loading.remove>
                Search
            </span>
        </x-page-components.button>

    </div>
    <div class="absolute top-full left-0 h-3 w-full"></div>

    @if(strlen($search) > 1)
    <div id="search-results" x-show="open" class="w-110 bg-white border border-gray-200 shadow-lg backdrop-blur-md absolute transform transition-all p-1 rounded-sm top-full opacity-0
    {{$results ? 'opacity-100 translate-y-2' : ''}}
    ">
        {{-- <div id="suggestion" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100 cursor-pointer rounded-sm transition-all">
            <div>
                <img src="https://red-parts.html.themeforest.scompiler.ru/themes/red-ltr/images/products/product-2-245x245.jpg" class="size-14 rounded-full object-cover" alt="img">
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <div class="flex flex-col">
                    <span>
                        Product Name
                    </span>
                    <span>
                        the description
                    </span>
                </div>
                <span>
                     $1200
                </span>
            </div>
        </div>
          <div id="suggestion" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100 cursor-pointer rounded-sm transition-all">
            <div>
                <img src="https://red-parts.html.themeforest.scompiler.ru/themes/red-ltr/images/products/product-2-245x245.jpg" class="size-14 rounded-full object-cover" alt="img">
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <div class="flex flex-col">
                    <span>
                        Product Name
                    </span>
                    <span>
                        the description
                    </span>
                </div>
                <span>
                     $1200
                </span>
            </div>
        </div>
          <div id="suggestion" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100 cursor-pointer rounded-sm transition-all">
            <div>
                <img src="https://red-parts.html.themeforest.scompiler.ru/themes/red-ltr/images/products/product-2-245x245.jpg" class="size-14 rounded-full object-cover" alt="img">
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <div class="flex flex-col">
                    <span>
                        Product Name
                    </span>
                    <span>
                        the description
                    </span>
                </div>
                <span>
                     $1200
                </span>
            </div>
        </div> --}}

            @forelse ($results as $result)
            <div tabindex="0" id="suggestion" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100 cursor-pointer rounded-sm transition-all">
                <div>
                    <img loading="lazy" src="https://red-parts.html.themeforest.scompiler.ru/themes/red-ltr/images/products/product-2-245x245.jpg" class="size-14 rounded-full object-cover" alt="img">
                </div>
                <div class="flex items-center justify-between w-full px-4">
                    <div class="flex flex-col">
                        <span>
                            {{$result['name']}}
                        </span>
                        <span>
                            {{$result['description']}}
                        </span>
                    </div>
                    <span>
                         {{$result['price']}}
                    </span>
                </div>
            </div>
            @empty
             <div id="suggestion" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100 cursor-pointer rounded-sm transition-all">
                <span class="w-full text-center" wire:loading>
                    <svg aria-hidden="true" role="status" class="inline w-5 h-5 text-gray-950 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"></path>
    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"></path>
    </svg>
                </span>
                <span class="w-full text-center" wire:loading.remove>
                    No Search Results
                </span>
             </div>
            @endforelse
    </div>
    @endif
</div>
</div>
