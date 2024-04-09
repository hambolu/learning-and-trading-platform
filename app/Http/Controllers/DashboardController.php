<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    //

    public function redirectBasedOnRole()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->hasRole('admin')) {
                return Redirect::route('admin.dashboard');
            } elseif ($user->hasRole('affiliate')) {
                return Redirect::route('affiliate.dashboard');
            } elseif ($user->hasRole('social_media_ambassador')) {
                return Redirect::route('sma.dashboard');
            } else {
                return Redirect::route('user.dashboard');
            }
        } else {
            return Redirect::route('login');
        }
    }
}
