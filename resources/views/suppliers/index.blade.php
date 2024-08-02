<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Suppliers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full text-center text-sm font-light text-surface dark:text-white">
                    <thead class="border-b border-neutral-200 bg-[#332D2D] font-medium text-white dark:border-white/10">
                    <tr>
                        <th scope="col" class=" px-6 py-4">#</th>
                        <th scope="col" class=" px-6 py-4">Name</th>
                        <th scope="col" class=" px-6 py-4">Email</th>
                        <th scope="col" class=" px-6 py-4">Phone Number</th>
                        <th scope="col" class=" px-6 py-4">Address</th>
                    </tr>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr class="border-b border-neutral-200 dark:border-white/10">
                                <td class="whitespace-nowrap  px-6 py-4 font-medium">{{$supplier->id}}</td>
                                <td class="whitespace-nowrap  px-6 py-4"><a href="suppliers/{{$supplier->id}}">{{$supplier->name}}</a></td>
                                <td class="whitespace-nowrap  px-6 py-4">{{$supplier->email}}</td>
                                <td class="whitespace-nowrap  px-6 py-4">{{$supplier->phone}}</td>
                                <td class="whitespace-nowrap  px-6 py-4">{{$supplier->address}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</x-app-layout>