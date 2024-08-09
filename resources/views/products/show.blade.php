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
                                    <div class="mt-6 flex space-x-4">
                                        <a href="{{ route('products.edit', $products->id) }}" >
                                            <x-secondary-button class=" text-white bg-yellow-500 hover:bg-yellow-400 dark:bg-yellow-500 dark:text-white focus:ring-yellow-500">
                                                {{ __('Edit Product') }}
                                            </x-primary-button>
                                        </a>
                                        
                                        <x-danger-button
                                            x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'confirm-product-deletion')"
                                        >{{ __('Delete Product') }}</x-danger-button>

                                        <x-modal name="confirm-product-deletion" :show="$errors->productDeletion->isNotEmpty()" focusable>
                                            <form method="post" action="{{ route('products.destroy', $products->id) }}" class="p-6">
                                                @csrf
                                                @method('delete')
                                        
                                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                                    {{ __('Are you sure you want to delete this product?') }}
                                                </h2>
                                        
                                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                                    {{ __('Once the product is deleted, all of its data will be permanently removed. This action cannot be undone.') }}
                                                </p>
                                        
                                                <div class="mt-6 flex justify-end">
                                                    <x-secondary-button x-on:click="$dispatch('close')">
                                                        {{ __('Cancel') }}
                                                    </x-secondary-button>
                                        
                                                    <x-danger-button class="ms-3">
                                                        {{ __('Delete Product') }}
                                                    </x-danger-button>
                                                </div>
                                            </form>
                                        </x-modal>
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