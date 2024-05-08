@extends('layouts.app')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .tabs-left {
  border-bottom: none;
  border-right: 1px solid #ddd;
}

.tabs-left > li {
  float: none;
  margin: 0px;
}

.tabs-left > li.active > a,
.tabs-left > li.active > a:hover,
.tabs-left > li.active > a:focus {
  border-bottom-color: #ddd;
  border-right-color: transparent;
  background: #f90;
  border: none;
  border-radius: 0px;
  margin: 0px;
}
.nav-tabs > li > a:hover {
  /* margin-right: 2px; */
  line-height: 1.42857143;
  border: 1px solid transparent;
  /* border-radius: 4px 4px 0 0; */
}
.tabs-left > li.active > a::after {
  content: "";
  position: absolute;
  top: 10px;
  right: -10px;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;

  border-left: 10px solid #f90;
  display: block;
  width: 0;
}

</style>
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
            <a href="/"><img src="images/logo.svg" alt=""></a>
            <a href="/"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a>
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
                    <a href="" class="option_links" title="cart"><i class='uil uil-shopping-cart-alt'></i><span
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
            <div class="container p-4">
                <div  class="col-sm-6">
                    <h3>Left Tabs</h3>
                    <hr/>
                    <div class="col-xs-3"> <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left sideways">
                        <li class="active"><a href="#home-v" data-toggle="tab">Home</a></li>
                        <li><a href="#profile-v" data-toggle="tab">Profile</a></li>
                        <li><a href="#messages-v" data-toggle="tab">Messages</a></li>
                        <li><a href="#settings-v" data-toggle="tab">Settings</a></li>
                      </ul>
                    </div>
            
                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="home-v">Home Tab.</div>
                        <div class="tab-pane" id="profile-v">Profile Tab.</div>
                        <div class="tab-pane" id="messages-v">Messages Tab.</div>
                        <div class="tab-pane" id="settings-v">Settings Tab.</div>
                      </div>
                    </div>
            
                    <div class="clearfix"></div>
            
                  </div>
            
                  
            </div>
        </div>
    @endsection
