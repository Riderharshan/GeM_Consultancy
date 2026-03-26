@extends('layouts.app')

@section('title', 'About Us — GeM Consultancy')
@section('meta_desc', 'Learn about GeM Consultancy — our mission, vision, values and expert team dedicated to making government procurement accessible across India.')

@section('content')

<!-- ══════════════════════════════════════
     PAGE HERO
══════════════════════════════════════ -->
<section class="page-hero">
    <div class="page-hero__orb page-hero__orb--1"></div>
    <div class="page-hero__orb page-hero__orb--2"></div>
    <div class="container page-hero__inner">
        <div class="page-hero__breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span class="material-icons-round">chevron_right</span>
            <span>About Us</span>
        </div>
        <h1 class="page-hero__title" data-animate="fade-up">About <span class="text-gradient">GeM Consultancy</span></h1>
        <p class="page-hero__subtitle" data-animate="fade-up">A dedicated team of GeM experts helping businesses and institutions succeed in government procurement.</p>
    </div>
</section>

<!-- ══════════════════════════════════════
     WHO WE ARE
══════════════════════════════════════ -->
<section class="section">
    <div class="container">
        <div class="about-intro" data-animate="fade-up">
            <div class="about-intro__text">
                <div class="section-badge">Who We Are</div>
                <h2 class="section-title" style="text-align:left;margin-bottom:1.25rem;">
                    Professional GeM Consultancy <span class="text-gradient">Across India</span>
                </h2>
                <p class="about-intro__para">
                    We are a professional GeM consultancy firm dedicated to providing end-to-end support for buyers and sellers on the Government e-Marketplace (GeM) platform. We offer expert guidance to suppliers, manufacturers, service providers, and government buyers across India.
                </p>
                <p class="about-intro__para">
                    Our team ensures smooth registration, accurate documentation, and strategic bid participation to help you succeed on the GeM platform. With structured processes, documentation expertise, and strategic guidance, we ensure a smooth and transparent journey from registration to successful order execution.
                </p>
                <div class="about-intro__highlights">
                    <div class="about-intro__highlight">
                        <span class="material-icons-round">check_circle</span>
                        Experienced GeM Consultants
                    </div>
                    <div class="about-intro__highlight">
                        <span class="material-icons-round">check_circle</span>
                        End-to-End Documentation Support
                    </div>
                    <div class="about-intro__highlight">
                        <span class="material-icons-round">check_circle</span>
                        Transparent & Professional Approach
                    </div>
                    <div class="about-intro__highlight">
                        <span class="material-icons-round">check_circle</span>
                        Affordable & Flexible Pricing
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="btn btn--primary" style="margin-top:2rem;">Talk to Our Experts</a>
            </div>

            <div class="about-intro__visual" data-animate="fade-left">
                <div class="about-stats-card">
                    <div class="about-stats-card__item">
                        <span class="about-stats-card__num">500<sup>+</sup></span>
                        <span class="about-stats-card__label">Clients Served</span>
                    </div>
                    <div class="about-stats-card__item">
                        <span class="about-stats-card__num">98<sup>%</sup></span>
                        <span class="about-stats-card__label">Success Rate</span>
                    </div>
                    <div class="about-stats-card__item">
                        <span class="about-stats-card__num">5<sup>+</sup></span>
                        <span class="about-stats-card__label">Years of Experience</span>
                    </div>
                    <div class="about-stats-card__item">
                        <span class="about-stats-card__num">1200<sup>+</sup></span>
                        <span class="about-stats-card__label">Tenders Filed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     MISSION & VISION
══════════════════════════════════════ -->
<section class="section section--alt">
    <div class="container">
        <div class="mv-grid" data-animate="stagger">
            <div class="mv-card mv-card--mission">
                <div class="mv-card__icon">
                    <span class="material-icons-round">flag</span>
                </div>
                <h3 class="mv-card__title">Our Mission</h3>
                <p class="mv-card__text">
                    To make government procurement accessible, transparent, and efficient for businesses, schools, institutions, and service providers across India by providing reliable and professional GeM consultancy services.
                </p>
            </div>
            <div class="mv-card mv-card--vision">
                <div class="mv-card__icon">
                    <span class="material-icons-round">visibility</span>
                </div>
                <h3 class="mv-card__title">Our Vision</h3>
                <p class="mv-card__text">
                    To become a trusted GeM consultancy partner recognized for integrity, compliance, and excellence in supporting public procurement processes across India.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     OUR VALUES
══════════════════════════════════════ -->
<section class="section">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <div class="section-badge">Our Values</div>
            <h2 class="section-title">The Principles That <span class="text-gradient">Guide Us</span></h2>
        </div>

        <div class="values-grid" data-animate="stagger">
            @foreach($values as $val)
            <div class="value-card">
                <div class="value-card__icon">
                    <span class="material-icons-round">{{ $val['icon'] }}</span>
                </div>
                <h4 class="value-card__title">{{ $val['title'] }}</h4>
                <p class="value-card__desc">{{ $val['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     WHY CHOOSE US
══════════════════════════════════════ -->
<section class="section section--alt">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <div class="section-badge">Why Choose Us</div>
            <h2 class="section-title">What Sets Us <span class="text-gradient">Apart</span></h2>
        </div>
        <div class="why-grid" data-animate="stagger">
            @php
            $whys = [
                ['icon' => 'groups',            'title' => 'Experienced Consultants',    'desc' => 'Our team has deep expertise in GeM platform processes and government procurement norms.'],
                ['icon' => 'description',       'title' => 'End-to-End Documentation',   'desc' => 'We handle all documentation, verification, and submission on your behalf.'],
                ['icon' => 'speed',             'title' => 'Quick Turnaround',           'desc' => 'We work with urgency and efficiency to get you on the GeM platform fast.'],
                ['icon' => 'visibility',        'title' => 'Transparent Approach',       'desc' => 'Clear communication at every stage — no surprises, no hidden costs.'],
                ['icon' => 'headset_mic',       'title' => 'Dedicated Client Support',   'desc' => 'Our support team is available to assist you throughout your GeM journey.'],
                ['icon' => 'price_check',       'title' => 'Affordable Pricing',         'desc' => 'Flexible and transparent pricing options designed to suit businesses of every size.'],
            ];
            @endphp
            @foreach($whys as $w)
            <div class="why-card">
                <span class="material-icons-round why-card__icon">{{ $w['icon'] }}</span>
                <h4 class="why-card__title">{{ $w['title'] }}</h4>
                <p class="why-card__desc">{{ $w['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     COMMITMENT + DISCLAIMER
══════════════════════════════════════ -->
<section class="section">
    <div class="container">
        <div class="commitment-block" data-animate="fade-up">
            <div class="commitment-block__icon">
                <span class="material-icons-round">handshake</span>
            </div>
            <div class="commitment-block__content">
                <h3>Our Commitment</h3>
                <p>We are committed to maintaining high standards of professionalism and ethical practices. As a private consultancy firm, we provide guidance and assistance while strictly adhering to platform regulations and compliance requirements.</p>
                <div class="commitment-block__disclaimer">
                    <span class="material-icons-round">info</span>
                    <em>We are an independent consultancy firm providing assistance for the GeM platform. We are not affiliated with, endorsed by, or connected to the Government of India or the official GeM portal.</em>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-banner" data-animate="fade-up">
    <div class="cta-banner__orb cta-banner__orb--1"></div>
    <div class="cta-banner__orb cta-banner__orb--2"></div>
    <div class="container cta-banner__inner">
        <h2 class="cta-banner__title">Ready to Work With Us?</h2>
        <p class="cta-banner__subtitle">Book a free consultation and let our experts create a custom strategy for your GeM success.</p>
        <a href="{{ route('contact') }}" class="btn btn--lg btn--white">
            <span class="material-icons-round">calendar_month</span>
            Book Free Consultation
        </a>
    </div>
</section>

@endsection
