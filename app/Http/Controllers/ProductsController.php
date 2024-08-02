<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
}
