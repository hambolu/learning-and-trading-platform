@extends('layouts.app')
@section('content')
<!-- Header Start -->
<header class="header clearfix">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
            </div>
            <ul>
            <li class="nav-item">
                <a class="nav-link " href="/login">Login</a>
              </li>
            </ul>
              
              <a class="btn upload_btn m-2" href="/register">Register</a>
            </div>
          </nav>
    </div>
</header>
<!-- Header End -->
<!-- Body Start -->
<div class="wrapper _bg4586 _new89">		
    
    <div class="_215td5">
        <div class="container">
            <div class="row mt-4 pt-4">
                <div class="col pt-4">
                    <div class="title589 text-center">
                        <h2 style="font-size: 3rem;">Our Global Reach</h2>
                        <p>Cursus is the leading global marketplace for teaching and learning, connecting millions of students to the skills they need to succeed.</p >
                        <img class="line-title" src="images/line.svg" alt="">
                    </div>
                    <button class="btn btn-success"></button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="title589 text-center">
                        <h2>Our Features</h2>
                        <p>On Cursus, you have access to:</p>
                        <img class="line-title" src="images/line.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-3  col-sm-6">
                    <div class="feature125">
                        <i class="uil uil-mobile-android-alt"></i>
                        <h4>Mobile learning</h4>
                        <p>Quisque nec volutpat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
                <div class="col-lg-3  col-sm-6">
                    <div class="feature125">
                        <i class="uil uil-users-alt"></i>
                        <h4>Academic & Technical Support</h4>
                        <p>Quisque nec volutpat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
                <div class="col-lg-3  col-sm-6">
                    <div class="feature125">
                        <i class="uil uil-award"></i>
                        <h4>Sharable Certificates</h4>
                        <p>Quisque nec volutpat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
                <div class="col-lg-3  col-sm-6">
                    <div class="feature125">
                        <i class="uil uil-globe"></i>
                        <h4>An Inclusive Experience</h4>
                        <p>Quisque nec volutpat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_215zd5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title478">
                        <h2>Our Story</h2>
                        <img class="line-title" src="images/line.svg" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur vel dolor id ultrices. Proin a magna at mi pretium pulvinar in eu enim. Nulla vel lacus lectus. Donec at venenatis augue. Nam vitae purus placerat, hendrerit nisl id, finibus magna. Etiam pharetra gravida ornare. Donec sagittis, ipsum in egestas egestas, dui lorem sollicitudin justo, ut ullamcorper velit neque eu velit. Ut et fringilla elit. Mauris augue augue, auctor a blandit ac, convallis eget neque. Curabitur in ante ante. Nullam laoreet tempus erat at ornare. In nisl nisi, dapibus eget facilisis sit amet, commodo quis nibh.</p >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="story125">
                        <img src="images/about/stroy_img.png" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="_215td5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title589 text-center">
                        <h2>Our Global Reach</h2>
                        <p>Cursus is the leading global marketplace for teaching and learning, connecting millions of students to the skills they need to succeed.</p >
                        <img class="line-title" src="images/line.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="p__metric">
                        25k
                        <span>Instructors</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="p__metric">
                        95k
                        <span>Courses</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="p__metric">
                        40M
                        <span>Course enrollments</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="p__metric">
                        50+
                        <span>Languages</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="p__metric">
                        595+
                        <span>Membership Partners</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="p__metric">
                        295
                        <span>Countries</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_215xd5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title589 text-center">
                        <h2>Meet Our Team</h2>
                        <p>A perfect blend of creativity and technical wizardry. The best people formula for great websites!</p>
                        <img class="line-title" src="images/line.svg" alt="">
                    </div>						
                </div>
                <div class="col-lg-6">
                    <div class="jmio125">
                        <p>Morbi eget elit eget turpis varius mollis eget vel massa. Donec porttitor, sapien eget commodo vulputate, erat felis aliquam dolor, non condimentum libero dolor vel ipsum. Sed porttitor nisi eget nulla ullamcorper eleifend. Fusce tristique sapien nisi, vel feugiat neque luctus sit amet. Quisque consequat quis turpis in mattis. Maecenas eget mollis nisl. Cras porta dapibus est, quis malesuada ex iaculis at. Vestibulum egestas tortor in urna tempor, in fermentum lectus bibendum. In leo leo, bibendum at pharetra at, tincidunt in nulla. In vel malesuada nulla, sed tincidunt neque. Phasellus at massa vel sem aliquet sodales non in magna. Ut tempus ipsum sagittis neque cursus euismod. Vivamus luctus elementum tortor, ac aliquet dolor vehicula et.</p>
                        <a href="#" class="crer_btn_link">Join Our Team</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="jmio125">
                        <img src="images/about/team.jpg" alt="">
                    </div>
                </div>					
            </div>
        </div>
    </div>
    
    <footer class="footer">
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
                            <div class="ui language bottom right pointing dropdown floating" id="languages" data-content="Select Language">
                                <a href="#"><i class='uil uil-globe lft'></i>Language<i class='uil uil-angle-down rgt'></i></a>
                                <div class="menu">
                                    <div class="scrolling menu">
                                        <div class="item" data-percent="100" data-value="en" data-english="English">
                                            <span class="description">English</span>
                                            English
                                        </div>
                                        <div class="item" data-percent="94" data-value="da" data-english="Danish">
                                            <span class="description">dansk</span>
                                            Danish
                                        </div>
                                        <div class="item" data-percent="94" data-value="es" data-english="Spanish">
                                            <span class="description">Español</span>
                                            Spanish
                                        </div>
                                        <div class="item" data-percent="34" data-value="zh" data-english="Chinese">
                                            <span class="description">简体中文</span>
                                            Chinese
                                        </div>
                                        <div class="item" data-percent="54" data-value="zh_TW" data-english="Chinese (Taiwan)">
                                            <span class="description">中文 (臺灣)</span>
                                            Chinese (Taiwan)
                                        </div>
                                        <div class="item" data-percent="79" data-value="fa" data-english="Persian">
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
                                        <div class="item" data-percent="37" data-value="ru" data-english="Russian">
                                            <span class="description">Русский</span>
                                            Russian
                                        </div>
                                        <div class="item" data-percent="36" data-value="de" data-english="German">
                                            <span class="description">Deutsch</span>
                                            German
                                        </div>
                                        <div class="item" data-percent="23" data-value="it" data-english="Italian">
                                            <span class="description">Italiano</span>
                                            Italian
                                        </div>
                                        <div class="item" data-percent="21" data-value="nl" data-english="Dutch">
                                            <span class="description">Nederlands</span>
                                            Dutch
                                        </div>
                                        <div class="item" data-percent="19" data-value="pt_BR" data-english="Portuguese">
                                            <span class="description">Português(BR)</span>
                                            Portuguese
                                        </div>
                                        <div class="item" data-percent="17" data-value="id" data-english="Indonesian">
                                            <span class="description">Indonesian</span>
                                            Indonesian
                                        </div>
                                        <div class="item" data-percent="12" data-value="lt" data-english="Lithuanian">
                                            <span class="description">Lietuvių</span>
                                            Lithuanian
                                        </div>
                                        <div class="item" data-percent="11" data-value="tr" data-english="Turkish">
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
                                        <div class="item" data-percent="6" data-value="hu" data-english="Hungarian">
                                            <span class="description">Magyar</span>
                                            Hungarian
                                        </div>
                                        <div class="item" data-percent="6" data-value="vi" data-english="Vietnamese">
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
                                        <div class="item" data-percent="6" data-value="ja" data-english="Japanese">
                                            <span class="description">日本語</span>
                                            Japanese
                                        </div>
                                        <div class="item" data-percent="0" data-value="ro" data-english="Romanian">
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
<!-- Body End -->
@endsection