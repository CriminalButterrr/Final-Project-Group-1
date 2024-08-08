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
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Product') }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __("Update the product's information.") }}
                        </p>
                    </header>

                    <form method="post" action="{{ route('products.update', $product->id ?? '') }}" class="mt-6 space-y-6">
                        @csrf
                        @method($product ? 'patch' : 'post') 
                        
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $product->name ?? '')" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                    
                        <!-- Description -->
                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $product->description ?? '')" />
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                    
                        <!-- SKU -->
                        <div>
                            <x-input-label for="sku" :value="__('SKU')" />
                            <x-text-input id="sku" name="sku" type="text" class="mt-1 block w-full" :value="old('sku', $product->sku ?? '')" required />
                            <x-input-error class="mt-2" :messages="$errors->get('sku')" />
                        </div>
                    
                        <!-- Price -->
                        <div>
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" :value="old('price', $product->price ?? '')" />
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </div>
                    
                        <!-- Quantity -->
                        <div>
                            <x-input-label for="quantity" :value="__('Quantity')" />
                            <x-text-input id="quantity" name="quantity" type="text" class="mt-1 block w-full" :value="old('quantity', $product->quantity ?? '')" />
                            <x-input-error class="mt-2" :messages="$errors->get('quantity')" />
                        </div>
                    
                        <!-- Supplier -->
                        <div>
                            <x-input-label for="supplier_id" :value="__('Supplier')" />
                            <select name="supplier_id" id="supplier_id" class="block mt-1 w-full" required>
                                <option value="">{{ __('Select a Supplier') }}</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}" {{ old('supplier_id', $product->supplier_id ?? '') == $supplier->id ? 'selected' : '' }}>
                                        {{ $supplier->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('supplier_id')" />
                        </div>
                    
                        <!-- Submit Button -->
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                    
                            @if (session('status') === 'product-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400"
                                >{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>