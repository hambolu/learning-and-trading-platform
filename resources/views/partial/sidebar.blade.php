<nav class="vertical_nav">
    <div class="left_section menu_left" id="js-menu">
        <div class="left_section">
            <ul>
                <li class="menu--item">
                    <a href="/dashboard" class="menu--link active" title="Main Dashboard">
                        <i class='uil uil-home-alt menu--icon'></i>
                        <span class="menu--label">Main Dashboard</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="/dashboard" class="menu--link " title="Main Dashboard">
                        <i class='uil uil-wallet menu--icon'></i>
                        <span class="menu--label">My Space</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="/dashboard" class="menu--link " title="Main Dashboard">
                        <i class='uil uil-wallet menu--icon'></i>
                        <span class="menu--label">Wallet</span>
                    </a>
                </li>
                <li class="menu--item">
                    <a href="/dashboard" class="menu--link" title="Main Dashboard">
                        <i class='uil uil-home-alt menu--icon'></i>
                        <span class="menu--label">Payout</span>
                    </a>
                </li>
                @if (Route::currentRouteName() == 'sma_dashboard')
                    <li class="menu--item">
                        <a href="/posts" class="menu--link" title="Help">
                            <i class='uil uil-question-circle menu--icon'></i>
                            <span class="menu--label">Posts</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="/marketplace" class="menu--link" title="Help">
                            <i class='uil uil-cart menu--icon'></i>
                            <span class="menu--label">Market Place</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="/setting" class="menu--link" title="Setting">
                            <i class='uil uil-cog menu--icon'></i>
                            <span class="menu--label">Setting</span>
                        </a>
                    </li>
                @endif
                @if (Route::currentRouteName() == 'affiliate_dashboard')
                    <li class="menu--item">
                        <a href="/marketplace" class="menu--link" title="Help">
                            <i class='uil uil-cart menu--icon'></i>
                            <span class="menu--label">Market Place</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="/setting" class="menu--link" title="Setting">
                            <i class='uil uil-cog menu--icon'></i>
                            <span class="menu--label">Setting</span>
                        </a>
                    </li>
                @endif
                @if (Route::currentRouteName() == 'seller_dashboard')
                    <li class="menu--item">
                        <a href="/marketplace" class="menu--link" title="Help">
                            <i class='uil uil-cart menu--icon'></i>
                            <span class="menu--label">Market Place</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="/setting" class="menu--link" title="Setting">
                            <i class='uil uil-cog menu--icon'></i>
                            <span class="menu--label">Setting</span>
                        </a>
                    </li>
                @endif
                @if (Route::currentRouteName() == 'elearning_dashboard')
                    <li class="menu--item">
                        <a href="/marketplace" class="menu--link" title="Help">
                            <i class='uil uil-cart menu--icon'></i>
                            <span class="menu--label">Market Place</span>
                        </a>
                    </li>
                    <li class="menu--item">
                        <a href="/setting" class="menu--link" title="Setting">
                            <i class='uil uil-cog menu--icon'></i>
                            <span class="menu--label">Setting</span>
                        </a>
                    </li>
                @endif
                @if ($user->roles->contains('name', 'super_admin'))
                    @if (Route::currentRouteName() == 'dashboard')
                        <li class="menu--item">
                            <a href="/categories" class="menu--link" title="All Categories">
                                <i class='uil uil-apps menu--icon'></i>
                                <span class="menu--label">All Categories</span>
                            </a>
                        </li>

                        <li class="menu--item">
                            <a href="/courses" class="menu--link" title="All Course">
                                <i class="uil uil-book-alt menu--icon"></i>
                                <span class="menu--label">All Courses</span>
                            </a>
                        </li>

                        <li class="menu--item menu--item__has_sub_menu">
                            <label class="menu--link" title="All Users">
                                <i class='uil uil-layers menu--icon'></i>
                                <span class="menu--label">All Users</span>
                            </label>
                            <ul class="sub_menu">
                                <li class="sub_menu--item">
                                    <a href="/elearning-users" class="sub_menu--link">E-learning members</a>
                                </li>
                                <li class="sub_menu--item">
                                    <a href="/sma-users" class="sub_menu--link">Social Media Ambassadors</a>
                                </li>
                                <li class="sub_menu--item">
                                    <a href="/affiliate-users" class="sub_menu--link">Affiliates/Promoters</a>
                                </li>
                                <li class="sub_menu--item">
                                    <a href="/sellers" class="sub_menu--link">Merchants/Sellers</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu--item">
                            <a href="/posts" class="menu--link" title="Help">
                                <i class='uil uil-question-circle menu--icon'></i>
                                <span class="menu--label">Posts</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="/marketplace" class="menu--link" title="Help">
                                <i class='uil uil-cart menu--icon'></i>
                                <span class="menu--label">Market Place</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="/setting" class="menu--link" title="Setting">
                                <i class='uil uil-cog menu--icon'></i>
                                <span class="menu--label">Setting</span>
                            </a>
                        </li>
                    @endif
                @else
                @if (Route::currentRouteName() == 'dashboard')
                        
                        <li class="menu--item">
                            <a href="/marketplace" class="menu--link" title="Help">
                                <i class='uil uil-cart menu--icon'></i>
                                <span class="menu--label">Market Place</span>
                            </a>
                        </li>
                        <li class="menu--item">
                            <a href="/setting" class="menu--link" title="Setting">
                                <i class='uil uil-cog menu--icon'></i>
                                <span class="menu--label">Setting</span>
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>

    </div>
</nav>
