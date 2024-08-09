<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
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
                                    <h2 class="text-2xl font-bold text-gray-800">{{$products->name}}</h2>
                                    <div class="flex flex-wrap gap-4 mt-4">
                                        <p class="text-gray-800 text-xl font-bold">{{$products->price}}</p>
                                    </div>
              
                                    <div class="mt-8">
                                        <h3 class="text-xl font-bold text-gray-800">About the item</h3>
                                        <p>{{$products->description}}</p>
                                    </div>
              
                                    <div class="mt-8">
                                        <ul class="space-y-3 list-none mt-4 text-sm text-gray-800">
                                            <li>SKU: {{$products->sku}}</li>
                                            <li>Quantity: {{$products->quantity}}</li>
                                            <li>Supplier: {{$products->supplier->name}} </li>
                                        </ul>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{ route('products.edit', $products->id) }}" class="px-4 py-2 bg-green-500 text-white font-semibold rounded-md shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                            Edit product
                                        </a>
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