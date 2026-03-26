@extends('layouts.app')

@section('title', 'Testimonials — GeM Consultancy')
@section('meta_desc', 'Read what our clients across India say about GeM Consultancy — real success stories from manufacturers, schools, MSMEs and service providers.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero__orb page-hero__orb--1"></div>
    <div class="page-hero__orb page-hero__orb--2"></div>
    <div class="container page-hero__inner">
        <div class="page-hero__breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span class="material-icons-round">chevron_right</span>
            <span>Testimonials</span>
        </div>
        <h1 class="page-hero__title" data-animate="fade-up">What Our <span class="text-gradient">Clients Say</span></h1>
        <p class="page-hero__subtitle" data-animate="fade-up">
            Real experiences from businesses and institutions we've helped succeed on the GeM platform.
        </p>
    </div>
</section>

<!-- STATS ROW -->
<section class="section" style="padding-bottom:0;">
    <div class="container">
        <div class="testi-stats" data-animate="stagger">
            @php
            $ts = [
                ['val' => '500+', 'lab' => 'Happy Clients', 'icon' => 'people'],
                ['val' => '98%',  'lab' => 'Satisfaction Rate', 'icon' => 'sentiment_very_satisfied'],
                ['val' => '5★',   'lab' => 'Average Rating', 'icon' => 'star'],
                ['val' => '5+',   'lab' => 'Years of Excellence', 'icon' => 'workspace_premium'],
            ];
            @endphp
            @foreach($ts as $s)
            <div class="testi-stat">
                <span class="material-icons-round">{{ $s['icon'] }}</span>
                <span class="testi-stat__val">{{ $s['val'] }}</span>
                <span class="testi-stat__lab">{{ $s['lab'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- TESTIMONIALS GRID -->
<section class="section">
    <div class="container">
        <div class="testimonials-masonry" data-animate="stagger">
            @foreach($testimonials as $t)
            <div class="testi-full-card testi-full-card--{{ $t['color'] }}">
                <div class="testi-full-card__quote-icon">
                    <span class="material-icons-round">format_quote</span>
                </div>
                <div class="testi-full-card__stars">
                    @for($i = 0; $i < $t['rating']; $i++)
                    <span class="material-icons-round">star</span>
                    @endfor
                </div>
                <p class="testi-full-card__text">"{{ $t['quote'] }}"</p>
                <div class="testi-full-card__author">
                    <div class="testi-full-card__avatar testi-full-card__avatar--{{ $t['color'] }}">
                        {{ $t['avatar'] }}
                    </div>
                    <div class="testi-full-card__info">
                        <strong>{{ $t['name'] }}</strong>
                        <span>{{ $t['role'] }}</span>
                        <span class="testi-full-card__city">
                            <span class="material-icons-round">location_on</span> {{ $t['city'] }}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ PREVIEW -->
<section class="section section--alt">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <div class="section-badge">FAQ</div>
            <h2 class="section-title">Frequently Asked <span class="text-gradient">Questions</span></h2>
        </div>
        <div class="faq-list" data-animate="stagger">
            @php
            $faqs = [
                ['q' => 'What documents are required for GeM registration?', 'a' => 'Requirements vary by business type. Typically you need PAN, Aadhaar, business registration certificate, bank details, and GST registration (if applicable). Our team will guide you through the complete documentation checklist.'],
                ['q' => 'How long does GeM seller registration take?', 'a' => 'With all documents in order, basic GeM seller registration can be completed in 3–7 working days. Brand approvals and OEM registration may take additional time depending on the category.'],
                ['q' => 'Can MSMEs register on GeM?', 'a' => 'Yes, absolutely! GeM gives significant preference to MSMEs and startups. We specialize in helping MSMEs leverage these advantages for better visibility and order success.'],
                ['q' => 'Do you assist in tender filing?', 'a' => 'Yes, we provide comprehensive bid participation and tender filing support including bid strategy, document preparation, price benchmarking, and submission assistance.'],
                ['q' => 'Is your consultancy affiliated with GeM?', 'a' => 'No. We are an independent private consultancy firm. We are not affiliated with, endorsed by, or connected to the Government of India or the official GeM portal.'],
            ];
            @endphp
            @foreach($faqs as $i => $faq)
            <div class="faq-item" data-faq="{{ $i }}">
                <button class="faq-item__question" onclick="toggleFaq({{ $i }})">
                    <span>{{ $faq['q'] }}</span>
                    <span class="material-icons-round faq-item__icon">expand_more</span>
                </button>
                <div class="faq-item__answer" id="faq-{{ $i }}">
                    <p>{{ $faq['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-banner" data-animate="fade-up">
    <div class="cta-banner__orb cta-banner__orb--1"></div>
    <div class="cta-banner__orb cta-banner__orb--2"></div>
    <div class="container cta-banner__inner">
        <h2 class="cta-banner__title">Join 500+ Satisfied Clients</h2>
        <p class="cta-banner__subtitle">Start your GeM journey today with India's trusted GeM consultancy.</p>
        <a href="{{ route('contact') }}" class="btn btn--lg btn--white">
            <span class="material-icons-round">calendar_month</span>
            Book Free Consultation
        </a>
    </div>
</section>

@endsection

@section('scripts')
<script>
function toggleFaq(index) {
    const answer = document.getElementById('faq-' + index);
    const item = document.querySelector('[data-faq="' + index + '"]');
    const isOpen = item.classList.contains('open');

    // Close all
    document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));
    document.querySelectorAll('.faq-item__answer').forEach(el => el.style.maxHeight = null);

    if (!isOpen) {
        item.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
    }
}
</script>
@endsection
