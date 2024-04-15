<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DashboardSelection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    //

    public function redirect()
    {
        $user = Auth::user();
        $selection = DashboardSelection::where('user_id', $user->id)->first();

        if ($selection && $selection->dashboard) {
            return route($selection->dashboard);
        }

        return '/dashboard'; // Default dashboard route
    }

    public function dashboardSwitch()
    {
        
    }
}
