@extends('front.layouts.master')

@section('title','IYMUN 2026 | International Youth Diplomacy Conference - New York')
@section('content')
<!-- ==================== HERO SECTION ==================== -->
<div class="hero-wrapper">
    <!-- Background Slider -->
    <div class="hero-slider">
        <div class="hero-slide active"
            style="background-image: url('https://images.unsplash.com/photo-1725618878496-233974f2fd59?w=1920&q=80');">
        </div>
        <div class="hero-slide"
            style="background-image: url('https://images.unsplash.com/photo-1673296634599-ad02e65600ff?w=1920&q=80');">
        </div>

        <div class="hero-slide"
            style="background-image: url('https://images.unsplash.com/photo-1572536977487-697d036fa442?w=1920&q=80');">
        </div>
    </div>

    <!-- Overlay -->
    <div class="hero-overlay"></div>

    <!-- Content -->
    <div class="hero-content">
        <div class="hero-badge fade-in-up">
            🌍 International Youth Diplomacy Conference
        </div>

        <h1 class="hero-title fade-in-up">
            Where Future Diplomats<br>
            Shape <span class="gradient-text">Global Dialogue</span>
        </h1>

        <p class="hero-subtitle fade-in-up">
            IYMUN & American Diplomats Model United Nations
        </p>

        <div class="hero-location fade-in-up">
            <span>📍 New York City, USA</span>
            <span>🗓️ October 2026</span>
        </div>

        <div class="hero-buttons fade-in-up">
            <a href="registration.html" class="btn-primary-custom">
                Register Now
                <i class="fas fa-arrow-right"></i>
            </a>
            <a href="pricing.html" class="btn-secondary-custom">
                View Packages
                <i class="fas fa-ticket-alt"></i>
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
    </div>
</div>

<!-- ==================== HIGHLIGHTS SECTION ==================== -->
<section class="section"
    style="background: linear-gradient(135deg, #ffffff 0%, #e9e9e9 100%); padding: 120px 0; position: relative; overflow: hidden;">
    <!-- Animated Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1;">
        <div
            style="position: absolute; top: 20%; left: 10%; width: 300px; height: 300px; background: white; border-radius: 50%; filter: blur(80px);">
        </div>
        <div
            style="position: absolute; bottom: 20%; right: 10%; width: 400px; height: 400px; background: white; border-radius: 50%; filter: blur(100px);">
        </div>
    </div>

    <div class="container" style="position: relative; z-index: 2;">
        <h2 class="section-title" data-aos="fade-up">Conference Highlights</h2>
        <p class=" text-center mb-5 section-subtitle"
            style="max-width: 700px; margin-left: auto; margin-right: auto; opacity: 0.95;" data-aos="fade-up"
            data-aos-delay="100">
            Experience world-class diplomacy, leadership development, and international networking in the heart of New
            York City
        </p>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom text-center"
                    style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 2px solid rgba(255, 215, 0, 0.3); transform: perspective(1000px); transition: all 0.4s ease;">
                    <div
                        style="background: linear-gradient(135deg, #FFD700, #FFA500); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);">
                        <span style="font-size: 2.5rem;">🌍</span>
                    </div>
                    <h3 class="card-title">Global Network</h3>
                    <p class="card-text">Connect with youth leaders from 50+ countries across 6 continents</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom text-center"
                    style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 2px solid rgba(74, 144, 226, 0.3);">
                    <div
                        style="background: linear-gradient(135deg, #4A90E2, #0A72B5); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(74, 144, 226, 0.4);">
                        <span style="font-size: 2.5rem;">🎓</span>
                    </div>
                    <h3 class="card-title">Expert Mentorship</h3>
                    <p class="card-text">Learn from American diplomats and UN professionals</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card-custom text-center"
                    style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 2px solid rgba(16, 185, 129, 0.3);">
                    <div
                        style="background: linear-gradient(135deg, #10B981, #34D399); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);">
                        <span style="font-size: 2.5rem;">🏛️</span>
                    </div>
                    <h3 class="card-title">UN Headquarters</h3>
                    <p class="card-text">Exclusive visit to the United Nations complex in NYC</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="card-custom text-center"
                    style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 2px solid rgba(239, 68, 68, 0.3);">
                    <div
                        style="background: linear-gradient(135deg, #EF4444, #F87171); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(239, 68, 68, 0.4);">
                        <span style="font-size: 2.5rem;">🏆</span>
                    </div>
                    <h3 class="card-title">Certificates</h3>
                    <p class="card-text">Official recognition from IYMUN and American Diplomats</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== WHY NEW YORK - PARALLAX ==================== -->
<section class="parallax-section section"
    style="background-image: url('https://images.unsplash.com/photo-1518391846015-55a9cc003b25?w=1920&q=80');">
    <div class="parallax-overlay"></div>
    <div class="container parallax-content">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 text-white" data-aos="fade-right">
                <h2 class="display-3 fw-bold mb-4">Why New York City? 🗽</h2>
                <p class="lead mb-4" style="font-size: 1.4rem;">
                    New York City isn't just a location—it's the epicenter of global diplomacy, culture, and innovation.
                </p>

                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-start p-4 rounded-4"
                            style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                            <div class="me-3" style="font-size: 3rem;">🏛️</div>
                            <div>
                                <h5 class="fw-bold mb-2">Visit the UN Headquarters</h5>
                                <p class="mb-0" style="opacity: 0.9;">Experience where world leaders shape history</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex align-items-start p-4 rounded-4"
                            style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                            <div class="me-3" style="font-size: 3rem;">🌆</div>
                            <div>
                                <h5 class="fw-bold mb-2">Cultural Melting Pot</h5>
                                <p class="mb-0" style="opacity: 0.9;">800+ languages spoken in the world's most diverse
                                    city</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex align-items-start p-4 rounded-4"
                            style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                            <div class="me-3" style="font-size: 3rem;">🎯</div>
                            <div>
                                <h5 class="fw-bold mb-2">Networking Capital</h5>
                                <p class="mb-0" style="opacity: 0.9;">Connect in the financial and diplomatic hub of the
                                    world</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="text-center text-white p-5 rounded-4"
                    style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                    <div style="font-size: 8rem; margin-bottom: 1rem;">🗽</div>
                    <h3 class="display-5 fw-bold mb-3">The City That Never Sleeps</h3>
                    <p class="lead" style="opacity: 0.9;">
                        From Wall Street to the UN, Times Square to Central Park—an unmatched backdrop for your
                        diplomatic journey.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== STATS SECTION ==================== -->
<section class="section section-dark">
    <div class="container">
        <h2 class="display-4 fw-bold text-center mb-3" data-aos="fade-up">By the Numbers</h2>
        <p class="text-center mb-5 lead" style="opacity: 0.9;" data-aos="fade-up" data-aos-delay="100">
            Making a global impact through youth diplomacy
        </p>

        <div class="row g-4 text-center">
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="stats-card">
                    <div class="counter" data-target="50">0</div>
                    <h5>Countries</h5>
                    <p style="opacity: 0.8; margin: 0;">Represented</p>
                </div>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="stats-card">
                    <div class="counter" data-target="2000">0</div>
                    <h5>Delegates</h5>
                    <p style="opacity: 0.8; margin: 0;">Expected</p>
                </div>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="stats-card">
                    <div class="counter" data-target="2">0</div>
                    <h5>Committees</h5>
                    <p style="opacity: 0.8; margin: 0;">UNGA & PBC</p>
                </div>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="500">
                <div class="stats-card">
                    <div class="counter" data-target="3">0</div>
                    <h5>Days</h5>
                    <p style="opacity: 0.8; margin: 0;">Of Excellence</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
