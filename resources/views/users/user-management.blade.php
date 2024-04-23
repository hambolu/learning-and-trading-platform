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
            <div class="container-fluid">
                <div class="container">
                    <h1>All Users</h1>

                    <div class="table-cerificate">
                        <div class="table-responsive">
                            <table class="table " id="content-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Wallet Balance</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Route::currentRouteName() == 'elearning-users.index')
                                        @foreach ($elearning_users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->user->name }}</td>
                                                <td>{{ $user->user->email }}</td>
                                                <td>NGN {{ number_format($user->user->wallet->balance) ?? 'N/A' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="" class="btn btn-primary btn-sm">View</a>
                                                    <a href="" class="btn btn-primary btn-sm">Suspend</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @elseif (Route::currentRouteName() == 'sma-users.index')
                                        @foreach ($sma_users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->user->name }}</td>
                                                <td>{{ $user->user->email }}</td>
                                                <td>NGN {{ number_format($user->user->wallet->balance) ?? 'N/A' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="" class="btn btn-primary btn-sm">View</a>
                                                    <a href="" class="btn btn-primary btn-sm">Suspend</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @elseif (Route::currentRouteName() == 'affiliate-users.index')
                                        @foreach ($affiliate_users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->user->name }}</td>
                                                <td>{{ $user->user->email }}</td>
                                                <td>NGN {{ number_format($user->user->wallet->balance) ?? 'N/A' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="" class="btn btn-primary btn-sm">View</a>
                                                    <a href="" class="btn btn-primary btn-sm">Suspend</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @elseif (Route::currentRouteName() == 'sellers.index')
                                        @foreach ($merchant_users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->user->name }}</td>
                                                <td>{{ $user->user->email }}</td>
                                                <td>NGN {{ number_format($user->user->wallet->balance) ?? 'N/A' }}</td>
                                                <td>
                                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="" class="btn btn-primary btn-sm">View</a>
                                                    <a href="" class="btn btn-primary btn-sm">Suspend</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
