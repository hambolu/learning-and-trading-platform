@extends('layouts.app')
@section('content')
    <!-- Header Start -->
    @include('partial.header_container')
    @include('partial.sidebar')
    <div class="wrapper">
        <div class="sa4d25">
            <div class="container p-4">

                <div class="section3125 mt-50">
                    <h4 class="item_title">Messages</h4>

                    <div class="la5lo1">
                        <div class="row">
                            <div class="col-md-4">
                                <form method="POST" action="/send-message">
                                    @csrf
                            
                                    <label for="recipient_ids">Select Recipients:</label><br>
                                    <select class="form-control selectpicker" id="recipient_ids" name="recipient_ids[]" multiple>
                                        <option value="all">All Users</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select><br><br>
                            
                                    <label for="content">Message Content:</label><br>
                                    <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea><br><br>
                            
                                    <button class="see150 upload_btn" type="submit">Send Message</button>
                                </form>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
