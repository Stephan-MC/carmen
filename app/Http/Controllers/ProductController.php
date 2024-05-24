<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view($request->routeIs('admin.*') ? 'admin.products.index' : 'products.index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $attributes = $request->safe();

        $product = Product::query()->create($attributes->toArray());

        $image = $request->file('image')->storePubliclyAs(name: $product->id . "." . $request->file('image')->extension(), options: 'public', path: '');

        $product->update(compact('image'));

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $attributes = $request->safe();

        if ($request->hasFile('image')) {
            $imageName = $product->id . "." . $request->file('image')->extension();

            $image = $request->file('image')->storePubliclyAs(path: '', name: $imageName, options: 'public');

            $attributes = $attributes->merge(compact('image'));
        }

        $product->update($attributes->toArray());

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->destroy();

        return back();
    }
}
