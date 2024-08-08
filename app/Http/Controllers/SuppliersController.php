<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index(){
        $suppliers = Supplier::all();

        return view('suppliers.index', ['suppliers'=>$suppliers]);
    }

    public function show($id){
        $suppliers = Supplier::findOrFail($id);

        return view('suppliers.show', ['suppliers'=>$suppliers]);
    }
    public function create() {
        return view('suppliers.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:suppliers,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
        ]);
        Supplier::create($validatedData);

        return redirect()->route('suppliers');
    }
}
