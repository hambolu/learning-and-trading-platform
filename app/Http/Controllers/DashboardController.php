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
        $category = CourseCategory::all();
        $courses = Course::all();
        //dd($category);
        return view('dashboard',compact('category','courses'));
    }

    public function sma_dashboard()
    {
        $check = SMA::where('user_id',Auth::id())     
        ->first();
        if (!$check) {
           $add_user = new SMA();
           $add_user->user_id = Auth::id();
           $add_user->save();
        }
        $posts = Post::latest()->get();
        return view('sma_dashboard',compact('posts'));
    }

    public function affiliate_dashboard()
    {
        $check = AffiliateUser::where('user_id',Auth::id())     
        ->first();
        if (!$check) {
           $add_user = new AffiliateUser();
           $add_user->user_id = Auth::id();
           $add_user->save();
          return view('membership');
        }

        return view('affiliate_dashboard');
    }

    public function elearning_dashboard()
    {
        $check = Elearning::where('user_id',Auth::id())     
        ->first();
        if (!$check) {
           $add_user = new Elearning();
           $add_user->user_id = Auth::id();
           $add_user->save();
           return view('membership');
        }
        
        $category = CourseCategory::all();
        $courses = Course::all();
        return view('elearning_dashboard',compact('category','courses'));
    }

    public function seller_dashboard()
    {
        $check = Merchant::where('user_id',Auth::id())     
        ->first();
        if (!$check) {
           $add_user = new Merchant();
           $add_user->user_id = Auth::id();
           $add_user->save();
           return view('membership');
        }
        
        return view('seller_dashboard');
    }

    public function userManagement()
    {
        $affiliate_users = AffiliateUser::with(['users','users.wallet'])->paginate(10);
        $sma_users = SMA::with(['users','users.wallet'])->paginate(10);
        $elearning_users = Elearning::with(['users','users.wallet'])->paginate(10);
        $merchant_users = Merchant::with(['users','users.wallet'])->paginate(10);

        return view('users.user-managment', compact('users'));
    }
}
