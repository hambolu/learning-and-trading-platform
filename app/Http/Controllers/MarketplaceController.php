<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MarketplaceController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $products = Product::all();
        $user = User::find(Auth::id());
        return view('marketplace.index', compact('products','user'));
    }

    public function show($id)
    {
        // Find a specific product by its ID
        $product = Product::find($id);

        if (!$product) {
            abort(404); // Product not found
        }

        return view('marketplace.show', ['product' => $product]);
    }

    public function create()
    {
        return view('marketplace.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new product
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('marketplace.index')->with('success', 'Product added successfully');
    }

    public function edit($id)
    {
        // Find the product to edit
        $product = Product::find($id);

        if (!$product) {
            abort(404); // Product not found
        }

        return view('marketplace.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update the existing product
        $product = Product::find($id);
        if (!$product) {
            abort(404); // Product not found
        }

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('marketplace.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        // Find the product to delete
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return redirect()->route('marketplace.index')->with('success', 'Product deleted successfully');
        }

        abort(404); // Product not found
    }
}
