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
            <a href="index.html"><img src="images/logo.svg" alt=""></a>
            <a href="index.html"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a>
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
                    <a href="shopping_cart.html" class="option_links" title="cart"><i
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
                    <h4 class="item_title">Latest Products</h4>

                    <div class="la5lo1">
                        <div class="row">
                            @foreach ($products as $item)
                            @include('partial.share')
                                <div class="col-md-4">
                                    <div class="fcrse_1 mb-20">
                                        <a href="" class="fcrse_img">
                                            @if ($item->image)
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                                            @else
                                                <img src="{{ asset('images/default.webp') }}" alt="{{ $item->title }}">
                                            @endif

                                        </a>
                                        <div class="fcrse_content">
                                            
                                            <div class="eps_dots more_dropdown">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#share_post_modal"><i class='uil uil-ellipsis-v'></i>
                                                
                                                    <div class="dropdown-content">
                                                        <span><i class='uil uil-share-alt'></i>Share</span>
    
                                                    </div>
                                                </a>
                                            </div>

                                            <a href="/marketplace/{{ $item->id }}" class="crse14s">{{ $item->name }}</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
