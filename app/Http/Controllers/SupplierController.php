<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_supplier' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $suppliers = new supplier;
        $suppliers->nama_supplier = $request->nama_supplier;
        $suppliers->no_telp = $request->no_telp;
        $suppliers->alamat = $request->alamat;
        $suppliers->save();

        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
        $request->validate([
            'nama_supplier' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $supplier->update($request->all());
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
        $supplier->delete();
        return redirect()->route('supplier.index');
    }
}
