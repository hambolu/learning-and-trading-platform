﻿@extends('layouts.app')
@section('content')
    <!-- Header Start -->
    @include('partial.header_container')
    <!-- Body Start -->
    <div class="wrapper _bg4586 _new89">
        <div class="_215b15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title125">
                            <div class="titleleft">
                                <div class="ttl121">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="title126">
                            <h2>Shopping Cart</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb4d25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="fcrse_1">
                            <a href="course_detail_view.html" class="hf_img">
                                <img class="cart_img" src="images/courses/img-2.jpg" alt="">
                            </a>
                            <div class="hs_content">
                                <div class="eps_dots eps_dots10 more_dropdown">
                                    <a href="#"><i class='uil uil-times'></i></a>
                                </div>
                                <a href="course_detail_view.html" class="crse14s title900 pt-2">The Web Developer
                                    Bootcamp</a>
                                <a href="#" class="crse-cate">Web Development | Python</a>
                                <div class="auth1lnkprce">
                                    <p class="cr1fot">By <a href="#">John Doe</a></p>
                                    <div class="prce142">$10</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="membership_chk_bg rght1528">
                            <div class="checkout_title">
                                <h4>Total</h4>
                                <img src="images/line.svg" alt="">
                            </div>
                            <div class="order_dt_section">
                                <div class="order_title">
                                    <h4>Orignal Price</h4>
                                    <div class="order_price">$15</div>
                                </div>
                                <div class="order_title">
                                    <h6>Discount Price</h6>
                                    <div class="order_price">$5</div>
                                </div>
                                <div class="order_title">
                                    <h2>Total</h2>
                                    <div class="order_price5">$10</div>
                                </div>
                                <div class="coupon_code">
                                    <p>Learn now is applied.</p>
                                    <div class="coupon_input">
                                        <div class="ui search focus mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="couponcode"
                                                    value="" id="id_coupon_code" required="" maxlength="6"
                                                    placeholder="Enter Coupon Code">
                                            </div>
                                            <button class="code-apply-btn" type="submit">Apply</button>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="chck-btn22">Checkout Now</a>
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
                                            <div class="item" data-percent="94" data-value="da" data-english="Danish">
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
                                            <div class="item" data-percent="41" data-value="fr" data-english="French">
                                                <span class="description">Français</span>
                                                French
                                            </div>
                                            <div class="item" data-percent="37" data-value="el" data-english="Greek">
                                                <span class="description">ελληνικά</span>
                                                Greek
                                            </div>
                                            <div class="item" data-percent="37" data-value="ru"
                                                data-english="Russian">
                                                <span class="description">Русский</span>
                                                Russian
                                            </div>
                                            <div class="item" data-percent="36" data-value="de" data-english="German">
                                                <span class="description">Deutsch</span>
                                                German
                                            </div>
                                            <div class="item" data-percent="23" data-value="it"
                                                data-english="Italian">
                                                <span class="description">Italiano</span>
                                                Italian
                                            </div>
                                            <div class="item" data-percent="21" data-value="nl" data-english="Dutch">
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
                                            <div class="item" data-percent="10" data-value="kr" data-english="Korean">
                                                <span class="description">한국어</span>
                                                Korean
                                            </div>
                                            <div class="item" data-percent="7" data-value="ar" data-english="Arabic">
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
                                            <div class="item" data-percent="5" data-value="sv" data-english="Swedish">
                                                <span class="description">svenska</span>
                                                Swedish
                                            </div>
                                            <div class="item" data-precent="4" data-value="pl" data-english="Polish">
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
