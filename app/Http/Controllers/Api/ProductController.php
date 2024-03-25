<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        Product::create($request->all());
        return response()->json([
            'success' => true
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->best_before = $request->best_before;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->location = $request->location;
        $product->main_image = $request->main_image;
        $product->status = $request->status;

        $product->save();

        return response()->json([
            'success' => true
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
