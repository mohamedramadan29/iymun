@extends('front.layouts.master')
@section('title', 'Committees | IYMUN 2026 - UNGA & UN Peacebuilding Commission')
@section('content')
<!-- ==================== PAGE HERO ==================== -->
<section class="hero-wrapper" style="height: 70vh; min-height: 500px;">
    <div class="hero-slider">
        <div class="hero-slide active"
            style="background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=1920&q=80');">
        </div>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-badge fade-in-up">
            Our Committees
        </div>

        <h1 class="hero-title fade-in-up" style="font-size: 4rem;">
            Committees <span class="gradient-text"> & Agenda </span>
        </h1>

        <p class="hero-subtitle fade-in-up" style="max-width: 900px; margin: 0 auto;">
            Two specialized committees addressing critical global challenges in youth engagement and peacebuilding
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
            <h2 class="section-title" data-aos="fade-up">Choose Your Committee</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                Two specialized committees tackling critical global challenges
            </p>
        </div>

        <div class="row g-5">
            <!-- COMMITTEE 1: UNGA -->
            <div class="col-12" data-aos="fade-right" data-aos-delay="200">
                <div class="card-custom h-100" style="border: 3px solid #10B981;">
                    <div class="text-center mb-4">
                        <div style="font-size: 6rem; margin-bottom: 1rem;">🌍</div>
                        <span class="badge rounded-pill px-4 py-2"
                            style="background: linear-gradient(135deg, #10B981, #34D399); color: white; font-size: 1rem;">Intermediate
                            Level</span>
                    </div>

                    <h2 class="text-center mb-4" style="color: var(--un-blue-dark);">
                        United Nations General Assembly
                    </h2>

                    <div class="p-4 rounded-4 mb-4"
                        style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(52, 211, 153, 0.05));">
                        <h4 class="fw-bold mb-3" style="color: #10B981;">📋 Committee Topic</h4>
                        <h5 class="mb-0" style="line-height: 1.8; color: var(--un-blue-dark);">
                            Global Strategies to Prevent Violent Extremism Through Youth Engagement and Education
                        </h5>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: var(--un-blue);">🎯 What You'll Debate:</h5>
                    <ul class="list-unstyled mb-4" style="font-size: 1.05rem; line-height: 2;">
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #10B981;"></i>Youth
                            radicalization prevention strategies</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #10B981;"></i>Educational
                            programs countering extremist narratives</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #10B981;"></i>Social media's
                            role in recruitment and prevention</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #10B981;"></i>Economic
                            opportunities for at-risk youth</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #10B981;"></i>International
                            cooperation frameworks</li>
                    </ul>

                    <h5 class="fw-bold mb-3" style="color: var(--un-blue);">🎓 What You'll Learn:</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(16, 185, 129, 0.1);">
                                <i class="fas fa-comments" style="font-size: 2rem; color: #10B981;"></i>
                                <div class="mt-2 fw-bold">Negotiation</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(16, 185, 129, 0.1);">
                                <i class="fas fa-microphone" style="font-size: 2rem; color: #10B981;"></i>
                                <div class="mt-2 fw-bold">Public Speaking</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(16, 185, 129, 0.1);">
                                <i class="fas fa-search" style="font-size: 2rem; color: #10B981;"></i>
                                <div class="mt-2 fw-bold">Research</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(16, 185, 129, 0.1);">
                                <i class="fas fa-pen-fancy" style="font-size: 2rem; color: #10B981;"></i>
                                <div class="mt-2 fw-bold">Resolution Writing</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- COMMITTEE 2: PBC -->
            <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                <div class="card-custom h-100" style="border: 3px solid #EF4444;">
                    <div class="text-center mb-4">
                        <div style="font-size: 6rem; margin-bottom: 1rem;">🕊️</div>
                        <span class="badge rounded-pill px-4 py-2"
                            style="background: linear-gradient(135deg, #EF4444, #F87171); color: white; font-size: 1rem;">Expert
                            Level</span>
                    </div>

                    <h2 class="text-center mb-4" style="color: var(--un-blue-dark);">
                        UN Peacebuilding Commission
                    </h2>

                    <div class="p-4 rounded-4 mb-4"
                        style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(248, 113, 113, 0.05));">
                        <h4 class="fw-bold mb-3" style="color: #EF4444;">📋 Committee Topic</h4>
                        <h5 class="mb-0" style="line-height: 1.8; color: var(--un-blue-dark);">
                            Preventing Youth Radicalization and Building Resilient Post-Conflict Societies
                        </h5>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: var(--un-blue);">🎯 What You'll Debate:</h5>
                    <ul class="list-unstyled mb-4" style="font-size: 1.05rem; line-height: 2;">
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #EF4444;"></i>Post-conflict
                            reconstruction strategies</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #EF4444;"></i>Preventing
                            re-recruitment in fragile states</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #EF4444;"></i>Justice and
                            reconciliation mechanisms</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #EF4444;"></i>Reintegration
                            of former combatants</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #EF4444;"></i>Building
                            resilient governance structures</li>
                    </ul>

                    <h5 class="fw-bold mb-3" style="color: var(--un-blue);">🎓 What You'll Learn:</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(239, 68, 68, 0.1);">
                                <i class="fas fa-brain" style="font-size: 2rem; color: #EF4444;"></i>
                                <div class="mt-2 fw-bold">Strategic Thinking</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(239, 68, 68, 0.1);">
                                <i class="fas fa-handshake" style="font-size: 2rem; color: #EF4444;"></i>
                                <div class="mt-2 fw-bold">Consensus Building</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(239, 68, 68, 0.1);">
                                <i class="fas fa-balance-scale" style="font-size: 2rem; color: #EF4444;"></i>
                                <div class="mt-2 fw-bold">Conflict Resolution</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3 text-center" style="background: rgba(239, 68, 68, 0.1);">
                                <i class="fas fa-users-cog" style="font-size: 2rem; color: #EF4444;"></i>
                                <div class="mt-2 fw-bold">Policy Design</div>
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
                How Our Committees Work 🔄
            </h2>
            <p class="lead text-white" style="opacity: 0.9; max-width: 800px; margin: 0 auto;" data-aos="fade-up"
                data-aos-delay="100">
                Experience authentic UN procedures from opening ceremony to final resolution
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
                    <h4 class="text-white fw-bold mb-3">Opening Ceremony</h4>
                    <p class="text-white" style="opacity: 0.9;">
                        Keynote speeches from diplomats and orientation on UN procedures
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
                    <h4 class="text-white fw-bold mb-3">Committee Sessions</h4>
                    <p class="text-white" style="opacity: 0.9;">
                        Formal debates, moderated caucuses, and unmoderated caucuses
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
                    <h4 class="text-white fw-bold mb-3">Resolution Writing</h4>
                    <p class="text-white" style="opacity: 0.9;">
                        Draft and negotiate working papers and draft resolutions
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
                    <h4 class="text-white fw-bold mb-3">Voting & Awards</h4>
                    <p class="text-white" style="opacity: 0.95;">
                        Vote on resolutions and recognize outstanding delegates
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
            <h2 class="section-title" data-aos="fade-up">Why Join Our Committees?</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                Gain skills and experiences that will transform your future
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🎤</div>
                    <h4 class="card-title">Real UN Procedures</h4>
                    <p class="card-text">
                        Follow authentic Rules of Procedure used in actual United Nations committees
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">👔</div>
                    <h4 class="card-title">Expert Chairs</h4>
                    <p class="card-text">
                        Learn from experienced MUN directors and diplomacy professionals
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">📚</div>
                    <h4 class="card-title">Study Guides</h4>
                    <p class="card-text">
                        Receive comprehensive background guides to prepare you for success
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🌐</div>
                    <h4 class="card-title">Diverse Perspectives</h4>
                    <p class="card-text">
                        Collaborate with delegates from 50+ countries with unique viewpoints
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🏆</div>
                    <h4 class="card-title">Awards & Recognition</h4>
                    <p class="card-text">
                        Compete for Best Delegate, Outstanding Delegate, and Honorable Mention awards
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                <div class="card-custom text-center h-100">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">📜</div>
                    <h4 class="card-title">Certificates</h4>
                    <p class="card-text">
                        Receive official certificates from IYMUN and American Diplomats
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
