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
                    <h4 class="item_title">Categories</h4>
                    
                    <div class="la5lo1">
                        <div class="row">
                            @foreach ($category as $item)
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
            </div>
        </div>
    </div>