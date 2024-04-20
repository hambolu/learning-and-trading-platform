@extends('layouts.guest')
@section('content')
<div class="sign_in_up_bg">
    <div class="container">
        <div class="row justify-content-lg-center justify-content-md-center">
            <div class="col-lg-12">
                <div class="main_logo25" id="logo">
                    <a href="index.html"><img src="images/logo.svg" alt=""></a>
                    <a href="index.html"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a>
                </div>
            </div>
        
            <div class="col-lg-6 col-md-8">
                <div class="sign_form">
                    <h2>Welcome to Cursus</h2>
                    <p>Sign Up and Start Learning!</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="ui search focus">
                            <div class="ui left icon input swdh11 swdh19">
                                <input class="prompt srch_explore" type="text" name="name" value="{{ old('name') }}" id="name" required maxlength="64" placeholder="Full Name">
                            </div>
                            @error('name')
                                <p class="text-danger text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh11 swdh19">
                                <input class="prompt srch_explore" type="email" name="email" value="{{ old('email') }}" id="email" required maxlength="64"  placeholder="Email Address">
                            </div>
                            @error('email')
                                <p class="text-danger text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh11 swdh19">
                                <input class="prompt srch_explore" type="password" name="password" id="password" required maxlength="64" minlength="8" placeholder="Password">
                            </div>
                            @error('password')
                                <p class="text-danger text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="ui form mt-30 checkbox_sign">
                            <div class="inline field">
                                <div class="ui checkbox mncheck">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                    <label>I’m in for emails with exciting discounts and personalized recommendations</label>
                                </div>
                            </div>
                        </div>
                        <button class="login-btn" type="submit">Create Account</button>
                    </form>
                    
                    <p class="sgntrm145">By signing up, you agree to our <a href="terms_of_use.html">Terms of Use</a> and <a href="terms_of_use.html">Privacy Policy</a>.</p>
                    <p class="mb-0 mt-30">Already have an account? <a href="/login">Log In</a></p>
                </div>
                <div class="sign_footer"><img src="images/sign_logo.png" alt="">© 2024 <strong>Cursus</strong>. All Rights Reserved.</div>
            </div>				
        </div>				
    </div>				
</div>
@endsection