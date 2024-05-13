@extends('layouts.app')
@section('content')
    @include('partial.header_container')
    @include('partial.sidebar')
    <!-- Body Start -->
    <div class="wrapper">
        <div class="container-fluid">
        <div class="sa4d25">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-apps"></i> {{ $user->name }} Profile</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Total Courses</h5>
                                <h2>{{ $user->courses->count() ?? 0 }}</h2>

                            </div>
                            <div class="card_dash_right">
                                <img src="images/dashboard/online-course.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Total Transaction</h5>
                                <h2>{{ $user->courses->count() ?? 0 }}</h2>

                            </div>
                            <div class="card_dash_right">
                                <img src="images/dashboard/online-course.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Total Referral</h5>
                                <h2>{{ $user->courses->count() ?? 0 }}</h2>

                            </div>
                            <div class="card_dash_right">
                                <img src="images/dashboard/online-course.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Post Share</h5>
                                <h2>{{ $user->courses->count() ?? 0 }}</h2>

                            </div>
                            <div class="card_dash_right">
                                <img src="images/dashboard/online-course.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Wallet Balance</h5>
                                <h2>{{ $user->courses->count() ?? 0 }}</h2>

                            </div>
                            <div class="card_dash_right">
                                <img src="images/dashboard/online-course.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Total Earning</h5>
                                <h2>{{ $user->courses->count() ?? 0 }}</h2>

                            </div>
                            <div class="card_dash_right">
                                <img src="images/dashboard/online-course.svg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row m-2">
                    <div class="card pt-4 pb-4">
                        <div class="col">
                            <ul>
                                <li class="p-2"><strong>Full Name:</strong>  {{ $user->name }}</li>
                                <li class="p-2"><strong>Email: </strong>{{ $user->email }}</li>
                                <li class="p-2"><strong>Referral code: </strong>{{ $user->referral_code }}</li>
                                <li class="p-2"><strong>Bank:</strong>{{ $user->bank }}</li>
                                <li class="p-2"><strong>Account Name: </strong>{{ $user->account_name }}</li>
                                <li class="p-2"><strong>Account Number: </strong>{{ $user->account_number }}</li>
                                <li class="p-2"><strong>facebook: </strong>{{ $user->facebooklink }}</li>
                                <li class="p-2"><strong>twitter: </strong>{{ $user->twitterlink }}</li>
                                <li class="p-2"><strong>linkedin: </strong>{{ $user->linkedinlink }}</li>
                                <li class="p-2"><strong>youtube: </strong>{{ $user->youtubelink }}</li>
                                <li class="p-2"><strong>Status: </strong>
                                    @if ($user->status == 1)
                                    <span class="badge bg-primary">
                                        Active
                                    </span>
                                @else
                                    <span class="badge bg-danger">
                                        Suspended
                                    </span>
                                @endif
                                </li>
                                

                            </ul>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Body End -->
@endsection
