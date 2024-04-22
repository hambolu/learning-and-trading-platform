<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubscriptionPlan;

class MerchantController extends Controller
{
    // Show merchant dashboard
    public function dashboard()
    {
        $user = auth()->user();
        return view('merchant.dashboard', compact('user'));
    }

    public function createProductForm()
    {
        $user = auth()->user();
        return view('merchant.create_product', compact('user'));
    }

    // Store newly created product
    public function storeProduct(Request $request)
    {
        // Validate product data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            // Add more validation rules as needed
        ]);

        // Create new product
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->merchant_id = auth()->user()->id;
        $product->save();

        return redirect()->route('merchant.dashboard')->with('success', 'Product created successfully!');
    }

    // Show subscription plans
    public function showSubscriptionPlans()
    {
        // Fetch subscription plans from database
        $plans = SubscriptionPlan::all();

        return view('merchant.subscription_plans', compact('plans'));
    }
}
