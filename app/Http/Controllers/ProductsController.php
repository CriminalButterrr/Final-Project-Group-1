<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();

        return view('products.index', ['products'=>$products]);
    }

    public function show($id){
        $products = Products::findOrFail($id);
        return view('products.show', ['products' => $products]);
    }
}
