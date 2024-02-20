<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\CloudinaryStorage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('pages.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $products)
    {
        //
        $request->validate([
            'photo'         => 'required',
            'product_name'  => 'required',
            'product_code'  => 'required',
            'product_price' => 'required',
            'stock'         => 'required',
            'category_id'   => 'required',
            'description'   => 'required',
        ]);

        $image  = $request->file('photo');
        $result = CloudinaryStorage::upload(
            $image->getRealPath(),
            $image->getClientOriginalName()
        );

        $products::create([
            'product_name'  => $request['product_name'],
            'product_code'  => $request['product_code'],
            'product_price' => $request['product_price'],
            'stock'         => $request['stock'],
            'category_id'   => $request['category_id'],
            'description'   => $request['description'],
            'photo'        => $result,
        ]);

        return redirect()->route('pages.product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
