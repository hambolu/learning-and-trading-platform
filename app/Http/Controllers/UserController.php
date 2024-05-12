<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::with(['courses','carts','wallet'])->find($id);

        // You can return the user data to a view or in JSON format
        return view('users.show', compact('user'));
        // or return response()->json($user);
    }

    public function suspend($id)
    {
        $user = User::findOrFail($id);

        // Perform the suspension action, for example, setting a 'suspended' flag
        $user->update(['suspended' => true]);

        return redirect()->back()->with('status', 'User suspended successfully.');
    }
}
