<li class="profile-dropdown">
    <a href="#" class="opts_account" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
        <img src="{{ asset('images/hd_dp.jpg') }}" alt="">
    </a>
    <div class="dropdown-menu dropdown_account drop-down dropdown-menu-end">
        <div class="channel_my">
            <div class="profile_link">
                <img src="{{ asset('images/hd_dp.jpg') }}" alt="">
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
           						
        </div>
        <div class="night_mode_switch__btn">
            <a href="#" id="night-mode" class="btn-night-mode">
                <i class="uil uil-moon"></i> Night mode
                <span class="btn-night-mode-switch">
                    <span class="uk-switch-button"></span>
                </span>
            </a>
        </div>
        <a href="/sma_dashboard" class="item channel_item"> Social Media Ambassadors</a>						
        <a href="/affiliate_dashboard" class="item channel_item">Affiliates/Promoters</a>
        <a href="/elearning_dashboard" class="item channel_item">E-learning Community</a>
        <a href="/seller_dashboard" class="item channel_item">Merchants/Sellers</a>
        
        <a href="/setting" class="item channel_item">Setting</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" class="item channel_item" onclick="event.preventDefault();
            this.closest('form').submit();">Sign Out</a>
        </form>
    </div>
</li>
