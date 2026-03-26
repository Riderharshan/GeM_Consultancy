@extends('layouts.app')

@section('title', 'GeM Consultancy — Complete GeM Support for Buyers & Sellers')

@section('content')

<!-- ══════════════════════════════════════
     HERO SECTION
══════════════════════════════════════ -->
<section class="hero">
    {{-- Animated background orbs --}}
    <div class="hero__orb hero__orb--1"></div>
    <div class="hero__orb hero__orb--2"></div>
    <div class="hero__orb hero__orb--3"></div>
    <div class="hero__grid-overlay"></div>

    <div class="container hero__inner">
        <div class="hero__content" data-animate="fade-up">
            <div class="hero__badge">
                <span class="material-icons-round">verified</span>
                Trusted GeM Consultancy Firm
            </div>
            <h1 class="hero__title">
                Complete GeM Consultancy<br>
                for <span class="hero__title-highlight">Buyers & Sellers</span>
            </h1>
            <p class="hero__subtitle">
                End-to-end support for GeM Registration, Tender Participation, Product Listing,
                Compliance, PFMS, ATL, Copyright and Patents — all under one roof.
            </p>
            <div class="hero__actions">
                <a href="{{ route('contact') }}" class="btn btn--lg btn--primary">
                    <span class="material-icons-round">calendar_month</span>
                    Book Free Consultation
                </a>
                <a href="{{ route('services') }}" class="btn btn--lg btn--glass">
                    <span class="material-icons-round">arrow_forward</span>
                    Explore Services
                </a>
            </div>
            <div class="hero__trust">
                <div class="hero__trust-item">
                    <span class="material-icons-round">check_circle</span> No hidden charges
                </div>
                <div class="hero__trust-item">
                    <span class="material-icons-round">check_circle</span> 98% success rate
                </div>
                <div class="hero__trust-item">
                    <span class="material-icons-round">check_circle</span> 24-hr support
                </div>
            </div>
        </div>

        <div class="hero__visual" data-animate="fade-left">
            <div class="hero__card-stack">
                <div class="hero__stat-card hero__stat-card--1">
                    <span class="material-icons-round">storefront</span>
                    <div>
                        <strong>500+</strong>
                        <small>Clients Served</small>
                    </div>
                </div>
                <div class="hero__stat-card hero__stat-card--2">
                    <span class="material-icons-round">gavel</span>
                    <div>
                        <strong>1200+</strong>
                        <small>Tenders Filed</small>
                    </div>
                </div>
                <div class="hero__stat-card hero__stat-card--3">
                    <span class="material-icons-round">stars</span>
                    <div>
                        <strong>98%</strong>
                        <small>Success Rate</small>
                    </div>
                </div>
                <div class="hero__center-badge">
                    <span class="material-icons-round">diamond</span>
                    <span>GeM<br>Experts</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Wave bottom --}}
    <div class="hero__wave">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="var(--bg-body)"/>
        </svg>
    </div>
</section>

<!-- ══════════════════════════════════════
     STATS STRIP
══════════════════════════════════════ -->
<section class="stats-strip">
    <div class="container stats-strip__inner">
        @foreach($stats as $stat)
        <div class="stats-strip__item" data-animate="fade-up">
            <span class="stats-strip__value">{{ $stat['value'] }}</span>
            <span class="stats-strip__label">{{ $stat['label'] }}</span>
        </div>
        @endforeach
    </div>
</section>

<!-- ══════════════════════════════════════
     SERVICES OVERVIEW
══════════════════════════════════════ -->
<section class="section">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <div class="section-badge">Our Core Services</div>
            <h2 class="section-title">Everything You Need on <span class="text-gradient">GeM Platform</span></h2>
            <p class="section-subtitle">From registration to order execution — we handle every step with expertise and precision.</p>
        </div>

        <div class="services-grid" data-animate="stagger">
            @foreach($services as $svc)
            <div class="service-card service-card--{{ $svc['color'] }}">
                <div class="service-card__icon">
                    <span class="material-icons-round">{{ $svc['icon'] }}</span>
                </div>
                <h3 class="service-card__title">{{ $svc['title'] }}</h3>
                <p class="service-card__desc">{{ $svc['desc'] }}</p>
                <a href="{{ route('services') }}" class="service-card__link">
                    Learn more <span class="material-icons-round">arrow_forward</span>
                </a>
            </div>
            @endforeach
        </div>

        <div class="section-cta" data-animate="fade-up">
            <a href="{{ route('services') }}" class="btn btn--lg btn--primary">View All Services</a>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     HOW IT WORKS
══════════════════════════════════════ -->
<section class="section section--alt">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <div class="section-badge">Process</div>
            <h2 class="section-title">How It <span class="text-gradient">Works</span></h2>
            <p class="section-subtitle">A simple 5-step process from consultation to successful order execution.</p>
        </div>

        <div class="steps" data-animate="stagger">
            @php
            $steps = [
                ['num' => '01', 'icon' => 'support_agent',    'title' => 'Initial Consultation',    'desc' => 'We understand your requirements and eligibility for the GeM platform.'],
                ['num' => '02', 'icon' => 'folder_open',      'title' => 'Documentation Collection','desc' => 'We guide you in preparing and verifying all necessary documents.'],
                ['num' => '03', 'icon' => 'how_to_reg',       'title' => 'Registration & Filing',   'desc' => 'We complete the registration or tender filing accurately and efficiently.'],
                ['num' => '04', 'icon' => 'task_alt',         'title' => 'Approval & Activation',   'desc' => 'Your GeM account or tender submission is completed successfully.'],
                ['num' => '05', 'icon' => 'repeat',           'title' => 'Ongoing Support',         'desc' => 'We assist you continuously with bids, compliance, and order management.'],
            ];
            @endphp
            @foreach($steps as $i => $step)
            <div class="step-item">
                <div class="step-item__num">{{ $step['num'] }}</div>
                <div class="step-item__icon">
                    <span class="material-icons-round">{{ $step['icon'] }}</span>
                </div>
                <h4 class="step-item__title">{{ $step['title'] }}</h4>
                <p class="step-item__desc">{{ $step['desc'] }}</p>
                @if($i < count($steps) - 1)
                    <div class="step-item__connector"></div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     WHO CAN BENEFIT
══════════════════════════════════════ -->
<section class="section">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <div class="section-badge">Who We Serve</div>
            <h2 class="section-title">Built for <span class="text-gradient">Every Business</span></h2>
        </div>

        <div class="audience-grid" data-animate="stagger">
            @php
            $audience = [
                ['icon' => 'factory',          'label' => 'Manufacturers'],
                ['icon' => 'local_shipping',   'label' => 'Traders & Distributors'],
                ['icon' => 'miscellaneous_services','label' => 'Service Providers'],
                ['icon' => 'rocket_launch',    'label' => 'MSMEs & Startups'],
                ['icon' => 'account_balance',  'label' => 'Government Departments'],
                ['icon' => 'corporate_fare',   'label' => 'PSUs'],
                ['icon' => 'school',           'label' => 'Schools & Institutions'],
            ];
            @endphp
            @foreach($audience as $a)
            <div class="audience-card">
                <span class="material-icons-round">{{ $a['icon'] }}</span>
                <span>{{ $a['label'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     TESTIMONIAL PREVIEW
══════════════════════════════════════ -->
<section class="section section--alt">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <div class="section-badge">Testimonials</div>
            <h2 class="section-title">Trusted by <span class="text-gradient">Clients Across India</span></h2>
        </div>

        <div class="testi-preview" data-animate="stagger">
            @php
            $previews = [
                ['q' => 'Professional and transparent service. Our GeM registration was completed smoothly without any hassle.', 'name' => 'Rajesh Kumar', 'role' => 'Manufacturer, Bengaluru', 'av' => 'RK', 'color' => 'emerald'],
                ['q' => 'Excellent guidance in tender participation. The team\'s expertise helped us win our first government contract.', 'name' => 'Priya Sharma', 'role' => 'Service Provider, Mumbai', 'av' => 'PS', 'color' => 'blue'],
                ['q' => 'Our school needed GeM buyer registration help. The process was handled efficiently with clear guidance.', 'name' => 'St. Mary\'s School', 'role' => 'Educational Institution, Karnataka', 'av' => 'SM', 'color' => 'violet'],
            ];
            @endphp
            @foreach($previews as $t)
            <div class="testi-card">
                <div class="testi-card__stars">
                    @for($i=0;$i<5;$i++) <span class="material-icons-round">star</span> @endfor
                </div>
                <p class="testi-card__quote">"{{ $t['q'] }}"</p>
                <div class="testi-card__author">
                    <div class="testi-card__avatar testi-card__avatar--{{ $t['color'] }}">{{ $t['av'] }}</div>
                    <div>
                        <strong>{{ $t['name'] }}</strong>
                        <small>{{ $t['role'] }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="section-cta" data-animate="fade-up">
            <a href="{{ route('testimonials') }}" class="btn btn--lg btn--outline">Read All Testimonials</a>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════
     CTA BANNER
══════════════════════════════════════ -->
<section class="cta-banner" data-animate="fade-up">
    <div class="cta-banner__orb cta-banner__orb--1"></div>
    <div class="cta-banner__orb cta-banner__orb--2"></div>
    <div class="container cta-banner__inner">
        <h2 class="cta-banner__title">Ready to Start Selling or Buying on GeM?</h2>
        <p class="cta-banner__subtitle">Let our experts guide you through a smooth, compliant, and successful process.</p>
        <div class="cta-banner__actions">
            <a href="{{ route('contact') }}" class="btn btn--lg btn--white">
                <span class="material-icons-round">calendar_month</span>
                Book Free Consultation
            </a>
            <a href="tel:+91XXXXXXXXXX" class="btn btn--lg btn--glass-white">
                <span class="material-icons-round">phone</span>
                Call a GeM Expert
            </a>
        </div>
    </div>
</section>

@endsection
