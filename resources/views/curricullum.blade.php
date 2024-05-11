@extends('layouts.app')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <!-- Header Start -->
    @include('partial.header_container')
    @include('partial.sidebar')
    <div class="wrapper">
        <div class="sa4d25">
            <div class="container">		
                <div class="section">
                    <form id="lectureForm" method="POST" action="/submit-lecture">
                        @csrf
                       
                        
                        <div class="container">
                            <div class="new-section-block">
                                <h5 class="card-body" id="lectureModalLabel">Add Lecture</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="new-section mt-30">
                                            <div class="form-group">
                                                <label for="lectureTitle" class="label25">Lecture Title*</label>
                                                <input type="text" class="form-control" id="lectureTitle" name="lectureTitle" placeholder="Title here" required>
                                            </div>
                                            

                                            <div class="form-group mt-30">
                                                <label for="lectureDescription" class="label25">Description*</label>
                                                <textarea class="form-control" id="lectureDescription" name="lectureDescription" rows="10" placeholder="Description here" required></textarea>
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
                <script>
                    // Replace textarea with ClassicEditor
                    ClassicEditor
                        .create(document.querySelector('#lectureDescription'))
                        .then(editor => {
                            console.log('Editor was initialized', editor);
                        })
                        .catch(error => {
                            console.error('Error initializing ClassicEditor', error);
                        });
                </script>
                
                
            </div>
        </div>
    </div>
<!-- Add Assignment End -->

@endsection