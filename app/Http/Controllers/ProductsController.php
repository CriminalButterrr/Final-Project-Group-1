<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Index all records of suppliers
    public function index(){
        $products = Product::all();

        return view('products.index', ['products'=>$products]);
    }

    // Show a specific record of from the suppliers
    public function show($id){
        $products = Product::with('supplier')->findOrFail($id);

        return view('products.show', ['products'=>$products]);
    }

    // Return a form to create  a record of a supplier
    public function create() {
        $suppliers = Supplier::all();
        return view('products.create', compact('suppliers'));
    }
    
    // Store the details from the form and redirect to suppliers index
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|',
            'sku' => 'required|string|unique:products,sku|max:64',
            'price' => 'required|numeric',
            'quantity' => 'nullable|integer',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);
        Product::create($validatedData);
        error_log(json_encode($validatedData));

        return redirect()->route('products');
    }

    // Return a form to edit a record of a supplier
    public function edit($id){
        $product = Product::findOrFail($id);
        $suppliers = Supplier::all();
        return view('products.edit', compact('product', 'suppliers'));
    }

    // Patch the details from the form and redirect to suppliers details
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'sku' => 'required|string|max:64|unique:products,sku,' . $id,
            'price' => 'nullable|numeric',
            'quantity' => 'nullable|integer',
            'supplier_id' => 'required|exists:suppliers,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('products.show', $id);
    }
}
