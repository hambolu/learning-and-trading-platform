@extends('layouts.app')
@section('content')
    @include('partial.header_container')
    @include('partial.sidebar')
    <div class="wrapper">
        <div class="sa4d25">
            <div class="container p-4">

                <div class="section3125 mt-50">
                    <h4 class="item_title">Latest Posts</h4>
                    @if (Auth::user()->roles->contains('name', 'super_admin'))
                    <a href="/posts/create" class="see150 upload_btn">Create Post</a>
                    @endif
                    <div class="la5lo1">
                        <div class="row">
                            @foreach ($posts as $item)
                            @include('partial.share')
                                <div class="col-md-4">
                                    <div class="fcrse_1 mb-20">
                                        <a href="" class="fcrse_img">
                                            @if ($item->image)
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                                            @else
                                                <img src="{{ asset('images/default.webp') }}" alt="{{ $item->title }}">
                                            @endif

                                        </a>
                                        <div class="fcrse_content">
                                            
                                            <div class="eps_dots more_dropdown">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#share_post_modal" ><i class='uil uil-ellipsis-v'></i>
                                                
                                                    <div class="dropdown-content">
                                                        <span><i class='uil uil-share-alt'></i>Share</span>
    
                                                    </div>
                                                </a>
                                            </div>

                                            <a href="/posts/{{ $item->id }}" class="crse14s">{{ $item->title }}</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function openShareModal(slug) {
        // AJAX request to fetch share links
        $.ajax({
            url: '/share/' + slug,
            type: 'GET',
            success: function(data) {
                // Populate modal with share links
                $('#facebookShareLink').attr('href', data.facebook.share);
                $('#twitterShareLink').attr('href', data.twitter.share);
                $('#linkedinShareLink').attr('href', data.linkedin.share);
                $('#whatsappShareLink').attr('href', data.whatsapp.share);
                
                // Open modal
                $('#shareModal').modal('show');
            }
        });
    }
</script>

