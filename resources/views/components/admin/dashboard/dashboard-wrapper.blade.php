    <section x-data="{ open: true }" class="flex h-[100vh] max-w-auto bg-white dark:bg-zinc-800">

        {{-- Sidebar --}}
       <x-admin.dashboard.sidebar/>
       
       {{-- Main Content --}}
        <main class="h-full w-full">
            {{-- Main Content Header --}}
            <header>
                <x-admin.dashboard.navbar/>
                <main class="p-4">
                    {{$slot}}
                </main>
            </header>
        </main>
    </section>

