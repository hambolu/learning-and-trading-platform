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
    <!-- Header End -->
    <!-- Left Sidebar Start -->
    @include('partial.sidebar')
    <!-- Left Sidebar End -->
    <!-- Body Start -->
    <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid">
                @include('partial.create-category')
                @include('partial.payout')
                <div class="row">
                    <div class="col-xl-9 col-lg-8">

                        <div class="section3125">
                            <h4 class="item_title">Categories</h4>
                            <a href="/categories" class="see150">See all</a>
                            <div class="la5lo1">
                                <div class="row">
                                    @foreach ($category->take(4) as $item)
                                        <div class="col">


                                            <div class="stream_1">
                                                <a href="#" class="stream_bg">
                                                    @if ($item->image)
                                                        <img src="{{ asset('storage/' . $item->image) }}"
                                                            alt="{{ $item->name }}">
                                                    @else
                                                        <img src="{{ asset('images/default.webp') }}"
                                                            alt="{{ $item->name }}">
                                                    @endif
                                                    <h4>{{ $item->name }}</h4>
                                                </a>

                                            </div>

                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="section3125 mt-50">
                            <h4 class="item_title">Featured Courses</h4>
                            <a href="#" class="see150">See all</a>
                            @include('partial.share')
                            <div class="la5lo1">
                                <div class="row">
                                    @foreach ($courses as $item)
                                        <div class="col">
                                            <div class="fcrse_1 mb-20">
                                                <a href="" class="fcrse_img">
                                                    <img src="{{ $item->thumbnail ?? 'images/courses/img-1.jpg' }}"
                                                        alt="">
                                                    <div class="course-overlay">
                                                        <div class="badge_seller">Bestseller</div>
                                                        <div class="crse_reviews">
                                                            <i class='uil uil-star'></i>4.5
                                                        </div>
                                                        <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                        <div class="crse_timer">
                                                            25 hours
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="fcrse_content">
                                                    <div class="eps_dots more_dropdown">
                                                       
                                                        
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#share_post_modal"><i class='uil uil-ellipsis-v'></i>
                                                
                                                                <div class="dropdown-content">
                                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                
                                                                </div>
                                                            </a>
                                                            
                                                        
                                                    </div>
                                                    <div class="vdtodt">
                                                        <span class="vdt14">109k views</span>
                                                        <span class="vdt14">15 days ago</span>
                                                    </div>
                                                    <a href="course_detail_view.html"
                                                        class="crse14s">{{ $item->short_description }}</a>
                                                    <a href="#" class="crse-cate">{{ $item->title }}</a>
                                                    <div class="auth1lnkprce">
                                                        <p class="cr1fot">By <a href="#">John Doe</a></p>
                                                        <div class="prce142">
                                                            @if ($item->price == 0)
                                                                Free
                                                            @elseif ($item->discount_price > 0)
                                                                NGN {{ number_format($item->discount_price) }}
                                                            @elseif ($item->discount_price == 0)
                                                                NGN {{ number_format($item->price) }}
                                                            @endif
                                                        </div>
                                                        <button class="shrt-cart-btn" title="cart"><i
                                                                class="uil uil-shopping-cart-alt"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="right_side">
                            <div class="fcrse_2 mb-30">
                                <div class="tutor_img">
                                    <a href="#"><img src="{{ asset('images/left-imgs/img-10.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="tutor_content_dt">
                                    <div class="tutor150">
                                        <a href="#" class="tutor_name">{{ Auth::user()->name }}</a>
                                        <div class="mef78" title="Verify">
                                            <i class="uil uil-check-circle"></i>
                                        </div>
                                    </div>

                                    <ul class="tutor_social_links">
                                        <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                    </ul>

                                    <a href="/profile" class="prfle12link">Go To Profile</a>
                                    <p>Wallet Balance: {{ Auth::user()->wallet->balance ?? 0.0 }}
                                    </p>
                                    <div class="d-flex">
                                        <button class="btn btn-primary" style="font-size: 12px;" title="Add Fund"
                                            data-bs-toggle="modal" data-bs-target="#add_fund">Add Funds</button>
                                        <button class="btn btn-primary" style="font-size: 12px;" title="Pay Out"
                                            data-bs-toggle="modal" data-bs-target="#payout">Pay Out</button>
                                    </div>
                                </div>
                            </div>

                            <div class="fcrse_3">
                                <div class="cater_ttle">
                                    <h4>Top Categories</h4>
                                </div>
                                <ul class="allcate15">
                                    @foreach (\App\Models\CourseCategory::all() as $item)
                                        <li><a href="#" class="ct_item"><i
                                                    class='uil uil-dot'></i>{{ $item->name }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
                @include('partial.fund-wallet')
            </div>
        </div>
        @include('partial.footer')
    </div>
    <!-- Body End -->
@endsection
