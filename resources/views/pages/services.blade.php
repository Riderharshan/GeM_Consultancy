@extends('layouts.app')

@section('title', 'Our Services — GeM Consultancy')
@section('meta_desc', 'Explore our complete range of GeM consultancy services — seller registration, buyer support, ATL, PFMS, IP registration and more.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero__orb page-hero__orb--1"></div>
    <div class="page-hero__orb page-hero__orb--2"></div>
    <div class="container page-hero__inner">
        <div class="page-hero__breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span class="material-icons-round">chevron_right</span>
            <span>Services</span>
        </div>
        <h1 class="page-hero__title" data-animate="fade-up">Our <span class="text-gradient">Services</span></h1>
        <p class="page-hero__subtitle" data-animate="fade-up">
            Comprehensive GeM consultancy from registration to compliance — everything you need in one place.
        </p>
    </div>
</section>

<!-- SERVICES DETAILED -->
<section class="section">
    <div class="container">
        <div class="services-detailed" data-animate="stagger">
            @foreach($services as $index => $svc)
            <div class="svc-detail-card svc-detail-card--{{ $svc['color'] }} {{ $index % 2 === 1 ? 'svc-detail-card--reverse' : '' }}">
                <div class="svc-detail-card__visual">
                    <div class="svc-detail-card__icon-wrap">
                        <span class="material-icons-round">{{ $svc['icon'] }}</span>
                    </div>
                    <div class="svc-detail-card__tagline">{{ $svc['tagline'] }}</div>
                </div>
                <div class="svc-detail-card__content">
                    <h2 class="svc-detail-card__title">{{ $svc['title'] }}</h2>
                    <ul class="svc-detail-card__list">
                        @foreach($svc['items'] as $item)
                        <li>
                            <span class="material-icons-round">check_circle</span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn--primary svc-detail-card__cta">
                        Get Started
                        <span class="material-icons-round">arrow_forward</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ADD-ON SERVICES -->
<section class="section section--alt">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <div class="section-badge">Add-On Services</div>
            <h2 class="section-title">Additional <span class="text-gradient">Support Services</span></h2>
        </div>
        <div class="addon-grid" data-animate="stagger">
            @php
            $addons = [
                ['icon' => 'description',    'title' => 'Documentation Support',     'desc' => 'Expert assistance in preparing and verifying all required documents.'],
                ['icon' => 'school',         'title' => 'GeM Training',              'desc' => 'Hands-on training and consultation sessions for your team.'],
                ['icon' => 'notifications',  'title' => 'Tender Alerts',             'desc' => 'Real-time alerts and strategic guidance for relevant government tenders.'],
                ['icon' => 'manage_accounts','title' => 'Account Management',        'desc' => 'Ongoing GeM account management and compliance monitoring.'],
            ];
            @endphp
            @foreach($addons as $a)
            <div class="addon-card">
                <span class="material-icons-round addon-card__icon">{{ $a['icon'] }}</span>
                <h4 class="addon-card__title">{{ $a['title'] }}</h4>
                <p class="addon-card__desc">{{ $a['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- PRICING NOTE -->
<section class="section">
    <div class="container">
        <div class="pricing-note" data-animate="fade-up">
            <span class="material-icons-round">price_check</span>
            <div>
                <h3>Transparent & Flexible Pricing</h3>
                <p>We believe in straightforward, affordable pricing tailored to your specific needs. Contact us for a custom quote based on the services you require.</p>
                <a href="{{ route('contact') }}" class="btn btn--primary" style="margin-top:1.25rem;">Request a Quote</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-banner" data-animate="fade-up">
    <div class="cta-banner__orb cta-banner__orb--1"></div>
    <div class="cta-banner__orb cta-banner__orb--2"></div>
    <div class="container cta-banner__inner">
        <h2 class="cta-banner__title">Not Sure Which Service You Need?</h2>
        <p class="cta-banner__subtitle">Book a free consultation and our experts will guide you to the right solution.</p>
        <a href="{{ route('contact') }}" class="btn btn--lg btn--white">
            <span class="material-icons-round">calendar_month</span>
            Book Free Consultation
        </a>
    </div>
</section>

@endsection
