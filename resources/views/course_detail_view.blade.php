﻿@extends('layouts.app')
@section('content')
    <!-- Header Start -->
    @include('partial.header_container')
    <!-- Header End -->
    <!-- Left Sidebar Start -->
    @include('partial.sidebar')
    <!-- Left Sidebar End -->
    <!-- Body Start -->
    <div class="wrapper _bg4586">
        <div class="_215b01">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section3125">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-5 col-md-6">
                                    <div class="preview_video">
                                        <a href="#" class="fcrse_img" data-bs-toggle="modal"
                                            data-bs-target="#videoModal">
                                            <img src="{{ $course->thumbnail ?? asset('images/courses/img-1.jpg') }}"
                                                alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <span class="_215b02">Preview this course</span>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-6">
                                    <div class="_215b03">
                                        <h2>{{ $course->title }}</h2>
                                        <span class="_215b04">{{ $course->short_description }}</span>
                                    </div>
                                    {{-- <div class="_215b05">
                                        <div class="crse_reviews mr-2">
                                            <i class="uil uil-star"></i>5.3.2
                                        </div>
                                        (81,665 ratings)
                                    </div> --}}
                                    <div class="_215b05">
                                        {{ $course->enrollments->count() ?? 0 }} students enrolled
                                    </div>
                                    <div class="_215b06">
                                        <div class="_215b07">
                                            Language: English
                                        </div>
                                    </div>
                                    <div class="_215b05">
                                        Last updated {{ $course->updated_at->format('M d, Y') }} 
                                    </div>
                                    <div class="live_user_dt pt-2 mt-2">
                                        <div class="user_img5 text-center">
                                            <a href="#"><img src="{{ asset('images/left-imgs/img-1.jpg') }}"
                                                    alt=""></a>
                                            <div class="user_cntnt">
                                                <a href="#" class="_df7852 text-white">Johnson Smith</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="_215b31">
                                        
                                        <li><button class="btn_buy">Buy Now</button></li>
                                    </ul>
                                    <div class="_215fgt1">
                                        30-Day Money-Back Guarantee
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_215b15 _byt1458">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user_dt5">
                            <div class="user_dt_left">

                            </div>

                        </div>
                        <div class="course_tabs">
                            <nav>
                                <div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-about-tab" data-bs-toggle="tab"
                                        href="#nav-about" role="tab" aria-selected="true">About</a>
                                    <a class="nav-item nav-link" id="nav-courses-tab" data-bs-toggle="tab"
                                        href="#nav-courses" role="tab" aria-selected="false">Courses Content</a>
                                    <a class="nav-item nav-link" id="nav-reviews-tab" data-bs-toggle="tab"
                                        href="#nav-reviews" role="tab" aria-selected="false">Reviews</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_215b17">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="course_tab_content">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                                    <div class="_htg451">
                                        <div class="_htg452">
                                            <h3>Requirements</h3>
                                            <p>
												{!! nl2br(strip_tags($course->requirements, '<br>')) !!}

											</p>
                                        </div>
                                        <div class="_htg452 mt-35">
                                            <h3>Description</h3>
                                            <p>
												{!! nl2br(strip_tags($course->course_description, '<br>')) !!}

											</p>
                                        </div>
                                        <div class="_htg452 mt-35">
                                            <h3>Who this course is for :</h3>
                                            <ul class="_abc124">
                                                <li><span class="_5f7g11">This course is for anyone who wants to learn
                                                        about web development, regardless of previous experience</span></li>
                                                <li><span class="_5f7g11">It's perfect for complete beginners with zero
                                                        experience</span></li>
                                                <li><span class="_5f7g11">It's also great for anyone who does have some
                                                        experience in a few of the technologies(like HTML and CSS) but not
                                                        all</span></li>
                                                <li><span class="_5f7g11">If you want to take ONE COURSE to learn
                                                        everything you need to know about web development, take this
                                                        course</span></li>
                                            </ul>
                                        </div>
                                        <div class="_htgdrt mt-35">
                                            <h3>What you'll learn</h3>
                                            <div class="_scd123">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <ul class="_htg452 _abcd145">
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Lorem ipsum
                                                                        dolor sit amet, consectetur adipiscing elit.</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Donec
                                                                        ultricies elit porttitor, ultrices enim a, commodo
                                                                        dolor.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Nunc dapibus
                                                                        ligula sed justo porta, id volutpat odio
                                                                        iaculis.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Maecenas
                                                                        pharetra mi quis nisl mollis, molestie imperdiet
                                                                        lorem molestie.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Maecenas
                                                                        ultricies felis in pulvinar blandit.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Praesent ac
                                                                        libero consequat, efficitur tortor et, interdum
                                                                        sem.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Nullam non
                                                                        lacus nibh. Etiam et fringilla neque, ut vulputate
                                                                        sapien. Sed vitae tortor gravida, interdum felis at,
                                                                        pulvinar enim. Integer tempor urna leo.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Phasellus
                                                                        ultrices tellus sed volutpat vestibulum. Curabitur
                                                                        aliquet dictum leo non congue.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>In hac
                                                                        habitasse platea dictumst. Aenean vel fermentum
                                                                        neque.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Suspendisse
                                                                        semper feugiat urna dictum interdum.</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <ul class="_htg452 _abcd145">
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Nullam non
                                                                        lacus nibh. Etiam et fringilla neque, ut vulputate
                                                                        sapien. Sed vitae tortor gravida, interdum felis at,
                                                                        pulvinar enim. Integer tempor urna leo.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Phasellus
                                                                        ultrices tellus sed volutpat vestibulum. Curabitur
                                                                        aliquet dictum leo non congue.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>In hac
                                                                        habitasse platea dictumst. Aenean vel fermentum
                                                                        neque.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Suspendisse
                                                                        semper feugiat urna dictum interdum.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Lorem ipsum
                                                                        dolor sit amet, consectetur adipiscing elit.</span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Donec
                                                                        ultricies elit porttitor, ultrices enim a, commodo
                                                                        dolor.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Nunc dapibus
                                                                        ligula sed justo porta, id volutpat odio
                                                                        iaculis.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Maecenas
                                                                        pharetra mi quis nisl mollis, molestie imperdiet
                                                                        lorem molestie.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Maecenas
                                                                        ultricies felis in pulvinar blandit.</span></div>
                                                            </li>
                                                            <li>
                                                                <div class="_5f7g15"><i
                                                                        class="fas fa-check-circle"></i><span>Praesent ac
                                                                        libero consequat, efficitur tortor et, interdum
                                                                        sem.</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-courses" role="tabpanel">
                                    <div class="crse_content">
                                        <h3>Course content</h3>
                                        <div class="_112456">
                                            <ul class="accordion-expand-holder">
                                                <li><span class="accordion-expand-all _d1452">Expand all</span></li>
                                                <li><span class="_fgr123"> 402 lectures</span></li>
                                                <li><span class="_fgr123">47:06:29</span></li>
                                            </ul>
                                        </div>
                                        <div id="accordion" class="ui-accordion ui-widget ui-helper-reset">
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to this Course</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">8 lectures</span>
                                                    <span class="section-header-length">22:08</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">A Note On Asking For Help</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introducing Our TA</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Join the Online Community</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:51</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Why This Course?</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">07:48</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file-download-alt icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Syllabus Download</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">2 pages</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Syllabus Walkthrough</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">01:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Lecture Slides</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:11</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to Front End
                                                            Development</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">6 lectures</span>
                                                    <span class="section-header-length">27:26</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">01.40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Setting Up Front-End Developer
                                                                Environment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:30</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Setting Up Front-End Developer Environment
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:11</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Introduction to the Web</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:11</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to the Web</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10.08</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Front End Holy Trinity</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">11:46</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to HTML</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">13 lectures</span>
                                                    <span class="section-header-length">58:55</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01.38</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Basicsng Up Front-End Developer
                                                                Environment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:53</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Introduction to MDN</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to MDN</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:51</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Boilerplate and Comments</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Basic Tags</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Lists</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:32</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Lists Assignment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Lists Assignment: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:59</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Divs and Spans</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Attributes</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:00</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Recreate Webpage Assignment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:00</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Recreate Webpage Assignment: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:56</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Intermediate HTML</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">13 lectures</span>
                                                    <span class="section-header-length">01.12:29</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01.19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Tables</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:03</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Tables Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:18</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to Forms</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Playing with Inputs</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:04</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Form Tag</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:36</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Labels</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:32</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Form Validations</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Dropdowns and Radio Buttons</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Form Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:23</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to CSS</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">15 lectures</span>
                                                    <span class="section-header-length">01.40:15</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02.28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Basics</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:25</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Our First Stylesheet</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:18</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about CSS Colors and Background and
                                                                Border (next 2 lectures)</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Colors</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:35</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Background and Border</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:58</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Selectors Basics Todo List</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:32</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Selectors Basics Todo List</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to Chrome Inspector</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">More Advanced Selectors</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Specificity and the Cascade
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Specificity and the Cascade</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:38</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Selectors Practice Exercise
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Selectors Practice Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Selectors Practice Exercise: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">16:48</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Intermediate CSS</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">16 lectures</span>
                                                    <span class="section-header-length">01.26:40</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01.40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Text and Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">More Text and Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Google Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Using Google Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:35</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to the Box Model</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:58</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Tic Tac Toe Board</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:41</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Tic Tac Toe Board: SOLUTION
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Image Gallery Code Along Pt. 1
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Image Gallery Code Along Pt. 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about changes to Google Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Image Gallery Code Along Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:46</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise Intro</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <a href="#" class="preview-text">Preview</a>
                                                        <span class="content-summary">03:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise SOLUTION Pt.
                                                                1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:38</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise SOLUTION Pt.
                                                                2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise SOLUTION Pt.
                                                                3</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:28</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Bootstrap</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">16 lectures</span>
                                                    <span class="section-header-length">01.59:54</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02.28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Bootstrap versions</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:44</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">What is Bootstrap?</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:02</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Adding Bootstrap to a Project</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:15</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Forms and Inputs</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:00</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Nav Bars</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">15:44</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about The Grid System</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:11</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Grid System</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Grid System Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Bootstrap Image Gallery Pt. 1
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap Image Gallery Pt. 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Font Awesome</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:16</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap Image Gallery Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:46</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Startup Landing Page Code Along
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Startup Landing Page Code Along
                                                                Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:30</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about making bootstrap responsive on
                                                                mobile devices</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:14</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Bootstrap 4!</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">11 lectures</span>
                                                    <span class="section-header-length">01.16:28
                                                    </span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">A History of Bootstrap 4</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04.40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Bootstrap 4 Documentation</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02:24</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Changes from Bootstrap 3 to 4</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:52</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap 4 Code/Solutions Download</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:41</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Getting Started With Bootstrap 4</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:15</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap 4 Colors and Backgrounds</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:59</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Typography</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">New Fancy Spacing Utilities</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">12:28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Responsive Breakpoints</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap4 Navbars</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The New Display Utility</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:26</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap 4: Flexbox and Layout</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:14</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Flexbox Utilities Part 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Navs and Flexbox</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:56</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Bootstrap 4 Grid</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:56</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">PATTERN PROJECT Part 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">12:06</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">PATTERN PROJECT Part 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:30</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Grid + Flexbox</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:44</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Museum of Candy Project Part 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:36</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Museum of Candy Project Part 2
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to JavaScript</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="num-items-in-section">12 lectures</span>
                                                    <span class="section-header-length">56:21</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04.41</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The JavaScript Console</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Primitives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">13:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Primitives Exercises</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:21</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Variables</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:15</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Null and Undefined</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02:33</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Useful Built-In Methods</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Writing JavaScript in a Separate File
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">JS Stalker Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">JS Stalker Exercise: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:45</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Age Calculator Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:10</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Age Calculator Exercise: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:01</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="btn1458" href="#">20 More Sections</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-reviews" role="tabpanel">
                                    <div class="student_reviews">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <div class="reviews_left">
                                                    <h3>Student Feedback</h3>
                                                    <div class="total_rating">
                                                        <div class="_rate001">4.6</div>
                                                        <div class="rating-box">
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star half-star"></span>
                                                        </div>
                                                        <div class="_rate002">Course Rating</div>
                                                    </div>
                                                    <div class="_rate003">
                                                        <div class="_rate004">
                                                            <div class="progress progress1">
                                                                <div class="progress-bar w-70" role="progressbar"
                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                            </div>
                                                            <div class="_rate002">70%</div>
                                                        </div>
                                                        <div class="_rate004">
                                                            <div class="progress progress1">
                                                                <div class="progress-bar w-30" role="progressbar"
                                                                    aria-valuenow="30" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                            </div>
                                                            <div class="_rate002">40%</div>
                                                        </div>
                                                        <div class="_rate004">
                                                            <div class="progress progress1">
                                                                <div class="progress-bar w-5" role="progressbar"
                                                                    aria-valuenow="10" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                            </div>
                                                            <div class="_rate002">5%</div>
                                                        </div>
                                                        <div class="_rate004">
                                                            <div class="progress progress1">
                                                                <div class="progress-bar w-2" role="progressbar"
                                                                    aria-valuenow="2" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                            </div>
                                                            <div class="_rate002">1%</div>
                                                        </div>
                                                        <div class="_rate004">
                                                            <div class="progress progress1">
                                                                <div class="progress-bar w-1" role="progressbar"
                                                                    aria-valuenow="0" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                            <div class="rating-box">
                                                                <span class="rating-star full-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                                <span class="rating-star empty-star"></span>
                                                            </div>
                                                            <div class="_rate002">1%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="review_right">
                                                    <div class="review_right_heading">
                                                        <h3>Reviews</h3>
                                                        
                                                    </div>
                                                </div>
                                                <div class="review_all120">
                                                    <div class="review_item">
                                                        <div class="review_usr_dt">
                                                            <img src="images/left-imgs/img-1.jpg" alt="">
                                                            <div class="rv1458">
                                                                <h4 class="tutor_name1">John Doe</h4>
                                                                <span class="time_145">2 hour ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-box mt-20">
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star half-star"></span>
                                                        </div>
                                                        <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex
                                                            elementum. Interdum et malesuada fames ac ante ipsum primis in
                                                            faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
                                                        <div class="rpt100">
                                                            <span>Was this review helpful?</span>
                                                            <div class="radio--group-inline-container">
                                                                <div class="radio-item">
                                                                    <input id="radio-1" name="radio"
                                                                        type="radio">
                                                                    <label for="radio-1"
                                                                        class="radio-label">Yes</label>
                                                                </div>
                                                                <div class="radio-item">
                                                                    <input id="radio-2" name="radio"
                                                                        type="radio">
                                                                    <label for="radio-2" class="radio-label">No</label>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="report145">Report</a>
                                                        </div>
                                                    </div>
                                                    <div class="review_item">
                                                        <div class="review_usr_dt">
                                                            <img src="images/left-imgs/img-2.jpg" alt="">
                                                            <div class="rv1458">
                                                                <h4 class="tutor_name1">Jassica William</h4>
                                                                <span class="time_145">12 hour ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-box mt-20">
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star empty-star"></span>
                                                        </div>
                                                        <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex
                                                            elementum. Interdum et malesuada fames ac ante ipsum primis in
                                                            faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
                                                        <div class="rpt100">
                                                            <span>Was this review helpful?</span>
                                                            <div class="radio--group-inline-container">
                                                                <div class="radio-item">
                                                                    <input id="radio-3" name="radio1"
                                                                        type="radio">
                                                                    <label for="radio-3"
                                                                        class="radio-label">Yes</label>
                                                                </div>
                                                                <div class="radio-item">
                                                                    <input id="radio-4" name="radio1"
                                                                        type="radio">
                                                                    <label for="radio-4" class="radio-label">No</label>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="report145">Report</a>
                                                        </div>
                                                    </div>
                                                    <div class="review_item">
                                                        <div class="review_usr_dt">
                                                            <img src="images/left-imgs/img-3.jpg" alt="">
                                                            <div class="rv1458">
                                                                <h4 class="tutor_name1">Albert Dua</h4>
                                                                <span class="time_145">5 days ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-box mt-20">
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star half-star"></span>
                                                            <span class="rating-star empty-star"></span>
                                                        </div>
                                                        <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex
                                                            elementum. Interdum et malesuada fames ac ante ipsum primis in
                                                            faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
                                                        <div class="rpt100">
                                                            <span>Was this review helpful?</span>
                                                            <div class="radio--group-inline-container">
                                                                <div class="radio-item">
                                                                    <input id="radio-5" name="radio2"
                                                                        type="radio">
                                                                    <label for="radio-5"
                                                                        class="radio-label">Yes</label>
                                                                </div>
                                                                <div class="radio-item">
                                                                    <input id="radio-6" name="radio2"
                                                                        type="radio">
                                                                    <label for="radio-6" class="radio-label">No</label>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="report145">Report</a>
                                                        </div>
                                                    </div>
                                                    <div class="review_item">
                                                        <div class="review_usr_dt">
                                                            <img src="images/left-imgs/img-4.jpg" alt="">
                                                            <div class="rv1458">
                                                                <h4 class="tutor_name1">Zoena Singh</h4>
                                                                <span class="time_145">15 days ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-box mt-20">
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                        </div>
                                                        <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex
                                                            elementum. Interdum et malesuada fames ac ante ipsum primis in
                                                            faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
                                                        <div class="rpt100">
                                                            <span>Was this review helpful?</span>
                                                            <div class="radio--group-inline-container">
                                                                <div class="radio-item">
                                                                    <input id="radio-7" name="radio3"
                                                                        type="radio">
                                                                    <label for="radio-7"
                                                                        class="radio-label">Yes</label>
                                                                </div>
                                                                <div class="radio-item">
                                                                    <input id="radio-8" name="radio3"
                                                                        type="radio">
                                                                    <label for="radio-8" class="radio-label">No</label>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="report145">Report</a>
                                                        </div>
                                                    </div>
                                                    <div class="review_item">
                                                        <div class="review_usr_dt">
                                                            <img src="images/left-imgs/img-5.jpg" alt="">
                                                            <div class="rv1458">
                                                                <h4 class="tutor_name1">Joy Dua</h4>
                                                                <span class="time_145">20 days ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-box mt-20">
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star full-star"></span>
                                                            <span class="rating-star empty-star"></span>
                                                            <span class="rating-star empty-star"></span>
                                                        </div>
                                                        <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex
                                                            elementum. Interdum et malesuada fames ac ante ipsum primis in
                                                            faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
                                                        <div class="rpt100">
                                                            <span>Was this review helpful?</span>
                                                            <div class="radio--group-inline-container">
                                                                <div class="radio-item">
                                                                    <input id="radio-9" name="radio4"
                                                                        type="radio">
                                                                    <label for="radio-9"
                                                                        class="radio-label">Yes</label>
                                                                </div>
                                                                <div class="radio-item">
                                                                    <input id="radio-10" name="radio4"
                                                                        type="radio">
                                                                    <label for="radio-10" class="radio-label">No</label>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="report145">Report</a>
                                                        </div>
                                                    </div>
                                                    <div class="review_item">
                                                        <a href="#" class="more_reviews">See More Reviews</a>
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
        </div>
        <footer class="footer mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f1">
                            <a href="about_us.html">About</a>
                            <a href="our_blog.html">Blog</a>
                            <a href="career.html">Careers</a>
                            <a href="press.html">Press</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f1">
                            <a href="help.html">Help</a>
                            <a href="coming_soon.html">Advertise</a>
                            <a href="coming_soon.html">Developers</a>
                            <a href="contact_us.html">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f1">
                            <a href="terms_of_use.html">Copyright Policy</a>
                            <a href="terms_of_use.html">Terms</a>
                            <a href="terms_of_use.html">Privacy Policy</a>
                            <a href="sitemap.html">Sitemap</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f3">
                            <a href="#" class="btn1542">Teach on Cursus</a>
                            <div class="lng_btn">
                                <div class="ui language bottom right pointing dropdown floating" id="languages"
                                    data-content="Select Language">
                                    <a href="#"><i class='uil uil-globe lft'></i>Language<i
                                            class='uil uil-angle-down rgt'></i></a>
                                    <div class="menu">
                                        <div class="scrolling menu">
                                            <div class="item" data-percent="100" data-value="en"
                                                data-english="English">
                                                <span class="description">English</span>
                                                English
                                            </div>
                                            <div class="item" data-percent="94" data-value="da"
                                                data-english="Danish">
                                                <span class="description">dansk</span>
                                                Danish
                                            </div>
                                            <div class="item" data-percent="94" data-value="es"
                                                data-english="Spanish">
                                                <span class="description">Español</span>
                                                Spanish
                                            </div>
                                            <div class="item" data-percent="34" data-value="zh"
                                                data-english="Chinese">
                                                <span class="description">简体中文</span>
                                                Chinese
                                            </div>
                                            <div class="item" data-percent="54" data-value="zh_TW"
                                                data-english="Chinese (Taiwan)">
                                                <span class="description">中文 (臺灣)</span>
                                                Chinese (Taiwan)
                                            </div>
                                            <div class="item" data-percent="79" data-value="fa"
                                                data-english="Persian">
                                                <span class="description">پارسی</span>
                                                Persian
                                            </div>
                                            <div class="item" data-percent="41" data-value="fr"
                                                data-english="French">
                                                <span class="description">Français</span>
                                                French
                                            </div>
                                            <div class="item" data-percent="37" data-value="el"
                                                data-english="Greek">
                                                <span class="description">ελληνικά</span>
                                                Greek
                                            </div>
                                            <div class="item" data-percent="37" data-value="ru"
                                                data-english="Russian">
                                                <span class="description">Русский</span>
                                                Russian
                                            </div>
                                            <div class="item" data-percent="36" data-value="de"
                                                data-english="German">
                                                <span class="description">Deutsch</span>
                                                German
                                            </div>
                                            <div class="item" data-percent="23" data-value="it"
                                                data-english="Italian">
                                                <span class="description">Italiano</span>
                                                Italian
                                            </div>
                                            <div class="item" data-percent="21" data-value="nl"
                                                data-english="Dutch">
                                                <span class="description">Nederlands</span>
                                                Dutch
                                            </div>
                                            <div class="item" data-percent="19" data-value="pt_BR"
                                                data-english="Portuguese">
                                                <span class="description">Português(BR)</span>
                                                Portuguese
                                            </div>
                                            <div class="item" data-percent="17" data-value="id"
                                                data-english="Indonesian">
                                                <span class="description">Indonesian</span>
                                                Indonesian
                                            </div>
                                            <div class="item" data-percent="12" data-value="lt"
                                                data-english="Lithuanian">
                                                <span class="description">Lietuvių</span>
                                                Lithuanian
                                            </div>
                                            <div class="item" data-percent="11" data-value="tr"
                                                data-english="Turkish">
                                                <span class="description">Türkçe</span>
                                                Turkish
                                            </div>
                                            <div class="item" data-percent="10" data-value="kr"
                                                data-english="Korean">
                                                <span class="description">한국어</span>
                                                Korean
                                            </div>
                                            <div class="item" data-percent="7" data-value="ar"
                                                data-english="Arabic">
                                                <span class="description">العربية</span>
                                                Arabic
                                            </div>
                                            <div class="item" data-percent="6" data-value="hu"
                                                data-english="Hungarian">
                                                <span class="description">Magyar</span>
                                                Hungarian
                                            </div>
                                            <div class="item" data-percent="6" data-value="vi"
                                                data-english="Vietnamese">
                                                <span class="description">tiếng Việt</span>
                                                Vietnamese
                                            </div>
                                            <div class="item" data-percent="5" data-value="sv"
                                                data-english="Swedish">
                                                <span class="description">svenska</span>
                                                Swedish
                                            </div>
                                            <div class="item" data-precent="4" data-value="pl"
                                                data-english="Polish">
                                                <span class="description">polski</span>
                                                Polish
                                            </div>
                                            <div class="item" data-percent="6" data-value="ja"
                                                data-english="Japanese">
                                                <span class="description">日本語</span>
                                                Japanese
                                            </div>
                                            <div class="item" data-percent="0" data-value="ro"
                                                data-english="Romanian">
                                                <span class="description">românește</span>
                                                Romanian
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="footer_bottm">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="fotb_left">
                                        <li>
                                            <a href="index.html">
                                                <div class="footer_logo">
                                                    <img src="images/logo1.svg" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <p>© 2024 <strong>Cursus</strong>. All Rights Reserved.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="edu_social_links">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
