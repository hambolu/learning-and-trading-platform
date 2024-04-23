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
            <div class="container">

                <div class="section3125 mt-50">
                    <div class="la5lo1">
                        <div class="row">
                            <div class="col-md-8">

                                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group m-2">
                                        <label for="title p-2">Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group m-2">
                                        <label for="title p-2">Content</label>
                                        <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group m-2">
                                        <label for="title p-2">Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="form-group m-2">
                                        <button type="submit" class="btn btn-primary steps_btn">Create Post</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection