@extends('layouts.app')
@section('content')
    <!-- Header Start -->
    @include('partial.header_container')
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
                    <div class="col">

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
                                        <div class="col-md-4">
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


                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#share_post_modal"><i
                                                                class='uil uil-ellipsis-v'></i>

                                                            <div class="dropdown-content">
                                                                <span><i class='uil uil-share-alt'></i>Share</span>

                                                            </div>
                                                        </a>


                                                    </div>
                                                    <div class="vdtodt">
                                                        <span class="vdt14">109k views</span>
                                                        <span class="vdt14">15 days ago</span>
                                                    </div>
                                                    <a href="/course_detail_view/{{ $item->id }}"
                                                        class="crse14s">
                                                        @php
                                                            
                                                            $words = str_word_count($item->short_description, 1);
                                                            $trimmed = implode(' ', array_slice($words, 0, 10));
                                                        @endphp
                                                    
                                                    {{ $trimmed }}
                                                    
                                                    </a>
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

                                                        <a href="/add_to_cart" class="shrt-cart-btn"> <i
                                                                class="uil uil-shopping-cart-alt" style="font-size: 15px;">Add to Cart</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
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
