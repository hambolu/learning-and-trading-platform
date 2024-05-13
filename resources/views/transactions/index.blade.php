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
                <div class="section3125">
                    <h4 class="item_title">Courses</h4>

                    <div class="la5lo1 card shadow p-4">

                        <div class="row">
                            <div class="col">
                                <h1>All Transactions</h1>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Source</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>{{ $transaction->id }}</td>
                                                <td>{{ $transaction->amount }}</td>
                                                <td>{{ $transaction->type }}</td>
                                                <td>{{ $transaction->source }}</td>
                                                <td>{{ $transaction->created_at->format('Y-m-d H:i:s') }}</td>
                                                <td><a href="{{ route('transactions.show', $transaction->id) }}">View</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $transactions->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection