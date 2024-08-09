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
                                    <h2 class="text-2xl font-bold text-gray-800">{{$supplier->name}}</h2>

                                    <div class="mt-8">
                                        <ul class="space-y-3 list-none mt-4 text-sm text-gray-800">
                                            <li class="text-gray-800 text-xl font-bold">Email: {{$supplier->email}}</li>
                                            <li class="text-gray-800 text-xl font-bold">Phone Number: {{$supplier->phone}}</li>
                                            <li class="text-gray-800 text-xl font-bold">Address: {{$supplier->address}}</li>
                                        </ul>
                                    </div>

                                    <!-- Edit Button -->
                                    <div class="mt-6 flex space-x-4">
                                        <a href="{{ route('suppliers.edit', $supplier->id) }}" >
                                            <x-secondary-button class=" text-white bg-yellow-500 hover:bg-yellow-400 ">
                                                {{ __('Edit Supplier') }}
                                            </x-primary-button>
                                        </a>
                                        
                                        <x-danger-button
                                            x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'confirm-supplier-deletion')"
                                        >{{ __('Delete Supplier') }}</x-danger-button>

                                        <x-modal name="confirm-supplier-deletion" :show="$errors->supplierDeletion->isNotEmpty()" focusable>
                                            <form method="post" action="{{ route('suppliers.destroy', $supplier->id) }}" class="p-6">
                                                @csrf
                                                @method('delete')
                                        
                                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                                    {{ __('Are you sure you want to delete this supplier?') }}
                                                </h2>
                                        
                                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                                    {{ __('Once the supplier is deleted, all of its data will be permanently removed. This action cannot be undone.') }}
                                                </p>
                                        
                                                <div class="mt-6 flex justify-end">
                                                    <x-secondary-button x-on:click="$dispatch('close')">
                                                        {{ __('Cancel') }}
                                                    </x-secondary-button>
                                        
                                                    <x-danger-button class="ms-3">
                                                        {{ __('Delete Supplier') }}
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