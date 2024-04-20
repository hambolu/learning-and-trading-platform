<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\DashboardSelection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    //

    // public function redirect()
    // {
    //     $route = Route::current();
    //     $name = $route->getName();
    //     $user = Auth::user();

    //     $selection = DashboardSelection::where('user_id', $user->id)
    //         ->where(function ($query) use ($name) {
    //             $query->where('dashboard', $name)
    //                 ->orWhere('sma_dashboard', $name)
    //                 ->orWhere('affiliate_dashboard', $name);
    //         })
    //         ->first();

    //     if ($selection) {
    //         // Determine which dashboard to load based on the matched field
    //         if ($selection->dashboard === $name) {
    //             return view($selection->dashboard);
    //         } elseif ($selection->sma_dashboard === $name) {
    //             return view($selection->sma_dashboard);
    //         } elseif ($selection->affiliate_dashboard === $name) {
    //             return view($selection->affiliate_dashboard);
    //         }
    //     }

    //     return view('dashboard'); 

    // }

    public function index()
    {
        $category = CourseCategory::all();
        $courses = Course::all();
        //dd($category);
        return view('dashboard',compact('category','courses'));
    }

    public function sma_dashboard()
    {
        return view('sma_dashboard');
    }

    public function affiliate_dashboard()
    {
        return view('affiliate_dashboard');
    }

    public function userManagement()
    {
        $users = User::with('wallet')->paginate(10); // Eager load wallet relationship

        return view('user-managment', compact('users'));
    }
}
