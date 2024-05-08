@extends('layouts.app')
@section('content')
    <!-- Header Start -->
    <header class="header clearfix">
        <button type="button" id="toggleMenu" class="toggle_menu">
            <i class='uil uil-bars'></i>
        </button>
        <button id="collapse_menu" class="collapse_menu">
            <i class="uil uil-bars collapse_menu--icon "></i>
            <span class="collapse_menu--label"></span>
        </button>
        <div class="main_logo" id="logo">
            <a href="/"><img src="images/logo.svg" alt=""></a>
            <a href="/"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a>
        </div>
        <div class="search120">
            <div class="ui search">
                <div class="ui left icon input swdh10">
                    <input class="prompt srch10" type="text"
                        placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                    <i class='uil uil-search-alt icon icon1'></i>
                </div>
            </div>
        </div>
        <div class="header_right">
            <ul>


                @include('partial.course-category-button')

                <li>
                    <a href="" class="option_links" title="cart"><i
                            class='uil uil-shopping-cart-alt'></i><span
                            class="noti_count">{{ \App\Models\Cart::where('user_id', Auth::id())->count() ?? 0 }}</span></a>
                </li>
                <li>
                    <a href="#" class="option_links " data-bs-toggle="dropdown" data-bs-auto-close="true"
                        aria-expanded="false"><i class='uil uil-envelope-alt'></i><span class="noti_count">3</span></a>

                </li>

                <li>
                    <a href="#" class="option_links" data-bs-toggle="dropdown" data-bs-auto-close="true"
                        aria-expanded="false"><i class='uil uil-bell'></i><span class="noti_count">3</span></a>

                </li>
                @include('partial.profile_dropdown')
            </ul>
        </div>
    </header>
    @include('partial.sidebar')
    <div class="wrapper">
        <div class="sa4d25">
            <div class="container p-4">

                <div class="section3125 mt-50">
                    <h4 class="item_title">Messages</h4>

                    <div class="la5lo1">
                        <div class="row">
                            <form method="POST" action="">
                                @csrf
                        
                                <label for="recipient_ids">Select Recipients:</label><br>
                                <select class="form-control selectpicker" id="recipient_ids" name="recipient_ids[]" multiple>
                                    <option value="all">All Users</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select><br><br>
                        
                                <label for="content">Message Content:</label><br>
                                <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea><br><br>
                        
                                <button class="see150 upload_btn" type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
