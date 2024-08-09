<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class="mt-6">
        {{-- BIG BOX --}}
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
            <a id="docs-card"
                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                style="grid-row: span 4;">
                <div class="relative flex items-center gap-6 lg:items-end">
                    <div id="docs-card-content" class="flex justify-center content-center items-center gap-6 lg:flex-col">
                        <p class="text-xl font-bold text-gray-800">CRUD OPERATIONS</p>
                        <img src="{{ URL('images/crud.jpg') }}" alt="CRUD operations diagram"
                            class="mt-9 w-full h-full object-cover rounded-lg" />
                    </div>
                </div>
            </a>

            {{-- Small sections --}}
            <a
                class="flex items-center gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                <img src="{{ URL('images/Create.png') }}" alt="create" class="w-1 h-1" />
                <span>CREATE: Insert - To Store New Data</span>
            </a>

            <a
                class="flex items-center gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                <img src="{{ URL('images/Read.png') }}" alt="read" class="w-1 h-1" />
                <span>READ: Select - To Retrieve Data</span>
            </a>

            <a
                class="flex items-center gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                <img src="{{ URL('images/Update.png') }}" alt="update" class="w-1 h-1" />
                <span>UPDATE: Update - To Change or Modify Data</span>
            </a>

            <a
                class="flex items-center gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                <img src="{{ URL('images/Delete.png') }}" alt="delete" class="w-1 h-1" />
                <span>DELETE: Delete - Delete or Remove Data</span>
            </a>
        </div>
    </main>
</x-app-layout>