<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Suppliers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="font-sans">
                        <div class="p-4 lg:max-w-5xl max-w-lg mx-auto">
                            <div class="grid items-start grid-cols-1 lg:grid-cols-2 gap-6 max-lg:gap-12">
              
                                <div class="w-full lg:sticky top-0">
                                    <img src="https://readymadeui.com/images/product2.webp" alt="Product" class="w-4/5 rounded-md object-cover" />
                                </div>
              
                                <div>
                                    <h2 class="text-2xl font-bold text-gray-800">{{$suppliers->name}}</h2>

                                    <div class="mt-8">
                                        <ul class="space-y-3 list-none mt-4 text-sm text-gray-800">
                                            <li class="text-gray-800 text-xl font-bold">E   mail: {{$suppliers->email}}</li>
                                            <li class="text-gray-800 text-xl font-bold">Phone Number: {{$suppliers->phone}}</li>
                                            <li class="text-gray-800 text-xl font-bold">Address: {{$suppliers->address}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>