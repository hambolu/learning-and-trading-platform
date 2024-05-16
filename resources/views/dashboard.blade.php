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

                @if (Auth::user()->roles->contains('name', 'super_admin'))
                    <div class="row m-4">
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p>Courses: {{ \App\Models\Course::count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p>Shared Posts: {{ \App\Models\PostShareCount::count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p> Referrals: {{ \App\Models\Referral::count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p>Messages: {{ \App\Models\Message::count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row m-4">
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p> Balance:NGN {{ \App\Models\Wallet::sum('balance') ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p> Earnings: {{ \App\Models\User::count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p> Withdrawals: {{ \App\Models\Transaction::where('type', 'withdraw')->count() ?? 0 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p> Transaction:{{ \App\Models\Transaction::count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-4">
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p>Total Users:{{ \App\Models\User::count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p>Total SMA:{{ \App\Models\SMA::count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p>Total Affiniate:{{ \App\Models\AffiliateUser::count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p>Total Merchants:{{ \App\Models\Merchant::count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row m-4">
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p>Courses:{{ $user->courses->count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p>Shared Posts:{{ $user->postShareCounts->count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p> Referrals:{{ $user->referrals->count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p>Messages:{{ $user->messages->count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row m-4">
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p> Balance: NGN {{ $user->wallet->balance ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p> Earnings: NGN {{ $user->wallet->balance ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p> Withdrawals: NGN {{ $user->wallet->balance ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-4">
                                <div class="card-body">
                                    <p> Transaction: NGN {{ $user->transactions->count() ?? 0 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @include('partial.fund-wallet')
            </div>
        </div>

    </div>
    <!-- Body End -->
@endsection
