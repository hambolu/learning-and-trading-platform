@extends('layouts.app')
@section('content')
    @include('partial.header_container')
    @include('partial.sidebar')
    <div class="wrapper">
        <div class="sa4d25">
            <div class="container p-4">

                <div class="section3125 mt-50">
                    

                    <div class="la5lo1">
                        <div class="contianer">
                            <h3>{{ $post->title }}</h3>
                            <div class="card">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-header">
                                            @if ($post->image)
                                            <img  src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                                        @else
                                            <img  src="{{ asset('images/default.webp') }}" alt="{{ $post->title }}">
                                        @endif
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="col">
                                            <p>{{ $post->content }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Facebook -->
                                        <h4 class="px-4">Share Now</h4>
                                        <div class="px-3 ">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') . '/' . $post->slug }}" class="share-icon" target="_blank">
                                                <img width="28" src="https://img.icons8.com/color/28/000000/facebook-new.png" alt="Facebook">
                                            </a>
                                       
                                            <a href="https://twitter.com/intent/tweet?text=Default+share+text&url={{ url('/') . '/' . $post->slug }}" class="share-icon" target="_blank">
                                                <img width="28" src="https://img.icons8.com/color/28/000000/twitter--v2.png" alt="Twitter">
                                            </a>
                                        
                                            <a href="https://www.linkedin.com/sharing/share-offsite?mini=true&url={{ url('/') . '/' . $post->slug }}" class="share-icon" target="_blank">
                                                <img width="28" src="https://img.icons8.com/color/28/000000/linkedin.png" alt="LinkedIn">
                                            </a>
                                       
                                            <a href="https://wa.me/?text={{ url('/') . '/' . $post->slug }}" class="share-icon" target="_blank">
                                                <img width="28" src="https://img.icons8.com/color/28/000000/whatsapp--v2.png" alt="WhatsApp">
                                            </a>

                                            <a href="#" class="share-icon" id="copyLink" onclick="copyToClipboard('{{ url('/') . '/' . $post->slug }}')">
                                                <img width="28" src="https://img.icons8.com/fluency/28/copy.png" alt="copy"/>
                                            </a>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
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

