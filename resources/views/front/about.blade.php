@extends('front.layouts.master')
@section('title', 'About Us | IYMUN 2026')
@section('content')
<!-- ==================== PAGE HERO ==================== -->
<section class="hero-wrapper" style="height: 70vh; min-height: 500px;">
    <div class="hero-slider">
        <div class="hero-slide active"
            style="background-image: url('https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?w=1920&q=80');">
        </div>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-badge fade-in-up">
            {{ $content->getTranslation('hero_title',app()->getLocale()) }}
        </div>

        <h1 class="hero-title fade-in-up" style="font-size: 4rem;">
            {{ $content->getTranslation('hero_sub_title',app()->getLocale()) }}
            <span class="gradient-text"> {{ $content->getTranslation('hero_color_title',app()->getLocale()) }} </span>
        </h1>

        <p class="hero-subtitle fade-in-up" style="max-width: 800px; margin: 0 auto;">
            {{ $content->getTranslation('hero_description',app()->getLocale()) }}
        </p>
    </div>

    <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- ==================== WHO WE ARE ==================== -->
<section class="section about_who_are">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div style="position: relative;">
                    <img src="{{ asset('assets/uploads/content/about/'.$content->about_image) }}?w=800&q=80"
                        alt="Youth Leaders" class="img-fluid rounded-5 shadow-lg"
                        style="border: 5px solid rgba(10, 114, 181, 0.2);">
                    <div
                        style="position: absolute; top: -20px; right: -20px; width: 150px; height: 150px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 40px rgba(255, 215, 0, 0.4);">
                        <div class="text-center">
                            <div style="font-size: 3rem; font-weight: 900; color: white;">7th</div>
                            <div style="font-size: 0.9rem; color: white; font-weight: 600;">Edition</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="section-title mb-4">
                    {{ $content->getTranslation('about_title',app()->getLocale()) }}
                </h2>
                <p class="mb-1" style="color: var(--gray); line-height: 1.8;">
                    {{ $content->getTranslation('about_desc',app()->getLocale()) }}
                </p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-center p-2 rounded"
                            style="background: white; box-shadow: var(--shadow-md); transition: var(--transition-base); transform: translateX(0px);">
                            <div class="me-3" style="font-size: 1.5rem;">🏆</div>
                            <div>
                                <h5 class="fw-bold"> {{ $content->getTranslation('about_point1',app()->getLocale()) }}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="d-flex align-items-center p-2 rounded"
                            style="background: white; box-shadow: var(--shadow-md); transition: var(--transition-base); transform: translateX(0px);">
                            <div class="me-3" style="font-size: 1.5rem;"> 🌍 </div>
                            <div>
                                <h5 class="fw-bold"> {{ $content->getTranslation('about_point2',app()->getLocale()) }}
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        <div class="d-flex align-items-center p-2 rounded"
                            style="background: white; box-shadow: var(--shadow-md); transition: var(--transition-base); transform: translateX(0px);">
                            <div class="me-3" style="font-size: 1.5rem;"> 📚 </div>
                            <div>
                                <h5 class="fw-bold"> {{ $content->getTranslation('about_point3',app()->getLocale()) }}
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        <div class="d-flex align-items-center p-2 rounded"
                            style="background: white; box-shadow: var(--shadow-md); transition: var(--transition-base); transform: translateX(0px);">
                            <div class="me-3" style="font-size: 1.5rem;"> 🤝 </div>
                            <div>
                                <h5 class="fw-bold"> {{ $content->getTranslation('about_point4',app()->getLocale()) }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== MISSION & VISION ==================== -->
<section class="section"
    style="background: linear-gradient(135deg, #001F3F 0%, #0A72B5 100%); position: relative; overflow: hidden;">
    <!-- Background Elements -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1;">
        <div
            style="position: absolute; top: 30%; left: 15%; width: 400px; height: 400px; background: white; border-radius: 50%; filter: blur(100px);">
        </div>
        <div
            style="position: absolute; bottom: 20%; right: 10%; width: 350px; height: 350px; background: white; border-radius: 50%; filter: blur(90px);">
        </div>
    </div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="text-center mb-5">
            <h2 class="display-3 fw-bold text-white mb-3" data-aos="fade-up">
                {{ $content->getTranslation('m_section_title',app()->getLocale()) }}
            </h2>
            <p class="lead text-white" style="opacity: 0.9; max-width: 800px; margin: 0 auto;" data-aos="fade-up"
                data-aos-delay="100">
                {{ $content->getTranslation('m_section_p',app()->getLocale()) }}
            </p>
        </div>

        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <div class="p-3 rounded-5"
                    style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(20px); border: 2px solid rgba(255, 255, 255, 0.3);">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);">
                        <i class="fas fa-bullseye" style="font-size: 2.5rem; color: white;"></i>
                    </div>
                    <h3 class="display-6 fw-bold text-white mb-2"> {{
                        $content->getTranslation('mission_title',app()->getLocale()) }} </h3>
                    <p class="text-white" style="font-size: 1.15rem; line-height: 1.9; opacity: 0.95;">
                        {{ $content->getTranslation('mission_desc',app()->getLocale()) }}
                    </p>

                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                <div class="p-3 rounded-5"
                    style="background: rgba(255, 215, 0, 0.15); backdrop-filter: blur(20px); border: 2px solid rgba(255, 215, 0, 0.5);">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; box-shadow: 0 10px 30px rgba(74, 144, 226, 0.4);">
                        <i class="fas fa-eye" style="font-size: 2.5rem; color: white;"></i>
                    </div>
                    <h3 class="display-6 fw-bold text-white mb-2"> {{
                        $content->getTranslation('vission_title',app()->getLocale()) }} </h3>
                    <p class="text-white" style="font-size: 1.15rem; line-height: 1.9; opacity: 0.95;">
                        {{ $content->getTranslation('vission_desc',app()->getLocale()) }}
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CORE VALUES ==================== -->
<section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up"> {{ $content->getTranslation('core_title',app()->getLocale())
                }} </h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                {{ $content->getTranslation('core_p',app()->getLocale()) }}
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);">
                        <i class="fas fa-handshake" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title"> {{ $content->getTranslation('core_point_title1',app()->getLocale()) }} </h4>
                    <p class="card-text">
                        {{ $content->getTranslation('core_point_p1',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(74, 144, 226, 0.3);">
                        <i class="fas fa-award" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">{{ $content->getTranslation('core_point_title2',app()->getLocale()) }} </h4>
                    <p class="card-text">
                        {{ $content->getTranslation('core_point_p2',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(255, 215, 0, 0.3);">
                        <i class="fas fa-users" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">{{ $content->getTranslation('core_point_title3',app()->getLocale()) }} </h4>
                    <p class="card-text">
                        {{ $content->getTranslation('core_point_p3',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #EF4444, #F87171); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(239, 68, 68, 0.3);">
                        <i class="fas fa-dove" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">{{ $content->getTranslation('core_point_title4',app()->getLocale()) }} </h4>
                    <p class="card-text">
                        {{ $content->getTranslation('core_point_p4',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #8B5CF6, #A78BFA); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(139, 92, 246, 0.3);">
                        <i class="fas fa-lightbulb" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">{{ $content->getTranslation('core_point_title5',app()->getLocale()) }} </h4>
                    <p class="card-text">
                        {{ $content->getTranslation('core_point_p5',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #06B6D4, #22D3EE); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(6, 182, 212, 0.3);">
                        <i class="fas fa-balance-scale" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">{{ $content->getTranslation('core_point_title6',app()->getLocale()) }} </h4>
                    <p class="card-text">
                        {{ $content->getTranslation('core_point_p6',app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== WHY IYMUN DIFFERENT ==================== -->
<section class="parallax-section section"
    style="background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=1920&q=80');">
    <div class="parallax-overlay"
        style="background: linear-gradient(135deg, rgba(0, 8, 20, 0.95) 0%, rgba(10, 114, 181, 0.9) 100%);"></div>
    <div class="container parallax-content">
        <div class="row align-items-center">
            <div class="col-lg-12" data-aos="fade-right">
                <h2 class="display-3 fw-bold text-white mb-5">
                    {{ $content->getTranslation('diff_title',app()->getLocale()) }}
                </h2>

                <div class="mb-4">
                    <div class="d-flex align-items-start p-4 rounded-4 mb-3"
                        style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-left: 5px solid #FFD700;">
                        <div class="me-4" style="font-size: 3rem;">🎯</div>
                        <div>
                            <h4 class="text-white fw-bold mb-2"> {{
                                $content->getTranslation('diff_point1_title',app()->getLocale()) }} </h4>
                            <p class="text-white mb-0" style="opacity: 0.9; line-height: 1.8;">
                                {{ $content->getTranslation('diff_point1_p',app()->getLocale()) }}
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start p-4 rounded-4 mb-3"
                        style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-left: 5px solid #4A90E2;">
                        <div class="me-4" style="font-size: 3rem;">🏛️</div>
                        <div>
                            <h4 class="text-white fw-bold mb-2"> {{
                                $content->getTranslation('diff_point2_title',app()->getLocale()) }} </h4>
                            <p class="text-white mb-0" style="opacity: 0.9; line-height: 1.8;">
                                {{ $content->getTranslation('diff_point2_p',app()->getLocale()) }}
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start p-4 rounded-4 mb-3"
                        style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-left: 5px solid #10B981;">
                        <div class="me-4" style="font-size: 3rem;">🗽</div>
                        <div>
                            <h4 class="text-white fw-bold mb-2"> {{
                                $content->getTranslation('diff_point3_title',app()->getLocale()) }} </h4>
                            <p class="text-white mb-0" style="opacity: 0.9; line-height: 1.8;">
                                {{ $content->getTranslation('diff_point3_p',app()->getLocale()) }}
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start p-4 rounded-4"
                        style="background: rgba(255, 215, 0, 0.15); backdrop-filter: blur(10px); border: 2px solid rgba(255, 215, 0, 0.5);">
                        <div class="me-4" style="font-size: 3rem;">🎓</div>
                        <div>
                            <h4 class="text-white fw-bold mb-2"> {{
                                $content->getTranslation('diff_point4_title',app()->getLocale()) }} </h4>
                            <p class="text-white mb-0" style="opacity: 0.95; line-height: 1.8;">
                                {{ $content->getTranslation('diff_point4_p',app()->getLocale()) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                <div class="text-center p-5 rounded-5"
                    style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(20px); border: 2px solid rgba(255, 255, 255, 0.3);">
                    <h3 class="text-white fw-bold mb-4" style="font-size: 2.5rem;">Join a Legacy of Excellence</h3>
                    <div class="mb-4">
                        <div class="display-3 fw-bold" style="color: #FFD700;">10,000+</div>
                        <div class="text-white mb-3">Alumni Worldwide</div>
                    </div>
                    <div class="mb-4">
                        <div class="display-3 fw-bold" style="color: #FFD700;">95%</div>
                        <div class="text-white mb-3">Satisfaction Rate</div>
                    </div>
                    <div>
                        <div class="display-3 fw-bold" style="color: #FFD700;">7</div>
                        <div class="text-white">Successful Editions</div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

@endsection
