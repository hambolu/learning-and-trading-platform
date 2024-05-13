<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;






Route::get('/link-storage', function () {
    // Execute the storage:link Artisan command
    Artisan::call('storage:link');

    return 'Storage symlink created successfully!';
});


// Public Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/google', [RegisteredUserController::class, 'googleLogin'])->name('login.google');
Route::get('/login/google/callback', [RegisteredUserController::class, 'socialLogin']);
Route::get('/optimize-clear', function () {
    $exitCode = Artisan::call('optimize:clear');
    return $exitCode === 0 ? 'Optimization cache cleared successfully.' : 'An error occurred while clearing optimization cache.';
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/affiliate_dashboard', [DashboardController::class, 'affiliate_dashboard'])->name('affiliate_dashboard');
    Route::get('/sma_dashboard', [DashboardController::class, 'sma_dashboard'])->name('sma_dashboard');
    Route::get('/elearning_dashboard', [DashboardController::class, 'elearning_dashboard'])->name('elearning_dashboard');
    Route::get('/seller_dashboard', [DashboardController::class, 'seller_dashboard'])->name('seller_dashboard');

    Route::get('/courses/search', [CourseController::class, 'search'])->name('courses.search');
    Route::put('/system-settings', 'SystemSettingController@update')->name('system-settings.update');
    Route::get('/course_detail_view/{id}', [CourseController::class, 'showCourse']);
    Route::get('/category_detail_view/{id}', [CourseController::class, 'showCoursesByCategory']);

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Transactions
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
    Route::get('/transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');
    Route::post('/transactions/{id}/refund', [TransactionController::class, 'refund'])->name('transactions.refund');
    Route::post('/transactions/{id}/cancel', [TransactionController::class, 'cancel'])->name('transactions.cancel');
    Route::get('/user/transactions', [TransactionController::class, 'userTransactions'])->name('user.transactions');

    // User Management
    Route::get('/elearning-users', [DashboardController::class, 'elearningUsers'])->name('elearning-users.index');
    Route::get('/sma-users', [DashboardController::class, 'smaUsers'])->name('sma-users.index');
    Route::get('/affiliate-users', [DashboardController::class, 'affiliateUsers'])->name('affiliate-users.index');
    Route::get('/sellers', [DashboardController::class, 'sellerUsers'])->name('sellers.index');

    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::put('/users/{id}/suspend', [UserController::class, 'suspend'])->name('users.suspend');

    Route::get('/categories', [DashboardController::class, 'categories'])->name('categories');
    Route::get('/courses', [DashboardController::class, 'courses'])->name('courses');

    Route::get('/send-message', [MessageController::class, 'showMessageForm'])->name('show-message-form');
    Route::post('/send-message', [MessageController::class, 'sendMessage']);

    Route::post('/create_product', [MerchantController::class, 'storeProduct'])->name('create_product');
    
    // Course Creation Routes
    Route::get('/create-course', function () {
        return view('create-course');
    });
    Route::get('/system_settings', function () {
        return view('system_settings');
    });
    Route::get('/membership', function () {
        return view('membership');
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
