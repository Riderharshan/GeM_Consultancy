<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'GeM Consultancy — Government e-Marketplace Experts')</title>
    <meta name="description" content="@yield('meta_desc', 'Professional GeM consultancy for buyers and sellers. End-to-end support for registration, tender participation, product listing and compliance.')">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&display=swap" rel="stylesheet">

    {{-- Material Icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('head')
</head>
<body>

<!-- ═══════════════════════════════════════════
     NAVBAR
═══════════════════════════════════════════ -->
<header class="navbar" id="navbar">
    <div class="container navbar__inner">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="navbar__logo">
            <div class="navbar__logo-gem">
                <span class="material-icons-round">diamond</span>
            </div>
            <div class="navbar__logo-text">
                <span class="navbar__logo-primary">GeM</span>
                <span class="navbar__logo-secondary">Consultancy</span>
            </div>
        </a>

        {{-- Desktop Nav --}}
        <nav class="navbar__links" id="navLinks">
            <a href="{{ route('home') }}"         class="navbar__link {{ request()->routeIs('home')         ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}"        class="navbar__link {{ request()->routeIs('about')        ? 'active' : '' }}">About</a>
            <a href="{{ route('services') }}"     class="navbar__link {{ request()->routeIs('services')     ? 'active' : '' }}">Services</a>
            <a href="{{ route('testimonials') }}" class="navbar__link {{ request()->routeIs('testimonials') ? 'active' : '' }}">Testimonials</a>
            <a href="{{ route('contact') }}"      class="navbar__link {{ request()->routeIs('contact')      ? 'active' : '' }}">Contact</a>
        </nav>

        {{-- CTA + Hamburger --}}
        <div class="navbar__actions">
            <a href="{{ route('contact') }}" class="btn btn--sm btn--primary">Free Consultation</a>
            <button class="navbar__hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>

<!-- ═══════════════════════════════════════════
     MAIN CONTENT
═══════════════════════════════════════════ -->
<main>
    @yield('content')
</main>

<!-- ═══════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════ -->
<footer class="footer">
    <div class="footer__top">
        <div class="container footer__grid">

            {{-- Brand --}}
            <div class="footer__brand">
                <div class="footer__logo">
                    <span class="material-icons-round">diamond</span>
                    <span>GeM Consultancy</span>
                </div>
                <p class="footer__tagline">Making government procurement accessible, transparent, and efficient for businesses across India.</p>
                <div class="footer__disclaimer">
                    <span class="material-icons-round">info</span>
                    <small>Independent consultancy. Not affiliated with the Government of India or official GeM portal.</small>
                </div>
            </div>

            {{-- Quick Links --}}
            <div class="footer__col">
                <h4 class="footer__heading">Quick Links</h4>
                <ul class="footer__list">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('services') }}">Our Services</a></li>
                    <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div class="footer__col">
                <h4 class="footer__heading">Services</h4>
                <ul class="footer__list">
                    <li><a href="{{ route('services') }}">GeM Seller Registration</a></li>
                    <li><a href="{{ route('services') }}">GeM Buyer Services</a></li>
                    <li><a href="{{ route('services') }}">Schools & Institutions</a></li>
                    <li><a href="{{ route('services') }}">ATL Support</a></li>
                    <li><a href="{{ route('services') }}">PFMS Support</a></li>
                    <li><a href="{{ route('services') }}">IP Registration</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div class="footer__col">
                <h4 class="footer__heading">Get In Touch</h4>
                <ul class="footer__contact-list">
                    <li>
                        <span class="material-icons-round">phone</span>
                        <span>+91-XXXXXXXXXX</span>
                    </li>
                    <li>
                        <span class="material-icons-round">email</span>
                        <span>info@gemconsultpro.in</span>
                    </li>
                    <li>
                        <span class="material-icons-round">location_on</span>
                        <span>Bengaluru, Karnataka, India</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn--sm btn--outline-light" style="margin-top:1.25rem;">
                    Book Free Consultation
                </a>
            </div>

        </div>
    </div>

    <div class="footer__bottom">
        <div class="container footer__bottom-inner">
            <p>&copy; {{ date('Y') }} GeM Consultancy. All rights reserved.</p>
            <p class="footer__bottom-right">Built by <span class="material-icons-round" style="font-size:0.9rem;color:#f87171;">favorite</span> Harshan T N</p>
        </div>
    </div>
</footer>

{{-- Main JS --}}
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')

</body>
</html>
