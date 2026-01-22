@extends('front.layouts.master')
@section('title', 'Why Join IYMUN 2026 | Benefits & Opportunities')
@section('content')
<!-- ==================== PAGE HERO ==================== -->
<!-- ==================== PAGE HERO ==================== -->
<section class="hero-wrapper" style="height: 70vh; min-height: 500px;">
    <div class="hero-slider">
        <div class="hero-slide active"
            style="background-image: url('{{ asset('assets/uploads/content/why-join/'.$content->hero_image) }}?w=1920&q=80');">
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

<!-- ==================== TOP REASONS ==================== -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up"> {{ $content->getTranslation('reason_title',app()->getLocale())
                }} </h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                {{ $content->getTranslation('reason_desc',app()->getLocale()) }}
            </p>
        </div>

        <div class="row g-5">
            <!-- Reason 1 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex align-items-start p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(255, 165, 0, 0.05)); border-left: 5px solid #FFD700;">
                    <div
                        style="min-width: 80px; height: 80px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                        <span style="font-size: 3rem;">🏛️</span>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);">{{ $content->getTranslation('reason_title1',app()->getLocale()) }}</h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                            {{ $content->getTranslation('reason_desc1',app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reason 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="d-flex align-items-start p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(74, 144, 226, 0.1), rgba(10, 114, 181, 0.05)); border-left: 5px solid #4A90E2;">
                    <div
                        style="min-width: 80px; height: 80px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                        <span style="font-size: 3rem;">🌍</span>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);">{{ $content->getTranslation('reason_title2',app()->getLocale()) }}</h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                            {{ $content->getTranslation('reason_desc2',app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reason 3 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="d-flex align-items-start p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(52, 211, 153, 0.05)); border-left: 5px solid #10B981;">
                    <div
                        style="min-width: 80px; height: 80px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                        <span style="font-size: 3rem;">🎓</span>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);">{{ $content->getTranslation('reason_title3',app()->getLocale()) }}</h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                            {{ $content->getTranslation('reason_desc3',app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reason 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                <div class="d-flex align-items-start p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(248, 113, 113, 0.05)); border-left: 5px solid #EF4444;">
                    <div
                        style="min-width: 80px; height: 80px; background: linear-gradient(135deg, #EF4444, #F87171); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                        <span style="font-size: 3rem;">💼</span>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('reason_title4',app()->getLocale()) }} </h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                            {{ $content->getTranslation('reason_desc4',app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reason 5 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                <div class="d-flex align-items-start p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(139, 92, 246, 0.1), rgba(167, 139, 250, 0.05)); border-left: 5px solid #8B5CF6;">
                    <div
                        style="min-width: 80px; height: 80px; background: linear-gradient(135deg, #8B5CF6, #A78BFA); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                        <span style="font-size: 3rem;">📜</span>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('reason_title5',app()->getLocale()) }} </h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                            {{ $content->getTranslation('reason_desc5',app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reason 6 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="700">
                <div class="d-flex align-items-start p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(6, 182, 212, 0.1), rgba(34, 211, 238, 0.05)); border-left: 5px solid #06B6D4;">
                    <div
                        style="min-width: 80px; height: 80px; background: linear-gradient(135deg, #06B6D4, #22D3EE); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                        <span style="font-size: 3rem;">🗽</span>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('reason_title6',app()->getLocale()) }} </h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                            {{ $content->getTranslation('reason_desc6',app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reason 7 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="800">
                <div class="d-flex align-items-start p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(255, 165, 0, 0.05)); border-left: 5px solid #FFD700;">
                    <div
                        style="min-width: 80px; height: 80px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                        <span style="font-size: 3rem;">🏆</span>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('reason_title7',app()->getLocale()) }} </h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                            {{ $content->getTranslation('reason_desc7',app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reason 8 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="900">
                <div class="d-flex align-items-start p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(74, 144, 226, 0.1), rgba(10, 114, 181, 0.05)); border-left: 5px solid #4A90E2;">
                    <div
                        style="min-width: 80px; height: 80px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                        <span style="font-size: 3rem;">🎯</span>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('reason_title8',app()->getLocale()) }} </h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                            {{ $content->getTranslation('reason_desc8',app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reason 9 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="1000">
                <div class="d-flex align-items-start p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(52, 211, 153, 0.05)); border-left: 5px solid #10B981;">
                    <div
                        style="min-width: 80px; height: 80px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                        <span style="font-size: 3rem;">🎉</span>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('reason_title9',app()->getLocale()) }} </h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                            {{ $content->getTranslation('reason_desc9',app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reason 10 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="1100">
                <div class="d-flex align-items-start p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(248, 113, 113, 0.05)); border-left: 5px solid #EF4444;">
                    <div
                        style="min-width: 80px; height: 80px; background: linear-gradient(135deg, #EF4444, #F87171); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                        <span style="font-size: 3rem;">🚀</span>
                    </div>
                    <div>
                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('reason_title10',app()->getLocale()) }} </h3>
                        <p style="font-size: 1.1rem; line-height: 1.8; color: var(--gray);">
                            {{ $content->getTranslation('reason_desc10',app()->getLocale()) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TESTIMONIALS ==================== -->
<section class="section" style="background: linear-gradient(135deg, #001F3F 0%, #0A72B5 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold text-white mb-3" data-aos="fade-up">
                {{ $content->getTranslation('test_title',app()->getLocale()) }}
            </h2>
            <p class="lead text-white" style="opacity: 0.9;" data-aos="fade-up" data-aos-delay="100">
                {{ $content->getTranslation('test_desc',app()->getLocale()) }}
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4 rounded-4 h-100"
                    style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.2);">
                    <div class="mb-3">
                        <i class="fas fa-quote-left" style="font-size: 2rem; color: #FFD700;"></i>
                    </div>
                    <p class="text-white mb-4" style="font-size: 1.05rem; line-height: 1.8;">
                        {{ $content->getTranslation('testmon_desc1',app()->getLocale()) }}
                    </p>
                    <div class="d-flex align-items-center">
                        <div
                            style="width: 50px; height: 50px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <span style="font-size: 1.5rem; color: white;">👩</span>
                        </div>
                        <div>
                            <div class="text-white fw-bold"> {{ $content->getTranslation('testmon_name1',app()->getLocale()) }} </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="p-4 rounded-4 h-100"
                    style="background: rgba(255, 215, 0, 0.15); backdrop-filter: blur(10px); border: 2px solid rgba(255, 215, 0, 0.5);">
                    <div class="mb-3">
                        <i class="fas fa-quote-left" style="font-size: 2rem; color: #FFD700;"></i>
                    </div>
                    <p class="text-white mb-4" style="font-size: 1.05rem; line-height: 1.8;">
                        {{ $content->getTranslation('testmon_desc2',app()->getLocale()) }}
                    </p>
                    <div class="d-flex align-items-center">
                        <div
                            style="width: 50px; height: 50px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <span style="font-size: 1.5rem; color: white;">🧑</span>
                        </div>
                        <div>
                            <div class="text-white fw-bold"> {{ $content->getTranslation('testmon_name3',app()->getLocale()) }} </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="p-4 rounded-4 h-100"
                    style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.2);">
                    <div class="mb-3">
                        <i class="fas fa-quote-left" style="font-size: 2rem; color: #FFD700;"></i>
                    </div>
                    <p class="text-white mb-4" style="font-size: 1.05rem; line-height: 1.8;">
                        {{ $content->getTranslation('testmon_desc3',app()->getLocale()) }}
                    </p>
                    <div class="d-flex align-items-center">
                        <div
                            style="width: 50px; height: 50px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <span style="font-size: 1.5rem; color: white;">👨</span>
                        </div>
                        <div>
                            <div class="text-white fw-bold"> {{ $content->getTranslation('testmon_name3',app()->getLocale()) }} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ==================== SCHOLARSHIPS ==================== -->
<section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">  {{ $content->getTranslation('career_title',app()->getLocale()) }} </h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
               {{ $content->getTranslation('career_desc',app()->getLocale()) }}
            </p>
        </div>

        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <div class="card-custom h-100" style="border: 3px solid #10B981;">
                    <div class="mb-2">
                        <div style="font-size: 5rem;"> 🎓 </div>
                        <h3 class="fw-bold mt-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('university_title',app()->getLocale()) }} </h3>
                    </div>

                    <ul class="list-unstyled mb-4" style="font-size: 1.1rem; line-height: 2;">
                        <li><i class="fas fa-star me-2" style="color: #FFD700;"></i> {{ $content->getTranslation('university_title_point1',app()->getLocale()) }} </li>
                        <li><i class="fas fa-star me-2" style="color: #FFD700;"></i> {{ $content->getTranslation('university_title_point2',app()->getLocale()) }} </li>
                        <li><i class="fas fa-star me-2" style="color: #FFD700;"></i> {{ $content->getTranslation('university_title_point3',app()->getLocale()) }} </li>
                        <li><i class="fas fa-star me-2" style="color: #FFD700;"></i> {{ $content->getTranslation('university_title_point4',app()->getLocale()) }} </li>
                        <li><i class="fas fa-star me-2" style="color: #FFD700;"></i> {{ $content->getTranslation('university_title_point5',app()->getLocale()) }} </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                <div class="card-custom h-100" style="border: 3px solid #4A90E2;">
                    <div class="mb-2">
                        <div style="font-size: 5rem;"> 💼 </div>
                        <h3 class="fw-bold mt-3" style="color: var(--un-blue-dark);"> {{ $content->getTranslation('career_title2',app()->getLocale()) }} </h3>
                    </div>

                    <ul class="list-unstyled mb-4" style="font-size: 1.1rem; line-height: 2;">
                        <li><i class="fas fa-heart me-2" style="color: #EF4444;"></i> {{ $content->getTranslation('university_title_point1',app()->getLocale()) }} </li>
                        <li><i class="fas fa-heart me-2" style="color: #EF4444;"></i>  {{ $content->getTranslation('university_title_point2',app()->getLocale()) }} </li>
                        <li><i class="fas fa-heart me-2" style="color: #EF4444;"></i> {{ $content->getTranslation('university_title_point3',app()->getLocale()) }} </li>
                        <li><i class="fas fa-heart me-2" style="color: #EF4444;"></i> {{ $content->getTranslation('university_title_point4',app()->getLocale()) }} </li>
                        <li><i class="fas fa-heart me-2" style="color: #EF4444;"></i> {{ $content->getTranslation('university_title_point5',app()->getLocale()) }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
