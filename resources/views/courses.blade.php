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

                    <div class="la5lo1 card shadow-sm border-0 p-4">
                        <h4 class="item_title">Courses</h4>

                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Course Name</th>
                                            <th scope="col">Course Type</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Enrolled Users</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $item)
                                            <tr>
                                                <td><a href="/course_detail_view/{{ $item->id }}">{{ $item->title }}</a></td>
                                                <td>
                                                    @if ($item->is_paid == 1)
                                                        <span class="badge bg-primary">
                                                            Paid
                                                        </span>
                                                    @else
                                                        <span class="badge bg-secondary">
                                                            Free
                                                        </span>
                                                    @endif
                                                </td>
                                                <td>
                                                    
                                                        {{ $item->category->name }}
                                                    
                                                </td>
                                                <td>{{ $item->enrollments->count() ?? 0 }}</td>
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
@endsection