<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SubscriptionPlan;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MerchantController extends Controller
{
    use ImageUploadTrait;
    // Show merchant dashboard
    public function dashboard()
    {
        $user = auth()->user();
        $products = Product::where('seller_id',$user->id)->get();
        return view('merchant.dashboard', compact('user','products'));
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
        $slug = Str::slug($request->input('name'));
        // Create new product
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $imagePath = $this->uploadImage($request, 'image', 'products_images');

            if ($imagePath) {
                $product->image = $imagePath;
            }
        $product->slug = $slug;
        $product->type = $request->input('type');
        $product->price = $request->input('price');
        $product->seller_id = auth()->user()->id;
        $product->save();
        toastr()->success('Product created successfully');
        return back();
        
    }

    // Show subscription plans
    public function showSubscriptionPlans()
    {
        // Fetch subscription plans from database
        $plans = SubscriptionPlan::all();

        return view('merchant.subscription_plans', compact('plans'));
    }
}
