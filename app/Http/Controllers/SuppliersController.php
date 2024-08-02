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
}
