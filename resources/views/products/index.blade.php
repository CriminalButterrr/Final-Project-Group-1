<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-center text-sm font-light text-surface dark:text-white">
                            <thead class="border-b border-neutral-200 bg-[#332D2D] font-medium text-white dark:border-white/10">
                            <tr>
                                <th scope="col" class=" px-6 py-4">#</th>
                                <th scope="col" class=" px-6 py-4">Name</th>
                                <th scope="col" class=" px-6 py-4">Description</th>
                                <th scope="col" class=" px-6 py-4">SKU</th>
                                <th scope="col" class=" px-6 py-4">Quantity</th>
                                <th scope="col" class=" px-6 py-4">Price</th>
                                <th scope="col" class=" px-6 py-4">Supplier ID</th>
                            </tr>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr class="border-b border-neutral-200 dark:border-white/10">
                                        <td class="whitespace-nowrap  px-6 py-4 font-medium">{{$product->id}}</td>
                                        <td class="whitespace-nowrap  px-6 py-4"><a href="products/{{$product->id}}">{{$product->name}}</a></td>
                                        <td class="whitespace-nowrap  px-6 py-4">{{$product->description}}</td>
                                        <td class="whitespace-nowrap  px-6 py-4">{{$product->sku}}</td>
                                        <td class="whitespace-nowrap  px-6 py-4">{{$product->quantity}}</td>
                                        <td class="whitespace-nowrap  px-6 py-4">{{$product->price}}</td>
                                        <td class="whitespace-nowrap  px-6 py-4">{{$product->supplier_id}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>