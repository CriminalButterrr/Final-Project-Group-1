<x-guest-layout>
    <form method="POST" action="/products">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- SKU -->
        <div class="mt-4">
            <x-input-label for="sku" :value="__('SKU')" />
            <x-text-input id="sku" class="block mt-1 w-full" type="text" name="sku" :value="old('sku')" required />
            <x-input-error :messages="$errors->get('sku')" class="mt-2" />
        </div>

        <!-- Price -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('Price')" />
            <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
  
        <!-- Quantity -->
        <div class="mt-4">
            <x-input-label for="quantity" :value="__('Quantity')" />
            <x-text-input id="quantity" class="block mt-1 w-full" type="text" name="quantity" :value="old('quantity')" required />
            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
        </div>

        <!-- Supplier -->
        <div class="mt-4">
            <x-input-label for="supplier_id" :value="__('Supplier ID')" />
            <select name="supplier_id" id="supplier_id" class="block mt-1 w-full" required>
                <option value="" disabled selected>Select a supplier</option>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>
                        {{ $supplier->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('supplier_id')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

    
        <div class="flex items-center justify-end mt-4">
            <x-secondary-button class="ms-4">
                {{ __('Cancel') }}
            </x-primary-button>

            <x-primary-button class="ms-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>