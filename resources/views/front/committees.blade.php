@extends('front.layouts.master')
@section('title', 'Committees | IYADMUN 2026 - UNGA & UN Peacebuilding Commission')
@section('content')
<!-- ==================== PAGE HERO ==================== -->
<section class="hero-wrapper" style="height: 70vh; min-height: 500px;">
    <div class="hero-slider">
        <div class="hero-slide active"
            style="background-image: url('{{ asset('assets/uploads/content/committee/'.$content->hero_image) }}?w=1920&q=80');">
        </div>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-badge fade-in-up">
            {{ $content->getTranslation('hero_title',app()->getLocale()) }}
        </div>

        <h1 class="hero-title fade-in-up">
            {{ $content->getTranslation('hero_sub_title',app()->getLocale()) }} <span class="gradient-text"> {{ $content->getTranslation('hero_color_title',app()->getLocale()) }}  </span>
        </h1>

        <p class="hero-subtitle fade-in-up" style="max-width: 900px; margin: 0 auto;">
            {{ $content->getTranslation('hero_description',app()->getLocale()) }}
        </p>
    </div>

    <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- ==================== COMMITTEES OVERVIEW ==================== -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">{{ $content->getTranslation('committee_title',app()->getLocale()) }}</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                {{ $content->getTranslation('committee_desc',app()->getLocale()) }}
            </p>
        </div>

        <div class="row g-5">
            <!-- COMMITTEE 1: UNGA -->
            <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom h-100" style="border: 3px solid #10B981;">
                    <div class="text-center mb-4">
                        <div style="font-size: 6rem; margin-bottom: 1rem;">🌍</div>
                        <span class="badge rounded-pill px-4 py-2"
                            style="background: linear-gradient(135deg, #10B981, #34D399); color: white; font-size: 1rem;">
                        {{ $content->getTranslation('com1_slogan',app()->getLocale()) }}
                        </span>
                    </div>

                    <h2 class="text-center mb-4" style="color: var(--un-blue-dark);">
                        {{ $content->getTranslation('com1_topic_title',app()->getLocale()) }}
                    </h2>

                    <div class="p-4 rounded-4 mb-4"
                        style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(52, 211, 153, 0.05));">
                        <h4 class="fw-bold mb-3" style="color: #10B981;">📋 Committee Topic</h4>
                        <h5 class="mb-0" style="line-height: 1.8; color: var(--un-blue-dark);">
                           {{ $content->getTranslation('com1_topic_p',app()->getLocale()) }}
                        </h5>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: var(--un-blue);"> {{ $content->getTranslation('com1_discus_title',app()->getLocale()) }} </h5>
                    <ul class="list-unstyled mb-4" style="font-size: 1.05rem; line-height: 2;">
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #10B981;"></i>{{ $content->getTranslation('com1_discus_point1',app()->getLocale()) }}</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #10B981;"></i> {{ $content->getTranslation('com1_discus_point2',app()->getLocale()) }} </li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #10B981;"></i> {{ $content->getTranslation('com1_discus_point3',app()->getLocale()) }} </li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #10B981;"></i> {{ $content->getTranslation('com1_discus_point4',app()->getLocale()) }} </li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #10B981;"></i> {{ $content->getTranslation('com1_discus_point5',app()->getLocale()) }} </li>
                    </ul>

                    <h5 class="fw-bold mb-3" style="color: var(--un-blue);"> {{ $content->getTranslation('com1_learn_title',app()->getLocale()) }} </h5>
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(16, 185, 129, 0.1);">
                                <i class="fas fa-comments" style="font-size: 2rem; color: #10B981;"></i>
                                <div class="mt-2 fw-bold"> {{ $content->getTranslation('com1_learn_point1',app()->getLocale()) }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(16, 185, 129, 0.1);">
                                <i class="fas fa-microphone" style="font-size: 2rem; color: #10B981;"></i>
                                <div class="mt-2 fw-bold"> {{ $content->getTranslation('com1_learn_point2',app()->getLocale()) }} </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(16, 185, 129, 0.1);">
                                <i class="fas fa-search" style="font-size: 2rem; color: #10B981;"></i>
                                <div class="mt-2 fw-bold">{{ $content->getTranslation('com1_learn_point3',app()->getLocale()) }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(16, 185, 129, 0.1);">
                                <i class="fas fa-pen-fancy" style="font-size: 2rem; color: #10B981;"></i>
                                <div class="mt-2 fw-bold"> {{ $content->getTranslation('com1_learn_point4',app()->getLocale()) }} </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- COMMITTEE 2: PBC -->
            <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom h-100" style="border: 3px solid #EF4444;">
                    <div class="text-center mb-4">
                        <div style="font-size: 6rem; margin-bottom: 1rem;">🕊️</div>
                        <span class="badge rounded-pill px-4 py-2"
                            style="background: linear-gradient(135deg, #EF4444, #F87171); color: white; font-size: 1rem;">{{ $content->getTranslation('com2_slogan',app()->getLocale()) }} </span>
                    </div>

                    <h2 class="text-center mb-4" style="color: var(--un-blue-dark);">
                        {{ $content->getTranslation('com2_topic_title',app()->getLocale()) }}
                    </h2>

                    <div class="p-4 rounded-4 mb-4"
                        style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(248, 113, 113, 0.05));">
                        <h4 class="fw-bold mb-3" style="color: #EF4444;">📋 Committee Topic</h4>
                        <h5 class="mb-0" style="line-height: 1.8; color: var(--un-blue-dark);">
                            {{ $content->getTranslation('com2_topic_p',app()->getLocale()) }}
                        </h5>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: var(--un-blue);">{{ $content->getTranslation('com2_discus_title',app()->getLocale()) }}</h5>
                    <ul class="list-unstyled mb-4" style="font-size: 1.05rem; line-height: 2;">
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #EF4444;"></i>{{ $content->getTranslation('com2_discus_point1',app()->getLocale()) }}</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #EF4444;"></i>{{ $content->getTranslation('com2_discus_point2',app()->getLocale()) }}</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #EF4444;"></i>{{ $content->getTranslation('com2_discus_point3',app()->getLocale()) }}</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #EF4444;"></i>{{ $content->getTranslation('com2_discus_point4',app()->getLocale()) }}</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #EF4444;"></i>{{ $content->getTranslation('com2_discus_point5',app()->getLocale()) }}</li>
                    </ul>

                    <h5 class="fw-bold mb-3" style="color: var(--un-blue);">{{ $content->getTranslation('com2_learn_title',app()->getLocale()) }}</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(239, 68, 68, 0.1);">
                                <i class="fas fa-brain" style="font-size: 2rem; color: #EF4444;"></i>
                                <div class="mt-2 fw-bold">{{ $content->getTranslation('com2_learn_point1',app()->getLocale()) }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(239, 68, 68, 0.1);">
                                <i class="fas fa-handshake" style="font-size: 2rem; color: #EF4444;"></i>
                                <div class="mt-2 fw-bold">{{ $content->getTranslation('com2_learn_point2',app()->getLocale()) }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(239, 68, 68, 0.1);">
                                <i class="fas fa-balance-scale" style="font-size: 2rem; color: #EF4444;"></i>
                                <div class="mt-2 fw-bold">{{ $content->getTranslation('com2_learn_point3',app()->getLocale()) }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(239, 68, 68, 0.1);">
                                <i class="fas fa-users-cog" style="font-size: 2rem; color: #EF4444;"></i>
                                <div class="mt-2 fw-bold">{{ $content->getTranslation('com2_learn_point4',app()->getLocale()) }}</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== HOW IT WORKS ==================== -->
<section class="section" style="background: linear-gradient(135deg, #001F3F 0%, #0A72B5 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold text-white mb-3" data-aos="fade-up">
                {{ $content->getTranslation('how_work_title',app()->getLocale()) }}
            </h2>
            <p class="lead text-white" style="opacity: 0.9; max-width: 800px; margin: 0 auto;" data-aos="fade-up"
                data-aos-delay="100">
                {{ $content->getTranslation('how_work_desc',app()->getLocale()) }}
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center p-4 rounded-4 h-100"
                    style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.2);">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: 900; color: white;">
                        1
                    </div>
                    <h4 class="text-white fw-bold mb-3">{{ $content->getTranslation('how_work_title_point1',app()->getLocale()) }}</h4>
                    <p class="text-white" style="opacity: 0.9;">
                        {{ $content->getTranslation('how_work_desc_point1',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center p-4 rounded-4 h-100"
                    style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.2);">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: 900; color: white;">
                        2
                    </div>
                    <h4 class="text-white fw-bold mb-3">{{ $content->getTranslation('how_work_title_point2',app()->getLocale()) }}</h4>
                    <p class="text-white" style="opacity: 0.9;">
                        {{ $content->getTranslation('how_work_desc_point2',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center p-4 rounded-4 h-100"
                    style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.2);">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: 900; color: white;">
                        3
                    </div>
                    <h4 class="text-white fw-bold mb-3">{{ $content->getTranslation('how_work_title_point3',app()->getLocale()) }}</h4>
                    <p class="text-white" style="opacity: 0.9;">
                        {{ $content->getTranslation('how_work_desc_point3',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="text-center p-4 rounded-4 h-100"
                    style="background: rgba(255, 215, 0, 0.15); backdrop-filter: blur(10px); border: 2px solid rgba(255, 215, 0, 0.5);">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: 900; color: white;">
                        4
                    </div>
                    <h4 class="text-white fw-bold mb-3">{{ $content->getTranslation('how_work_title_point4',app()->getLocale()) }}</h4>
                    <p class="text-white" style="opacity: 0.9;">
                        {{ $content->getTranslation('how_work_desc_point4',app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== COMMITTEE BENEFITS ==================== -->
<section class="section section-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">{{ $content->getTranslation('why_join_title',app()->getLocale()) }}</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                {{ $content->getTranslation('why_join_desc',app()->getLocale()) }}
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🎤</div>
                    <h4 class="card-title">{{ $content->getTranslation('why_join_title_point1',app()->getLocale()) }}</h4>
                    <p class="card-text">
                        {{ $content->getTranslation('why_join_p_point1',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">👔</div>
                    <h4 class="card-title">{{ $content->getTranslation('why_join_title_point2',app()->getLocale()) }}</h4>
                    <p class="card-text">
                        {{ $content->getTranslation('why_join_p_point2',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">📚</div>
                    <h4 class="card-title">{{ $content->getTranslation('why_join_title_point3',app()->getLocale()) }}</h4>
                    <p class="card-text">
                        {{ $content->getTranslation('why_join_p_point3',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🌐</div>
                    <h4 class="card-title">{{ $content->getTranslation('why_join_title_point4',app()->getLocale()) }}</h4>
                    <p class="card-text">
                        {{ $content->getTranslation('why_join_p_point4',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🏆</div>
                    <h4 class="card-title">{{ $content->getTranslation('why_join_title_point5',app()->getLocale()) }}</h4>
                    <p class="card-text">
                        {{ $content->getTranslation('why_join_p_point5',app()->getLocale()) }}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">📜</div>
                    <h4 class="card-title">{{ $content->getTranslation('why_join_title_point6',app()->getLocale()) }}</h4>
                    <p class="card-text">
                        {{ $content->getTranslation('why_join_p_point6',app()->getLocale()) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
