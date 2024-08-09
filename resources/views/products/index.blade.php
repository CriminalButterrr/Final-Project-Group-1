<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    
    <div class="pt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <a href="{{ route('products.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 5v14m7-7H5"></path>
                    </svg>
                    Add product
                </a>
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full text-center text-sm font-light text-surface dark:text-white">
                    <thead class="border-b border-neutral-200 bg-[#332D2D] font-medium text-white dark:border-white/10">
                    <tr>
                        <th scope="col" class=" px-6 py-4">#</th>
                        <th scope="col" class=" px-6 py-4">Name</th>
                        <th scope="col" class=" px-6 py-4">SKU</th>
                        <th scope="col" class=" px-6 py-4">Quantity</th>
                        <th scope="col" class=" px-6 py-4">Price</th>
                        <th scope="col" class=" px-6 py-4">Supplier ID</th>
                    </tr>
                    <tbody >
                        @foreach ($products as $product)
                                <tr class="hover:bg-red-500 hover:bg-opacity-30 cursor-pointer" onclick="window.location.href='{{ route('products.edit', $product->id) }}'">
                                <td class="whitespace-nowrap  px-6 py-4 font-medium">{{$product->id}}</td>
                                <td class="whitespace-nowrap  px-6 py-4"><a href="products/{{$product->id}}">{{$product->name}}</a></td>
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
        <div class="text-center text-white/50"> 
        <p>click the product you want to edit</p>
        </div>
    </div>
    
</x-app-layout>