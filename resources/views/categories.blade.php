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
                    
                    <div class="la5lo1 card shadow p-4">
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Number of Courses</th>
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $item)
                                            <tr>
                                                <td><a href="/category_detail_view/{{ $item->id }}">{{ $item->name }}</a></td>
                                                <td>{{ $item->courses->count() ?? 0 }}</td>
                                                <td>
                                                    <a href="/category_detail_view/{{ $item->id }}" class="btn btn-primary">view</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>