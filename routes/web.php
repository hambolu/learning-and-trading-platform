<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/affiliate_dashboard', [DashboardController::class, 'affiliate_dashboard'])->name('affiliate_dashboard');
    Route::get('/sma_dashboard', [DashboardController::class, 'sma_dashboard'])->name('sma_dashboard');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User Management
    Route::get('/users', [DashboardController::class, 'userManagement'])->name('users.index');

    // Course Creation Routes
    Route::get('/create-course', function () {
        return view('create-course');
    });

    Route::get('/curricullum', function () {
        return view('curricullum');
    });
    Route::get('/setting', function () {
        return view('setting');
    });

    Route::get('/merchant/dashboard', [MerchantController::class, 'dashboard'])->name('merchant.dashboard');
    Route::get('/merchant/products/create', [MerchantController::class, 'createProductForm'])->name('merchant.products.create');
    Route::post('/merchant/products/store', [MerchantController::class, 'storeProduct'])->name('merchant.products.store');
    Route::get('/merchant/subscription-plans', [MerchantController::class, 'showSubscriptionPlans'])->name('merchant.subscription_plans');

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('/marketplace', [MarketplaceController::class, 'index'])->name('marketplace.index');
    Route::get('/marketplace/create', [MarketplaceController::class, 'create'])->name('marketplace.create');
    Route::post('/marketplace', [MarketplaceController::class, 'store'])->name('marketplace.store');
    Route::get('/marketplace/{id}', [MarketplaceController::class, 'show'])->name('marketplace.show');
    Route::get('/marketplace/{id}/edit', [MarketplaceController::class, 'edit'])->name('marketplace.edit');
    Route::put('/marketplace/{id}', [MarketplaceController::class, 'update'])->name('marketplace.update');
    Route::delete('/marketplace/{id}', [MarketplaceController::class, 'destroy'])->name('marketplace.destroy');

    // Category and Course Creation Handling
    Route::post('/create_category', [CourseController::class, 'createCategory'])->name('create_category');
    Route::post('/create_course', [CourseController::class, 'createCourse'])->name('create_course');
});

// Authentication Routes (e.g., login, registration, etc.)
require __DIR__ . '/auth.php';
