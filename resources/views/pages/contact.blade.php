@extends('layouts.app')

@section('title', 'Contact Us — GeM Consultancy')
@section('meta_desc', 'Get in touch with GeM Consultancy for a free consultation. We are here to help you with all your GeM registration, tender, and compliance needs.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero__orb page-hero__orb--1"></div>
    <div class="page-hero__orb page-hero__orb--2"></div>
    <div class="container page-hero__inner">
        <div class="page-hero__breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span class="material-icons-round">chevron_right</span>
            <span>Contact</span>
        </div>
        <h1 class="page-hero__title" data-animate="fade-up">Get In <span class="text-gradient">Touch</span></h1>
        <p class="page-hero__subtitle" data-animate="fade-up">
            Book your free consultation today. Our GeM experts will respond within 24 hours.
        </p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="section">
    <div class="container">

        {{-- Success message --}}
        @if(session('success'))
        <div class="alert alert--success" data-animate="fade-up">
            <span class="material-icons-round">check_circle</span>
            <div>
                <strong>Message Sent!</strong>
                <p>{{ session('success') }}</p>
            </div>
            <button onclick="this.parentElement.remove()" class="alert__close">
                <span class="material-icons-round">close</span>
            </button>
        </div>
        @endif

        <div class="contact-layout" data-animate="stagger">

            <!-- LEFT: Info -->
            <div class="contact-info">
                <div class="section-badge">Contact Us</div>
                <h2 class="section-title" style="text-align:left;margin-bottom:1.5rem;">
                    Let's Start Your <span class="text-gradient">GeM Journey</span>
                </h2>
                <p style="color:var(--text-secondary);margin-bottom:2.5rem;line-height:1.8;">
                    Whether you're a manufacturer, trader, school, or startup — we have the right GeM solution for you.
                    Reach out and our experts will guide you from day one.
                </p>

                <div class="contact-info__items">
                    <div class="contact-info__item">
                        <div class="contact-info__icon contact-info__icon--emerald">
                            <span class="material-icons-round">phone</span>
                        </div>
                        <div>
                            <strong>Call Us</strong>
                            <a href="tel:+91XXXXXXXXXX">+91-XXXXXXXXXX</a>
                            <small>Mon–Sat, 9am–6pm IST</small>
                        </div>
                    </div>
                    <div class="contact-info__item">
                        <div class="contact-info__icon contact-info__icon--blue">
                            <span class="material-icons-round">email</span>
                        </div>
                        <div>
                            <strong>Email Us</strong>
                            <a href="mailto:info@gemconsultpro.in">info@gemconsultpro.in</a>
                            <small>Response within 24 hours</small>
                        </div>
                    </div>
                    <div class="contact-info__item">
                        <div class="contact-info__icon contact-info__icon--violet">
                            <span class="material-icons-round">location_on</span>
                        </div>
                        <div>
                            <strong>Location</strong>
                            <span>Bengaluru, Karnataka</span>
                            <small>India — Serving clients nationwide</small>
                        </div>
                    </div>
                </div>

                <div class="contact-info__promise">
                    <span class="material-icons-round">shield</span>
                    <p>Your information is 100% confidential and will never be shared.</p>
                </div>
            </div>

            <!-- RIGHT: Form -->
            <div class="contact-form-wrap">
                <div class="contact-form-card">
                    <h3 class="contact-form-card__title">Book Free Consultation</h3>
                    <p class="contact-form-card__subtitle">Fill in the form and we'll get back to you within 24 hours.</p>

                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form" id="contactForm">
                        @csrf

                        <div class="form-row">
                            <div class="form-group {{ $errors->has('name') ? 'form-group--error' : '' }}">
                                <label for="name">Full Name <span class="required">*</span></label>
                                <div class="form-input-wrap">
                                    <span class="material-icons-round form-input-icon">person</span>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Your full name"
                                        value="{{ old('name') }}"
                                        class="form-input"
                                        required
                                    >
                                </div>
                                @error('name')
                                <span class="form-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group {{ $errors->has('email') ? 'form-group--error' : '' }}">
                                <label for="email">Email Address <span class="required">*</span></label>
                                <div class="form-input-wrap">
                                    <span class="material-icons-round form-input-icon">email</span>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        placeholder="your@email.com"
                                        value="{{ old('email') }}"
                                        class="form-input"
                                        required
                                    >
                                </div>
                                @error('email')
                                <span class="form-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group {{ $errors->has('phone') ? 'form-group--error' : '' }}">
                                <label for="phone">Phone Number</label>
                                <div class="form-input-wrap">
                                    <span class="material-icons-round form-input-icon">phone</span>
                                    <input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        placeholder="+91 XXXXX XXXXX"
                                        value="{{ old('phone') }}"
                                        class="form-input"
                                    >
                                </div>
                                @error('phone')
                                <span class="form-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group {{ $errors->has('service') ? 'form-group--error' : '' }}">
                                <label for="service">Service Interested In</label>
                                <div class="form-input-wrap">
                                    <span class="material-icons-round form-input-icon">category</span>
                                    <select id="service" name="service" class="form-input form-select">
                                        <option value="">Select a service...</option>
                                        <option value="GeM Seller Registration" {{ old('service') === 'GeM Seller Registration' ? 'selected' : '' }}>GeM Seller Registration</option>
                                        <option value="GeM Buyer Services" {{ old('service') === 'GeM Buyer Services' ? 'selected' : '' }}>GeM Buyer Services</option>
                                        <option value="Schools & Institutions" {{ old('service') === 'Schools & Institutions' ? 'selected' : '' }}>Schools & Institutions</option>
                                        <option value="ATL Support" {{ old('service') === 'ATL Support' ? 'selected' : '' }}>ATL Support</option>
                                        <option value="PFMS Support" {{ old('service') === 'PFMS Support' ? 'selected' : '' }}>PFMS Support</option>
                                        <option value="IP Registration" {{ old('service') === 'IP Registration' ? 'selected' : '' }}>IP Registration</option>
                                        <option value="Other" {{ old('service') === 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                                @error('service')
                                <span class="form-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('message') ? 'form-group--error' : '' }}">
                            <label for="message">Your Message <span class="required">*</span></label>
                            <div class="form-input-wrap">
                                <span class="material-icons-round form-input-icon form-input-icon--textarea">chat_bubble</span>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="5"
                                    placeholder="Tell us about your business and what you need help with..."
                                    class="form-input form-textarea"
                                    required
                                >{{ old('message') }}</textarea>
                            </div>
                            @error('message')
                            <span class="form-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn--primary btn--full btn--lg" id="submitBtn">
                            <span class="material-icons-round">send</span>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
// Simple form submit UX
document.getElementById('contactForm')?.addEventListener('submit', function() {
    const btn = document.getElementById('submitBtn');
    btn.innerHTML = '<span class="material-icons-round spin">autorenew</span> Sending...';
    btn.disabled = true;
});
</script>
@endsection
