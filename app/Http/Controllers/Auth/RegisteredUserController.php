<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DashboardSelection;
use App\Models\User;
use App\Models\Wallet;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;

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
                'referral_code' => Str::random(8)
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

    public function socialLogin()
    {
        try {
            $user = Socialite::driver('google')->user();

            $check_email = User::where('email', $user->email)->first();
            // Check if user already exists in your database
            if (!$check_email) {
                # code...
                $existingUser = User::where('google_id', $user->id)->first();

                if ($existingUser) {
                    // Log in existing user
                    auth()->login($existingUser, true);
                } else {
                    // Create a new user (optional, adjust based on your needs)
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id' => $user->id,
                        // Add other user fields as needed
                    ]);
                    auth()->login($newUser, true);
                }

                toastr()->success('Registration successfully!');
                return redirect()->route('dashboard');
            } else {
                toastr()->error('Email exists');
                return redirect()->route('register');
            }
        } catch (Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->route('register');
        }
    }

    public function googleLogin()
    {
        try {
            //code...
            $googleDriver = Socialite::driver('google');
            if ($googleDriver) {
                return $googleDriver->redirect();
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
