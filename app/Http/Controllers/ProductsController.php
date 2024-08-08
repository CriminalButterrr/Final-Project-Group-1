<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('products.index', ['products'=>$products]);
    }

    public function show($id){
        $products = Product::with('supplier')->findOrFail($id);

        return view('products.show', ['products'=>$products]);
    }

    public function create() {
        $suppliers = Supplier::all();
        return view('products.create', compact('suppliers'));
    }
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
}
