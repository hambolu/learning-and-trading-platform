﻿@extends('layouts.app')
@section('content')
    @include('partial.sidebar')

    <!-- Header Start -->
	@include('partial.header_container')
    <!-- Header End -->

    <!-- Body Start -->
    <div class="wrapper">
        <div class="sa4d25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-analysis"></i> Create New Course</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="course_tabs_1">
                            <form action="{{ route('create_course') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div id="add-course-tab" class="step-app">
                                    <ul class="step-steps">
                                        <li class="active">
                                            <a href="#tab_step1">
                                                <span class="number"></span>
                                                <span class="step-name">Basic</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#tab_step3">
                                                <span class="number"></span>
                                                <span class="step-name">Media</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab_step4">
                                                <span class="number"></span>
                                                <span class="step-name">Price</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab_step5">
                                                <span class="number"></span>
                                                <span class="step-name">Publish</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="step-content">
                                        <div class="step-tab-panel step-tab-info active" id="tab_step1">
                                            <div class="tab-from-content">
                                                <div class="title-icon">
                                                    <h3 class="title"><i class="uil uil-info-circle"></i>Basic Information
                                                    </h3>
                                                </div>
                                                <div class="course__form">
                                                    <div class="general_info10">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="ui search focus mt-30 lbel25">
                                                                    <label>Course Title*</label>
                                                                    <div class="ui left icon input swdh19">
                                                                        <input class="prompt srch_explore" type="text"
                                                                            placeholder="Course title here" name="title"
                                                                            data-purpose="edit-course-title" maxlength="60"
                                                                            id="main[title]" value="">
                                                                        <div class="badge_num">60</div>
                                                                    </div>
                                                                    <div class="help-block">(Please make this a maximum of
                                                                        100 characters and unique.)</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="ui search focus lbel25 mt-30">
                                                                    <label>Short Description*</label>
                                                                    <div class="ui form swdh30">
                                                                        <div class="field">
                                                                            <textarea rows="3" name="short_description" id="" placeholder="Item description here..."
                                                                                maxlength="220"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="help-block">220 words</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="course_des_textarea mt-30 lbel25">
                                                                    <label>Course Description*</label>
                                                                    <div class="text-editor">
                                                                        <textarea class="form_textarea_1 ht-4" name="course_description" placeholder="Item description here"
                                                                            style="display:none;"></textarea>
                                                                        <div id="editor1"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="ui search focus lbel25 mt-30">
                                                                    <label>What will students learn in your course?*</label>
                                                                    <div class="ui form swdh30">
                                                                        <div class="field">
                                                                            <textarea rows="3" name="skill" id="" placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="help-block">Student will gain this skills,
                                                                        knowledge after completing this course. (One per
                                                                        line).</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="ui search focus lbel25 mt-30">
                                                                    <label>Requirements*</label>
                                                                    <div class="ui form swdh30">
                                                                        <div class="field">
                                                                            <textarea rows="3" name="requirements" id="" placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="help-block">What knowledge, technology,
                                                                        tools required by users to start this course. (One
                                                                        per line).</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="mt-30 lbel25">
                                                                    <label>Course Level*</label>
                                                                </div>
                                                                <select name="course_level" class="selectpicker"
                                                                    data-selected-text-format="count > 3">
                                                                    <option value="1">Beginner</option>
                                                                    <option value="2">Intermediate</option>
                                                                    <option value="3">Expert</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="mt-30 lbel25">
                                                                    <label>Audio Language*</label>
                                                                </div>
                                                                <select name="audio_language" class="selectpicker"
                                                                    title="Select Audio">
                                                                    @foreach (\App\Models\Language::all() as $language)
                                                                        <option value="{{ $language->name }}"
                                                                            {{ old('language') == $language->name ? 'selected' : '' }}>
                                                                            {{ ucfirst($language->name) }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="mt-30 lbel25">
                                                                    <label>Course Category*</label>
                                                                </div>
                                                                <select class="selectpicker" title="Select Category"
                                                                    name="category_id" id="category_id"
                                                                    data-live-search="true">
                                                                    @foreach (\App\Models\CourseCategory::all() as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="step-tab-panel step-tab-location" id="tab_step3">
                                            <div class="tab-from-content">
                                                <div class="title-icon">
                                                    <h3 class="title"><i class="uil uil-image"></i>Media</h3>
                                                </div>
                                                <div class="lecture-video-dt mb-30">
                                                    <span class="video-info">Intro Course overview provider type. (.mp4,
                                                        YouTube, Vimeo etc.)</span>
                                                    <div class="video-category">

                                                        <label><input type="radio" name="colorRadio"
                                                                value="url"><span>External URL</span></label>


                                                        <div class="url intro-box">
                                                            <div class="new-section">
                                                                <div class="ui search focus mt-30 lbel25">
                                                                    <label>Video URL*</label>
                                                                    <div class="ui left icon input swdh19">
                                                                        <input class="prompt srch_explore" type="text"
                                                                            placeholder="External Video URL"
                                                                            name="video_url">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="thumbnail-into">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-6">
                                                            <label class="label25 text-left">Course thumbnail*</label>
                                                            <div class="thumb-item">
                                                                <img src="images/thumbnail-demo.jpg" alt="">
                                                                <div class="thumb-dt">
                                                                    <div class="upload-btn">
                                                                        <input class="uploadBtn-main-input" type="file"
                                                                            name="thumbnail">
                                                                        <label for="ThumbFile__input--source"
                                                                            title="Zip">Choose Thumbnail</label>
                                                                    </div>
                                                                    <span class="uploadBtn-main-file">Size: 590x300 pixels.
                                                                        Supports: jpg,jpeg, or png</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="step-tab-panel step-tab-amenities" id="tab_step4">
                                            <div class="tab-from-content">
                                                <div class="title-icon">
                                                    <h3 class="title"><i class="uil uil-usd-square"></i>Price</h3>
                                                </div>
                                                <div class="course__form">
                                                    <div class="price-block">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="course-main-tabs">


                                                                    <div class="cogs-toggle">
                                                                        <label class="switch">
                                                                            <input type="checkbox" id="require_login"
                                                                                name="is_paid">
                                                                            <span></span>
                                                                        </label>
                                                                        <label for="require_login"
                                                                            class="lbl-quiz">Free</label>
                                                                    </div>

                                                                    <div class="license_pricing mt-30">
                                                                        <label class="label25">Regular Price*</label>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                                <div class="loc_group">
                                                                                    <div class="ui left icon input swdh19">
                                                                                        <input class="prompt srch_explore"
                                                                                            type="text"
                                                                                            placeholder="$0"
                                                                                            name="regular_price"
                                                                                            id="">
                                                                                    </div>
                                                                                    <span class="slry-dt">NGN</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="license_pricing mt-30 mb-30">
                                                                        <label class="label25">Discount Price*</label>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                                <div class="loc_group">
                                                                                    <div class="ui left icon input swdh19">
                                                                                        <input class="prompt srch_explore"
                                                                                            type="text"
                                                                                            placeholder="$0"
                                                                                            name="discount_price"
                                                                                            id="">
                                                                                    </div>
                                                                                    <span class="slry-dt">NGN</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="license_pricing mt-30 mb-30">
                                                                        <label class="label25">Affiliate
                                                                            Percentage*</label>
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                                <div class="loc_group">
                                                                                    <div class="ui left icon input swdh19">
                                                                                        <input class="prompt srch_explore"
                                                                                            type="text"
                                                                                            placeholder="$0"
                                                                                            name="discount_price"
                                                                                            id="">
                                                                                    </div>
                                                                                    <span class="slry-dt">%</span>
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
                                        </div>
                                        <div class="step-tab-panel step-tab-location" id="tab_step5">
                                            <div class="tab-from-content">
                                                <div class="title-icon">
                                                    <h3 class="title"><i class="uil uil-upload"></i>Submit</h3>
                                                </div>
                                            </div>
                                            <div class="publish-block">
                                                <i class="far fa-edit"></i>
                                                <p>Your course is in a draft state. Students cannot view, purchase or enroll
                                                    in this course. For students that are already enrolled, this course will
                                                    not appear on their student Dashboard.</p>
                                                <button type="submit" class="btn btn-default steps_btn">Submit for
                                                    Review</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-footer step-tab-pager">
                                        <button data-direction="prev" class="btn btn-default steps_btn">PREVIOUS</button>
                                        <button data-direction="next" class="btn btn-default steps_btn">Next</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partial.footer')
    </div>
    <!-- Body End -->
@endsection
