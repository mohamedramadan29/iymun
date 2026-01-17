<!-- ==================== NAVBAR ==================== -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('front.index') }}">
            <img width="60px" src="{{ asset('assets/front/images/logo.webp') }}"
                alt="IYMUN 2026 | International Youth Diplomacy Conference - New York">
            <span>IYMUN & American Diplomats
                <br>
                <span style="color: #E3B106;font-size:12px"> NEW YORK 2026 </span>
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                        href="{{ route('front.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ route('front.about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('committees') ? 'active' : '' }}"
                        href="{{ route('front.committees') }}">Committees</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('why-us') ? 'active' : '' }}"
                        href="{{ route('front.why-us') }}">Why Join</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('pricing') ? 'active' : '' }}"
                        href="{{ route('front.pricing') }}">Pricing</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('venue') ? 'active' : '' }}"
                        href="{{ route('front.venue') }}">Venue</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('partners') ? 'active' : '' }}"
                        href="{{ route('front.partners') }}">Partners</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('faq')?'active':'' }}"
                        href="{{ route('front.faq') }}">FAQ</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('contact')?'active':'' }}"
                        href="{{ route('front.contact') }}">Contact</a></li>
                <li class="nav-item ms-lg-2">
                    <a href="{{ route('front.register') }}" class="btn-register-nav">Register</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a href="{{ route('front.login') }}" class="btn-register-nav">login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
