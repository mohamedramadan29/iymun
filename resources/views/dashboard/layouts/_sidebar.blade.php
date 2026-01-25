<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ Route::is('dashboard.welcome') ? 'active' : '' }}"><a
                    href="{{ route('dashboard.welcome') }}"><i class="la la-home"></i><span class="menu-title"
                        data-i18n="nav.dash.main">Home</span></a>
            </li>
            <li class="nav-item {{ Route::is('dashboard.users.*') ? 'active' : '' }}"><a href="#"><i
                        class="la la-file-text"></i><span class="menu-title" data-i18n="nav.users.main">
                        Orders Management
                    </span></a>
                <ul class="menu-content">
                    <li class="{{ Route::is('dashboard.users.index') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.users.index') }}"
                            data-i18n="nav.users.user_profile"> Orders & Users
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item {{ Route::is('dashboard.payments.*') ? 'active' : '' }}"><a href="#"><i
                        class="la la-credit-card"></i><span class="menu-title" data-i18n="nav.users.main">
                        Payments
                    </span></a>
                <ul class="menu-content">
                    <li class="{{ Route::is('dashboard.payments.index') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.payments.index') }}"
                            data-i18n="nav.users.user_profile"> Payments
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item {{ Route::is('dashboard.mails.*') ? 'active' : '' }}"><a href="#"><i
                        class="la la-envelope"></i><span class="menu-title" data-i18n="nav.users.main">
                        Email Management
                    </span></a>
                <ul class="menu-content">
                    <li class="{{ Route::is('dashboard.mails.index') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.mails.index') }}"
                            data-i18n="nav.users.user_profile"> Emails
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('dashboard.packages.*') ? 'active' : '' }}"><a href="#"><i
                        class="la la-television"></i><span class="menu-title" data-i18n="nav.users.main">
                        Plans & Pricing
                    </span></a>
                <ul class="menu-content">
                    <li class="{{ Route::is('dashboard.packages.index') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.packages.index') }}"
                            data-i18n="nav.users.user_profile"> Plans & Pricing
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ Route::is('dashboard.content.*') ? 'active' : '' }}"><a href="#"><i
                        class="la la-television"></i><span class="menu-title" data-i18n="nav.users.main">
                        Pages Content
                    </span></a>
                <ul class="menu-content">
                    <li class="{{ Route::is('dashboard.content.home') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.content.home') }}"
                            data-i18n="nav.users.user_profile"> Home Page
                        </a>
                    </li>
                    <li class="{{ Route::is('dashboard.content.about') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.content.about') }}"
                            data-i18n="nav.users.user_profile"> About Us
                        </a>
                    </li>
                    <li class="{{ Route::is('dashboard.content.committee') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.content.committee') }}"
                            data-i18n="nav.users.user_profile"> Committees
                        </a>
                    </li>
                    <li class="{{ Route::is('dashboard.content.why-join') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.content.why-join') }}"
                            data-i18n="nav.users.user_profile"> Why Join Us
                        </a>
                    </li>
                    <li class="{{ Route::is('dashboard.content.venue') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.content.venue') }}"
                            data-i18n="nav.users.user_profile"> Venue
                        </a>
                    </li>

                    <li class="{{ Route::is('dashboard.content.partner') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.content.partner') }}"
                            data-i18n="nav.users.user_profile"> Partners
                        </a>
                    </li>



                    <li class="{{ Route::is('dashboard.content.faq') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.content.faq.index') }}"
                            data-i18n="nav.users.user_profile"> Faq
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item {{ Route::is('dashboard.setting.*') ? 'active' : '' }}"><a href="#"><i
                        class="la la-television"></i><span class="menu-title" data-i18n="nav.role.main"> Settings
                        Management
                    </span></a>
                <ul class="menu-content">
                    <li class="{{ Route::is('dashboard.setting.index') ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('dashboard.setting.index') }}" data-i18n="nav.role.index">
                            Settings </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
