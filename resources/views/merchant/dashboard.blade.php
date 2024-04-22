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
                <h1>Welcome, {{ $user->name }}!</h1>

                <!-- Display Merchant Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Merchant Information</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <!-- Add more merchant details as needed -->
                    </div>
                </div>

                <!-- List of Products -->
                <div class="card">
                    <div class="card-header">
                        <h5>Products</h5>
                    </div>
                    <div class="card-body">
                        @if ($user->products && $user->products->count() > 0)
                            <ul class="list-group">
                                @foreach ($user->products as $product)
                                    <li class="list-group-item">
                                        <strong>{{ $product->name }}</strong>
                                        <span class="float-right">${{ $product->price }}</span>
                                        <p>{{ $product->description }}</p>
                                        <!-- Add buttons or links for editing/deleting products -->
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No products found.</p>
                        @endif
                    </div>
                </div>

                <!-- Link to Create New Product -->
                <div class="mt-4">
                    <a href="{{ route('merchant.products.create') }}" class="btn btn-primary">Create New Product</a>
                </div>
            </div>
        </div>
        @include('partial.footer')
    </div>
    
@endsection
