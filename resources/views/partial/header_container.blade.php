<header class="header clearfix">
    <button type="button" id="toggleMenu" class="toggle_menu">
        <i class='uil uil-bars'></i>
    </button>
    <button id="collapse_menu" class="collapse_menu">
        <i class="uil uil-bars collapse_menu--icon "></i>
        <span class="collapse_menu--label"></span>
    </button>
    <div class="main_logo" id="logo">
        <a href="/dashboard"><img src="images/logo.svg" alt=""></a>
        <a href="/dashboard"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a>
    </div>
   @include('partial.search')
    <div class="header_right">
        <ul>


            @include('partial.course-category-button')

            
            @include('partial.profile_dropdown')
        </ul>
    </div>
</header>