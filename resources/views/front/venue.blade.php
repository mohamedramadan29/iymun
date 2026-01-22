@extends('front.layouts.master')

@section('title', 'Venue | IYMUN 2026 - International Youth Diplomacy Conference')
@section('css')
<style>
    /* Simple & Clean Design */
    .hero-simple {
        background: linear-gradient(135deg, #001F3F 0%, #0A72B5 100%);
        padding: 8rem 0 4rem;
        text-align: center;
    }

    .coming-soon-box {
        background: white;
        border-radius: 20px;
        padding: 4rem 3rem;
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        text-align: center;
        border: 3px solid #FFD700;
    }

    .icon-large {
        font-size: 5rem;
        margin-bottom: 2rem;
    }

    .feature-box {
        background: white;
        border-radius: 20px;
        padding: 2.5rem;
        text-align: center;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.3s;
        height: 100%;
    }

    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(74, 144, 226, 0.2);
    }

    .feature-icon {
        font-size: 4rem;
        margin-bottom: 1.5rem;
    }

    .why-nyc-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.3s;
        height: 100%;
    }

    .why-nyc-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 50px rgba(74, 144, 226, 0.15);
    }

    .why-icon {
        font-size: 3.5rem;
        margin-bottom: 1rem;
    }

    .contact-box {
        background: linear-gradient(135deg, #4A90E2, #0A72B5);
        border-radius: 20px;
        padding: 3rem;
        color: white;
        text-align: center;
    }

    .contact-item {
        margin-bottom: 1rem;
    }

    .contact-item a {
        color: white;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
    }

    .contact-item a:hover {
        color: #FFD700;
    }
</style>
@endsection
@section('content')

<!-- ==================== PAGE HERO ==================== -->
<section class="hero-wrapper" style="height: 70vh; min-height: 500px;">
    <div class="hero-slider">
        <div class="hero-slide active"
            style="background-image: url('{{ asset('assets/uploads/content/venue/'.$content->hero_image) }}?w=1920&q=80');">
        </div>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-badge fade-in-up">
            {{ $content->getTranslation('hero_title',app()->getLocale()) }}
        </div>

        <h1 class="hero-title fade-in-up" style="font-size: 4rem;">
            {{ $content->getTranslation('hero_sub_title',app()->getLocale()) }} <span class="gradient-text"> {{
                $content->getTranslation('hero_color_title',app()->getLocale()) }} </span>
        </h1>

        <p class="hero-subtitle fade-in-up" style="max-width: 900px; margin: 0 auto;">
            {{ $content->getTranslation('hero_description',app()->getLocale()) }}
        </p>
    </div>

    <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- ==================== COMING SOON ==================== -->
<section class="section section-light" style="padding-top: 5rem;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="coming-soon-box" data-aos="zoom-in">
                    <div class="icon-large">🗽</div>
                    <h2 class="display-4 fw-bold mb-4" style="color: var(--un-blue-dark);">
                        {{ $content->getTranslation('coming_soon_title',app()->getLocale()) }}
                    </h2>
                    <p class="lead mb-0" style="color: var(--gray); font-size: 1.3rem; line-height: 1.9;">
                        {{ $content->getTranslation('coming_soon_p1',app()->getLocale()) }}
                    </p>
                    <hr class="my-4" style="opacity: 0.2;">
                    <p style="color: var(--gray); font-size: 1.1rem; line-height: 1.8;">
                        {{ $content->getTranslation('coming_soon_p2',app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== VENUE HIGHLIGHTS ==================== -->
<section class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-box">
                    <div class="feature-icon">🏛️</div>
                    <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{
                        $content->getTranslation('adv_title1',app()->getLocale()) }} </h3>
                    <p style="font-size: 1.1rem; color: var(--gray); line-height: 1.8;">
                        {{ $content->getTranslation('adv_p1',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <div class="feature-icon">🎤</div>
                    <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{
                        $content->getTranslation('adv_title2',app()->getLocale()) }} </h3>
                    <p style="font-size: 1.1rem; color: var(--gray); line-height: 1.8;">
                        {{ $content->getTranslation('adv_p3',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box">
                    <div class="feature-icon">🚇</div>
                    <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{
                        $content->getTranslation('adv_title3',app()->getLocale()) }} </h3>
                    <p style="font-size: 1.1rem; color: var(--gray); line-height: 1.8;">
                        {{ $content->getTranslation('adv_p3',app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== WHY NEW YORK CITY ==================== -->
<section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-3" data-aos="fade-up" style="color: var(--un-blue-dark);">
                {{ $content->getTranslation('why_title',app()->getLocale()) }}
            </h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100" style="color: var(--gray);">
                {{ $content->getTranslation('why_p1',app()->getLocale()) }}
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="why-nyc-card">
                    <div class="why-icon">🗽</div>
                    <h4 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('why_title_point1',app()->getLocale()) }} </h4>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: var(--gray);">
                        {{ $content->getTranslation('why_p_point1',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="why-nyc-card">
                    <div class="why-icon">🏛️</div>
                    <h4 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('why_title_point2',app()->getLocale()) }} </h4>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: var(--gray);">
                        {{ $content->getTranslation('why_p_point2',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="why-nyc-card">
                    <div class="why-icon">🌍</div>
                    <h4 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('why_title_point3',app()->getLocale()) }} </h4>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: var(--gray);">
                        {{ $content->getTranslation('why_p_point3',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="why-nyc-card">
                    <div class="why-icon">🎭</div>
                    <h4 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('why_title_point4',app()->getLocale()) }} </h4>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: var(--gray);">
                        {{ $content->getTranslation('why_p_point4',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="why-nyc-card">
                    <div class="why-icon">🍕</div>
                    <h4 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('why_title_point5',app()->getLocale()) }} </h4>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: var(--gray);">
                        {{ $content->getTranslation('why_p_point5',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="why-nyc-card">
                    <div class="why-icon">💼</div>
                    <h4 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('why_title_point6',app()->getLocale()) }} </h4>
                    <p style="font-size: 1.05rem; line-height: 1.8; color: var(--gray);">
                        {{ $content->getTranslation('why_p_point6',app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== STAY UPDATED ==================== -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-box" data-aos="zoom-in">
                    <h2 class="display-5 fw-bold mb-4">
                        📧 Stay Updated
                    </h2>
                    <p class="lead mb-5" style="opacity: 0.95; font-size: 1.3rem;">
                        Want to be notified when venue details are announced? Contact us to stay in the loop!
                    </p>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="contact-item">
                                <h5 class="fw-bold mb-3">📧 Email</h5>
                                <p class="mb-2">
                                    <a href="mailto:info@iymun.net">info@iymun.net</a>
                                </p>
                                <p class="mb-0">
                                    <a href="mailto:cos@ihrc-hq.org">cos@ihrc-hq.org</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-item">
                                <h5 class="fw-bold mb-3">💬 WhatsApp</h5>
                                <p class="mb-2">
                                    <a href="https://wa.me/19175130904">+1 (917) 513-0904</a>
                                </p>
                                <p class="mb-0">
                                    <a href="https://wa.me/333444666862">+33 (344) 466-6862</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <a href="contact.html" class="btn btn-lg rounded-pill px-5 py-3"
                            style="background: white; color: #0A72B5; font-weight: 800;">
                            Contact Us Now
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
