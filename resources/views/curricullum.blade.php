@extends('layouts.app')
@section('content')
    <!-- Header Start -->
    <header class="header clearfix">
        <button type="button" id="toggleMenu" class="toggle_menu">
            <i class='uil uil-bars'></i>
        </button>
        <button id="collapse_menu" class="collapse_menu">
            <i class="uil uil-bars collapse_menu--icon "></i>
            <span class="collapse_menu--label"></span>
        </button>
        <div class="main_logo" id="logo">
            <a href="index.html"><img src="images/logo.svg" alt=""></a>
            <a href="index.html"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a>
        </div>
        <div class="search120">
            <div class="ui search">
                <div class="ui left icon input swdh10">
                    <input class="prompt srch10" type="text"
                        placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                    <i class='uil uil-search-alt icon icon1'></i>
                </div>
            </div>
        </div>
        <div class="header_right">
            <ul>


                @include('partial.course-category-button')

                <li>
                    <a href="shopping_cart.html" class="option_links" title="cart"><i
                            class='uil uil-shopping-cart-alt'></i><span
                            class="noti_count">{{ \App\Models\Cart::where('user_id', Auth::id())->count() ?? 0 }}</span></a>
                </li>
                <li>
                    <a href="#" class="option_links " data-bs-toggle="dropdown" data-bs-auto-close="true"
                        aria-expanded="false"><i class='uil uil-envelope-alt'></i><span class="noti_count">3</span></a>

                </li>

                <li>
                    <a href="#" class="option_links" data-bs-toggle="dropdown" data-bs-auto-close="true"
                        aria-expanded="false"><i class='uil uil-bell'></i><span class="noti_count">3</span></a>

                </li>
                @include('partial.profile_dropdown')
            </ul>
        </div>
    </header>
    @include('partial.sidebar')
    <div class="wrapper">
        <div class="sa4d25">
            <div class="container">		
                <div class="section">
                    <form id="lectureForm" method="POST" action="/submit-lecture">
                        @csrf
                        <div class="card">
                            <h5 class="card-body" id="lectureModalLabel">Add Lecture</h5>
                        </div>
                        <div class="container">
                            <div class="new-section-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="new-section mt-30">
                                            <div class="form-group">
                                                <label for="lectureTitle" class="label25">Lecture Title*</label>
                                                <input type="text" class="form-control" id="lectureTitle" name="lectureTitle" placeholder="Title here" required>
                                            </div>
                                            <div class="form-group mt-30">
                                                <label for="lectureDescription" class="label25">Description*</label>
                                                <textarea class="form-control" id="lectureDescription" name="lectureDescription" rows="4" placeholder="Description here" required></textarea>
                                            </div>
                                            <div class="form-check mt-30">
                                                <input type="checkbox" class="form-check-input" id="previewCheckbox" name="previewCheckbox">
                                                <label class="form-check-label" for="previewCheckbox">Free Preview</label>
                                            </div>
                                        </div>
                                        <div class="lecture-video-dt mt-30">
                                            <div class="form-group">
                                                <label for="videoType" class="label25">Select Video Type*</label>
                                                <select class="form-control" id="videoType" name="videoType" required>
                                                    <option value="mp4">HTML5 (mp4)</option>
                                                    <option value="url">External URL</option>
                                                    <option value="youtube">YouTube</option>
                                                    <option value="vimeo">Vimeo</option>
                                                    <option value="embedded">Embedded</option>
                                                </select>
                                            </div>
                                            <div class="video-details" id="videoDetails">
                                                <div class="form-group mt-30">
                                                    <label for="videoFile" class="label25">Upload Video (mp4)*</label>
                                                    <input type="file" class="form-control-file" id="videoFile" name="videoFile" required>
                                                </div>
                                                <div class="form-group mt-30">
                                                    <label for="videoPoster" class="label25">Upload Video Poster*</label>
                                                    <input type="file" class="form-control-file" id="videoPoster" name="videoPoster" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-30">
                                            <label for="attachments" class="label25">Upload Attachments</label>
                                            <input type="file" class="form-control-file" id="attachments" name="attachments[]" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-footer mt-30">
                            <button type="button" class="btn btn-secondary" onclick="resetForm()">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Lecture</button>
                        </div>
                    </form>
                </div>
                
                <script>
                    $(document).ready(function() {
                        $('#videoType').on('change', function() {
                            var selectedType = $(this).val();
                            var videoDetailsHtml = '';
                
                            // Customize additional fields based on selected video type
                            if (selectedType === 'mp4') {
                                videoDetailsHtml = '<div class="form-group mt-30">' +
                                    '<label for="videoFile" class="label25">Upload Video (mp4)*</label>' +
                                    '<input type="file" class="form-control-file" id="videoFile" name="videoFile" required>' +
                                    '</div>' +
                                    '<div class="form-group mt-30">' +
                                    '<label for="videoPoster" class="label25">Upload Video Poster*</label>' +
                                    '<input type="file" class="form-control-file" id="videoPoster" name="videoPoster" required>' +
                                    '</div>';
                            } else if (selectedType === 'url') {
                                videoDetailsHtml = '<div class="form-group mt-30">' +
                                    '<label for="externalUrl" class="label25">External Video URL*</label>' +
                                    '<input type="text" class="form-control" id="externalUrl" name="externalUrl" required>' +
                                    '</div>';
                            }
                            
                            $('#videoDetails').html(videoDetailsHtml);
                        });
                    });
                
                    function resetForm() {
                        document.getElementById('lectureForm').reset();
                        $('#videoDetails').empty();
                    }
                </script>
                
                
            </div>
        </div>
    </div>
<!-- Add Assignment End -->

@endsection