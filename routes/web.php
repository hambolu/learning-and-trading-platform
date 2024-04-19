<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
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

    // Category and Course Creation Handling
    Route::post('/create_category', [CourseController::class, 'createCategory'])->name('create_category');
    Route::post('/create_course', [CourseController::class, 'createCourse'])->name('create_course');
});

// Authentication Routes (e.g., login, registration, etc.)
require __DIR__.'/auth.php';
