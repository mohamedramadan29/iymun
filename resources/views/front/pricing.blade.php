@extends('front.layouts.master')

@section('title','Pricing & Packages | IYADMUN 2026 - Affordable Excellence')
@section('css')

<style>
    /* Modern Pricing Cards */
    .pricing-card-ultimate {
        background: white;
        border-radius: 30px;
        padding: 3rem;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        border: 3px solid transparent;
        height: 100%;
    }

    /* .pricing-card-ultimate::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(74, 144, 226, 0.1) 0%, transparent 70%);
        opacity: 0;
        transition: opacity 0.5s;
    } */

    .pricing-card-ultimate:hover::before {
        opacity: 1;
        animation: rotate 3s linear infinite;
    }

    @keyframes rotate {
        to {
            transform: rotate(360deg);
        }
    }

    .pricing-card-ultimate:hover {
        transform: translateY(-20px) scale(1.02);
        box-shadow: 0 35px 90px rgba(74, 144, 226, 0.3);
        border-color: #4A90E2;
    }

    /* Featured Card */
    .pricing-card-featured {
        border-color: #FFD700 !important;
        transform: scale(1.05);
        z-index: 10;
    }

    .pricing-card-featured:hover {
        transform: translateY(-20px) scale(1.07);
    }

    .featured-badge {
        position: absolute;
        top: 5px;
        right: 30px;
        background: linear-gradient(135deg, #EF4444, #F87171);
        color: white;
        padding: 0.6rem 2rem;
        border-radius: 30px;
        font-weight: 800;
        font-size: 0.9rem;
        box-shadow: 0 10px 30px rgba(239, 68, 68, 0.4);
        animation: bounce 2s infinite;
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    /* VIP Badge */
    .vip-badge {
        position: absolute;
        top: 5px;
        right: 30px;
        background: linear-gradient(135deg, #8B5CF6, #A78BFA);
        color: white;
        padding: 0.6rem 2rem;
        border-radius: 30px;
        font-weight: 800;
        font-size: 0.9rem;
        box-shadow: 0 10px 30px rgba(139, 92, 246, 0.4);
    }

    /* USA Flag Badge */
    .usa-badge {
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%);
        background: linear-gradient(135deg, #1D4ED8, #3B82F6);
        color: white;
        padding: 0.6rem 2rem;
        border-radius: 30px;
        font-weight: 800;
        font-size: 0.9rem;
        box-shadow: 0 10px 30px rgba(29, 78, 216, 0.4);
    }

    /* Package Header */
    .package-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .package-name {
        font-size: 1.8rem;
        font-weight: 800;
        color: var(--un-blue-dark);
        margin-bottom: 1rem;
    }

    .package-price {
        font-size: 4.5rem;
        font-weight: 900;
        color: var(--un-blue);
        line-height: 1;
        margin-bottom: 0.5rem;
    }

    .featured-price {
        background: linear-gradient(135deg, #FFD700, #FFA500);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .vip-price {
        background: linear-gradient(135deg, #8B5CF6, #A78BFA);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .usa-price {
        background: linear-gradient(135deg, #1D4ED8, #3B82F6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .package-period {
        color: var(--gray);
        font-size: 1rem;
        font-weight: 600;
    }

    /* Features List */
    .features-list {
        list-style: none;
        padding: 0;
        margin: 2rem 0;
    }

    .features-list li {
        padding: 0.6rem 0;
        font-size: 1rem;
        display: flex;
        align-items: center;
        transition: all 0.3s;
    }

    .features-list li:hover {
        padding-left: 0.5rem;
    }

    .features-list .included {
        color: #10B981;
    }

    .features-list .included::before {
        content: '✓';
        width: 20px;
        height: 20px;
        background: #10B981;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 900;
        margin-right: 1rem;
        font-size: .7rem;
    }

    .features-list .excluded {
        color: #EF4444;
        opacity: 0.6;
    }

    .features-list .excluded::before {
        content: '✗';
        width: 20px;
        height: 20px;
        background: #EF4444;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 900;
        margin-right: 1rem;
        font-size: .7rem;
    }

    /* Section Headers */
    .section-header-features {
        font-size: 1.3rem;
        font-weight: 800;
        margin: 2rem 0 1rem;
        color: var(--un-blue-dark);
        padding-bottom: 0.5rem;
        border-bottom: 3px solid #4A90E2;
    }

    .section-header-excluded {
        font-size: 1.3rem;
        font-weight: 800;
        margin: 2rem 0 1rem;
        color: var(--un-blue-dark);
        padding-bottom: 0.5rem;
        border-bottom: 3px solid #EF4444;
    }

    /* CTA Button */
    .btn-select-package {
        width: 100%;
        padding: 1.2rem;
        font-size: 1.2rem;
        font-weight: 800;
        border-radius: 50px;
        border: none;
        background: linear-gradient(135deg, #4A90E2, #0A72B5);
        color: white;
        transition: all 0.3s;
        box-shadow: 0 10px 30px rgba(74, 144, 226, 0.3);
        text-decoration: none;
        display: block;
        text-align: center;
    }

    .btn-select-package:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(74, 144, 226, 0.5);
        color: white;
    }

    .btn-select-featured {
        background: linear-gradient(135deg, #FFD700, #FFA500);
    }

    .btn-select-vip {
        background: linear-gradient(135deg, #8B5CF6, #A78BFA);
    }

    .btn-select-usa {
        background: linear-gradient(135deg, #1D4ED8, #3B82F6);
    }

    /* USA Package Special */
    .usa-package-card {
        border: 4px solid #1D4ED8 !important;
        background: linear-gradient(135deg, rgba(29, 78, 216, 0.05), rgba(59, 130, 246, 0.02));
    }

    .usa-note {
        background: rgba(29, 78, 216, 0.1);
        border-left: 5px solid #1D4ED8;
        padding: 1.5rem;
        border-radius: 15px;
        margin-top: 2rem;
        font-size: 0.95rem;
        line-height: 1.8;
    }

    /* Comparison Table */
    .comparison-table {
        background: white;
        border-radius: 30px;
        padding: 3rem;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        margin-top: 5rem;
    }

    /* Hero Background */
    .hero-pricing {
        position: relative;
        background: linear-gradient(135deg, #0a1128 0%, #001F3F 50%, #0A72B5 100%);
        padding: 8rem 0 4rem;
        overflow: hidden;
    }

    .hero-pricing::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 800px;
        height: 800px;
        background: radial-gradient(circle, rgba(255, 215, 0, 0.1) 0%, transparent 70%);
        border-radius: 50%;
        animation: float 15s infinite ease-in-out;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) translateX(0);
        }

        50% {
            transform: translateY(-100px) translateX(-50px);
        }
    }

    /* Save Badge */
    .save-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: #10B981;
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        font-weight: 700;
        font-size: 0.9rem;
        box-shadow: 0 5px 20px rgba(16, 185, 129, 0.4);
    }
</style>
@endsection
@section('content')
<!-- ==================== PAGE HERO ==================== -->
<section class="hero-wrapper" style="height: 70vh; min-height: 500px;">
    <div class="hero-slider">
        <div class="hero-slide active"
            style="background-image: url('https://images.unsplash.com/photo-1554224311-beee4ece91fa?w=1920&q=80');">
        </div>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-badge fade-in-up">
            Investment in Your Future
        </div>

        <h1 class="hero-title fade-in-up">
            Pricing <span class="gradient-text"> & Packages </span>
        </h1>

        <p class="hero-subtitle fade-in-up" style="max-width: 900px; margin: 0 auto;">
            Transparent pricing with clear inclusions and exclusions
        </p>
    </div>

    <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
    </div>
</section>
<!-- ==================== PRICING CARDS ==================== -->
<section class="section section-light" style="margin-top: -4rem;">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Choose Your Package</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                All packages include UN HQ visit, certificates, and lifetime access to IYADMUN alumni network
            </p>
        </div>


        <!-- Main Packages Row -->
        <div class="row g-4 mb-5">

            @foreach ($packages as $package)
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card-ultimate">
                    <div class="save-badge" style="background:{{ $package->color }}">{{ $package->getTranslation('slogan',app()->getLocale()) }}!</div>

                    <div class="package-header">
                        <h3 class="package-name">{{ $package->getTranslation('title',app()->getLocale()) }}</h3>
                        <div class="package-price" style="color:{{ $package->color }}"> $ {{ $package->price }}</div>
                        <p class="package-period"> {{ \Carbon\Carbon::parse($package->from_date)->format('F j') }} – {{
                            \Carbon\Carbon::parse($package->to_date)->format('F j') }} </p>
                    </div>

                    <div class="section-header-features">✓ What's Included</div>
                    <ul class="features-list">
                        @php
                        $features = explode('#', $package->features);
                        @endphp
                        @foreach ($features as $feature)
                        <li class="included">{{ $feature }}</li>
                        @endforeach
                    </ul>

                    {{-- <div class="section-header-excluded">✗ What's NOT Included</div>
                    <ul class="features-list">
                        <li class="excluded">Accommodation (hotel/housing)</li>
                        <li class="excluded">Meals outside conference venue</li>
                        <li class="excluded">Travel & transportation</li>
                        <li class="excluded">Visa application fees</li>
                        <li class="excluded">Personal expenses</li>
                    </ul> --}}

                    <form action="{{ route('user.payment') }}">
                        <input type="hidden" name="package_id" value="{{ $package->id }}">
                        <input type="hidden" name="package_name" value="{{ $package->getTranslation('title',app()->getLocale()) }}">
                        <input type="hidden" name="package_price" value="{{ $package->price }}">
                        <button type="submit" class="btn-select-package mt-4" style="background: {{ $package->color }}">
                            Select Package
                            <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </form>

                </div>
            </div>
            @endforeach

            <!-- Early Bird Package -->
            {{-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing-card-ultimate" >
                    <div class="save-badge">Save Now!</div>

                    <div class="package-header">
                        <h3 class="package-name">Early Bird</h3>
                        <div class="package-price">$950</div>
                        <p class="package-period">February 1 – September 30</p>
                    </div>

                    <div class="section-header-features">✓ What's Included</div>
                    <ul class="features-list">
                        <li class="included">Full conference access (3 days)</li>
                        <li class="included">Committee participation</li>
                        <li class="included">Opening & closing ceremonies</li>
                        <li class="included">Official certificate of participation</li>
                        <li class="included">Conference materials & delegate kit</li>
                        <li class="included">Networking events & social activities</li>
                        <li class="included">Professional photography</li>
                        <li class="included">Digital delegate handbook</li>
                    </ul>

                    <div class="section-header-excluded">✗ What's NOT Included</div>
                    <ul class="features-list">
                        <li class="excluded">Accommodation (hotel/housing)</li>
                        <li class="excluded">Meals outside conference venue</li>
                        <li class="excluded">Travel & transportation</li>
                        <li class="excluded">Visa application fees</li>
                        <li class="excluded">Personal expenses</li>
                    </ul>

                    <form action="{{ route('user.payment') }}">
                        <input type="hidden" name="package" value="1">
                        <button type="submit" class="btn-select-package mt-4">
                            Select Package
                            <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </form>

                </div>
            </div> --}}

            <!-- Regular Registration (Most Popular) -->
            {{-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing-card-ultimate pricing-card-featured">
                    <div class="featured-badge">🔥 MOST POPULAR</div>

                    <div class="package-header">
                        <h3 class="package-name">Regular Registration</h3>
                        <div class="package-price featured-price">$1,100</div>
                        <p class="package-period">February 1 – September 30</p>
                    </div>

                    <div class="section-header-features">✓ What's Included</div>
                    <ul class="features-list">
                        <li class="included">Full conference access (3 days)</li>
                        <li class="included">Committee participation</li>
                        <li class="included">Opening & closing ceremonies</li>
                        <li class="included">Official certificate of participation</li>
                        <li class="included">Conference materials & delegate kit</li>
                        <li class="included">Networking events & social activities</li>
                        <li class="included">Professional photography</li>
                        <li class="included">Digital delegate handbook</li>
                    </ul>

                    <div class="section-header-excluded">✗ What's NOT Included</div>
                    <ul class="features-list">
                        <li class="excluded">Accommodation (hotel/housing)</li>
                        <li class="excluded">Meals outside conference venue</li>
                        <li class="excluded">Travel & transportation</li>
                        <li class="excluded">Visa application fees</li>
                        <li class="excluded">Personal expenses</li>
                    </ul>

                    <a href="registration.html" class="btn-select-package btn-select-featured mt-4">
                        Select Package
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div> --}}

            <!-- VIP Registration -->
            {{-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="pricing-card-ultimate">
                    <div class="vip-badge">💎 PREMIUM</div>

                    <div class="package-header">
                        <h3 class="package-name">VIP Registration</h3>
                        <div class="package-price vip-price">$2,000</div>
                        <p class="package-period">February 1 – August 30</p>
                    </div>

                    <div class="section-header-features">✓ What's Included</div>
                    <ul class="features-list">
                        <li class="included">Full conference access (3 days)</li>
                        <li class="included">Committee participation</li>
                        <li class="included">Opening & closing ceremonies</li>
                        <li class="included">Official certificate of participation</li>
                        <li class="included">Conference materials & delegate kit</li>
                        <li class="included">Networking events & social activities</li>
                        <li class="included">Professional photography</li>
                        <li class="included">Digital delegate handbook</li>
                    </ul>

                    <div class="section-header-excluded">✗ What's NOT Included</div>
                    <ul class="features-list">
                        <li class="excluded">Meals outside conference venue</li>
                        <li class="excluded">Travel & transportation</li>
                        <li class="excluded">Visa application fees</li>
                        <li class="excluded">Personal expenses</li>
                    </ul>

                    <a href="registration.html" class="btn-select-package btn-select-vip mt-4">
                        Select Package
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div> --}}
        </div>

        <!-- USA Residents Package -->
        {{-- <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="400">
                <div class="pricing-card-ultimate usa-package-card">
                    <div class="usa-badge">🇺🇸 USA RESIDENTS</div>

                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-4 mb-md-0">
                            <h3 class="package-name mb-3">USA Residents Package</h3>
                            <div class="package-price usa-price">$350</div>
                            <p class="package-period">All registration periods</p>
                        </div>

                        <div class="col-md-7">
                            <div class="section-header-features">✓ Included</div>
                            <ul class="features-list">
                                <li class="included">Full conference access</li>
                                <li class="included">All conference materials</li>
                                <li class="included">Certificate of participation</li>
                                <li class="included">Networking events</li>
                            </ul>

                            <div class="section-header-excluded">✗ Not Included</div>
                            <ul class="features-list">
                                <li class="excluded">Accommodation</li>
                                <li class="excluded">Meals</li>
                                <li class="excluded">Transportation</li>
                                <li class="excluded">Personal expenses</li>
                            </ul>
                        </div>
                    </div>

                    <div class="usa-note">
                        <strong><i class="fas fa-info-circle me-2"></i>Note:</strong>
                        Valid US residency documentation required during registration. This package is available to all
                        delegates currently residing in the United States.
                    </div>

                    <a href="registration.html" class="btn-select-package btn-select-usa mt-4">
                        Select Package
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div> --}}

    </div>
</section>




<!-- ==================== WHAT'S INCLUDED ==================== -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up"> Important Information </h2>
            {{-- <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                Your registration fee covers everything you need for success
            </p> --}}
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;"> 🏨 </div>
                    <h4 class="card-title">Accommodation</h4>
                    <p class="card-text"> Delegates are responsible for arranging their own accommodation. We can
                        provide recommendations for hotels near the conference venue. </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;"> ✈️ </div>
                    <h4 class="card-title"> Travel & Transportation. </h4>
                    <p class="card-text"> All travel costs including flights, local transportation, and airport
                        transfers are the delegate's responsibility. </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;"> 📋 </div>
                    <h4 class="card-title"> Visa Support </h4>
                    <p class="card-text"> We provide invitation letters for visa applications, but visa fees and
                        application processes are the delegate's responsibility. </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;"> 🍽️ </div>
                    <h4 class="card-title"> Meals </h4>
                    <p class="card-text"> Lunch during conference days is included. Breakfast, dinner, and meals outside
                        conference hours are not included. </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;"> 💳 </div>
                    <h4 class="card-title"> Payment </h4>
                    <p class="card-text"> Full payment is required to confirm registration. We accept bank transfers and
                        major credit cards. See Payment page for details. </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;"> 🔄 </div>
                    <h4 class="card-title"> Refund Policy </h4>
                    <p class="card-text"> All fees paid for IYADMUN New York 2026 registration are non-refundable. This
                        includes all registration packages. See Terms & Conditions for full policy. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== FAQ PRICING ==================== -->
{{-- <section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Pricing FAQs</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="pricingFAQ">
                    <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm" data-aos="fade-up"
                        data-aos-delay="200">
                        <h2 class="accordion-header">
                            <button class="accordion-button rounded-4 fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1">
                                When does the early bird discount end?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.8;">
                                Early bird pricing ends on <strong>July 31, 2026</strong>. After this date, regular
                                prices apply. Register now to save up to $350!
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm" data-aos="fade-up"
                        data-aos-delay="300">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded-4 fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq2">
                                Is accommodation included in the price?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.8;">
                                Accommodation is <strong>not included</strong> but we provide a list of recommended
                                hotels with special IYADMUN rates. VIP package includes accommodation assistance.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm" data-aos="fade-up"
                        data-aos-delay="400">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded-4 fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq3">
                                What is your refund policy?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.8;">
                                Full refund if cancelled <strong>60+ days</strong> before event. 50% refund if cancelled
                                <strong>30-59 days</strong> before. No refund within 30 days of event.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm" data-aos="fade-up"
                        data-aos-delay="500">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed rounded-4 fw-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq4">
                                Can I upgrade my package later?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
                            <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.8;">
                                Yes! You can upgrade from Essential to Premium or VIP at any time by paying the
                                difference. Contact us for assistance.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
