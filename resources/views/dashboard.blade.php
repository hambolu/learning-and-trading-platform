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
                <div class="row m-4">
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Courses:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Shared Posts:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Total Referrals:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Messages:</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="row m-4">
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Current Balance:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Total Earnings:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Total Withdrawals:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Total Transaction:</p>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Auth::user()->roles->contains('name', 'super_admin'))
                    
                <div class="row m-4">
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Total Users:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Total SMA:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Total Affiniate:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-4">
                            <div class="card-body">
                                <p>Total Products/Services:</p>
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
