<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DashboardSelection;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], // Ensure unique email in 'users' table
            'password' => ['required', Rules\Password::defaults()],
        ]);
    
        try {
            // Attempt to create a new user
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => strtolower($validatedData['email']),
                'password' => Hash::make($validatedData['password']),
            ]);
    
            // Create a wallet for the user
            Wallet::create([
                'user_id' => $user->id,
                'balance' => 0,
            ]);
    
            // Trigger the Registered event
            event(new Registered($user));
    
            // Log in the newly registered user
            Auth::login($user);
    
            toastr()->success('Registration successfully!');
            return redirect()->route('dashboard');
    
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->route('register');
        }
    }
}
