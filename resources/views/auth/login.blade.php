<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" >
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <x-input-label for="email" :value="__('Username or Email')" class="text-dark" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-group">
            <x-input-label for="password" :value="__('Password')" class="text-dark" />

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="form-row d-flex justify-content-between mt-4 mb-2">

            <div class="form-group">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label text-dark">{{ __('Remember me') }}</label>
            </div>
    
            <div class="form-group">
                @if (Route::has('password.request'))
                    <a class="text-decoration-none justify-content-end float-right text-dark" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
    
            </div>
        </div>
        <div class=" text-center">

            <x-primary-button type="submit" class="btn btn-primary btn-block rounded-lg">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
