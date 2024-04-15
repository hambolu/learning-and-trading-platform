<li class="profile-dropdown">
    <a href="#" class="opts_account" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
        <img src="images/hd_dp.jpg" alt="">
    </a>
    <div class="dropdown-menu dropdown_account drop-down dropdown-menu-end">
        <div class="channel_my">
            <div class="profile_link">
                <img src="images/hd_dp.jpg" alt="">
                <div class="pd_content">
                    <div class="rhte85">
                        <h6>{{ Auth::user()->name }}</h6>
                        <div class="mef78" title="Verify">
                            <i class='uil uil-check-circle'></i>
                        </div>
                    </div>
                    <span>{{ Auth::user()->email }}</span>
                </div>							
            </div>
            <a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>						
        </div>
        <div class="night_mode_switch__btn">
            <a href="#" id="night-mode" class="btn-night-mode">
                <i class="uil uil-moon"></i> Night mode
                <span class="btn-night-mode-switch">
                    <span class="uk-switch-button"></span>
                </span>
            </a>
        </div>
        <a href="instructor_dashboard.html" class="item channel_item">Cursus dashboard</a>						
        <a href="membership.html" class="item channel_item">Paid Memberships</a>
        <a href="setting.html" class="item channel_item">Setting</a>
        <a href="help.html" class="item channel_item">Help</a>
        <a href="feedback.html" class="item channel_item">Send Feedback</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            
            <a href="{{ route('logout') }}" class="item channel_item" onclick="event.preventDefault();
            this.closest('form').submit();">Sign Out</a>

        </form>
    </div>
</li>