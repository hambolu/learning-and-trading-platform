<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AffiliateUser;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\DashboardSelection;
use App\Models\Elearning;
use App\Models\Merchant;
use App\Models\Post;
use App\Models\Product;
use App\Models\Role;
use App\Models\SMA;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    public function index()
    {
        //$user = User::find(Auth::id());
        // $role = Role::where('name', 'super_admin')->first();

        // // Attach the role to the user
        // $user->roles()->attach($role);

        $category = CourseCategory::all();
        $courses = Course::all();

        $user = User::with(['courses','carts','wallet'])->find(Auth::id());
        
        return view('dashboard', compact('category', 'courses', 'user'));
    }

    public function sma_dashboard()
    {
        $user = User::find(Auth::id());
        $check = SMA::where('user_id', Auth::id())
            ->first();
        if (!$check) {
            $add_user = new SMA();
            $add_user->user_id = Auth::id();
            $add_user->save();
        }
        $posts = Post::latest()->get();
        return view('sma_dashboard', compact('posts', 'user'));
    }

    public function affiliate_dashboard()
    {
        $user = User::find(Auth::id());
        $check = AffiliateUser::where('user_id', Auth::id())
            ->first();
        if (!$check) {
            $add_user = new AffiliateUser();
            $add_user->user_id = Auth::id();
            $add_user->save();
            return view('membership');
        }

        return view('affiliate_dashboard', compact('user'));
    }

    public function categories()
    {
        $user = User::find(Auth::id());
        $category = CourseCategory::all();
        return view('categories', compact('category', 'user'));
    }

    public function courses()
    {
        $user = User::find(Auth::id());
        $courses = Course::with('enrollments')->get();
        return view('courses', compact('courses', 'user'));
    }

    public function elearning_dashboard()
    {
        $user = User::find(Auth::id());
        $check = Elearning::where('user_id', Auth::id())
            ->first();
        if (!$check) {
            $add_user = new Elearning();
            $add_user->user_id = Auth::id();
            $add_user->save();
        }

        $category = CourseCategory::all();
        $courses = Course::all();
        return view('elearning_dashboard', compact('category', 'courses', 'user'));
    }

    public function seller_dashboard()
    {
        $user = User::find(Auth::id());
        $check = Merchant::where('user_id', Auth::id())
            ->first();
        if (!$check) {
            $add_user = new Merchant();
            $add_user->user_id = Auth::id();
            $add_user->save();
        }
        $products = Product::where('seller_id', $user->id)->get();
        return view('seller_dashboard', compact('user','products'));
    }

    public function elearningUsers()
    {
        $user = User::find(Auth::id());
        $elearning_users = Elearning::with(['user', 'user.wallet'])->paginate(10);
        return view('users.user-management', compact('elearning_users', 'user'));
    }

    public function smaUsers()
    {
        $user = User::find(Auth::id());
        $sma_users = SMA::with(['user', 'user.wallet'])->paginate(10);
        return view('users.user-management', compact('sma_users', 'user'));
    }

    public function affiliateUsers()
    {
        $user = User::find(Auth::id());
        $affiliate_users = AffiliateUser::with(['user', 'user.wallet'])->paginate(10);

        return view('users.user-management', compact('affiliate_users', 'user'));
    }

    public function sellerUsers()
    {
        $user = User::find(Auth::id());
        $merchant_users = Merchant::with(['user', 'user.wallet'])->paginate(10);
        return view('users.user-management', compact('merchant_users', 'user'));
    }

  
    
}
