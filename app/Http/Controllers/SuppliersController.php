<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    // Index all records of suppliers
    public function index(){
        $suppliers = Supplier::all();

        return view('suppliers.index', ['suppliers'=>$suppliers]);
    }

    // Show a specific record of from the suppliers
    public function show($id){
        $supplier = Supplier::findOrFail($id);

        return view('suppliers.show', ['supplier'=>$supplier]);
    }

    // Return a form to create  a record of a supplier
    public function create() {
        return view('suppliers.create');
    }

    // Store the details from the form and redirect to suppliers index
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:suppliers,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
        ]);
        Supplier::create($validatedData);

        return redirect()->route('suppliers.index');
    }

    // Return a form to edit a record of a supplier
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit', compact('supplier'));
    }

    // Patch the details from the form and redirect to suppliers details
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:suppliers,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
        ]);
        $supplier = Supplier::findOrFail($id);
        $supplier->update($validatedData);

        return redirect()->route('suppliers.show', $id);
    }
}
