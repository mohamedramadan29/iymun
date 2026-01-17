@extends('front.layouts.master')

@section('title', 'Partners & Sponsors | IYMUN 2026')
@section('css')
@endsection

@section('content')

    <!-- ==================== PAGE HERO ==================== -->
    <section class="hero-wrapper" style="height: 70vh; min-height: 500px;">
        <div class="hero-slider">
            <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1556761175-4b46a572b786?w=1920&q=80');"></div>
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-content">
            <div class="hero-badge fade-in-up">
                Our Partners & Sponsors
            </div>

            <h1 class="hero-title fade-in-up" style="font-size: 4rem;">
                Organizers
                <span class="gradient-text">& Partners</span>
            </h1>

            <p class="hero-subtitle fade-in-up" style="max-width: 900px; margin: 0 auto;">
                Brought to you by leading youth diplomacy organizations
            </p>
        </div>

        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- ==================== FOUNDING PARTNERS ==================== -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Founding Partners</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Organizations at the heart of our mission
                </p>
            </div>

            <div class="row g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="card-custom h-100 text-center" style="border: 3px solid #FFD700;">
                        <div style="width: 120px; height: 120px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 30px; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; box-shadow: 0 15px 40px rgba(74, 144, 226, 0.3);">
                            <i class="fas fa-flag-usa" style="font-size: 4rem; color: white;"></i>
                        </div>

                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark); font-size: 2rem;">American Diplomats</h3>
                        <p class="lead mb-4" style="color: var(--gray);">Co-Organizing Partner</p>

                        <p style="font-size: 1.1rem; line-height: 1.9; color: var(--gray); text-align: left;">
                            <strong>American Diplomats</strong> is our founding partner, bringing decades of real-world diplomatic experience to IYMUN. Current and former U.S. diplomats provide mentorship, deliver keynote speeches, and offer insider perspectives on international relations.
                        </p>

                        <div class="mt-4 p-4 rounded-4" style="background: rgba(74, 144, 226, 0.1); text-align: left;">
                            <h5 class="fw-bold mb-3" style="color: #4A90E2;">Their Contribution:</h5>
                            <ul style="line-height: 2;">
                                <li>Keynote speakers from State Department</li>
                                <li>1-on-1 mentorship sessions</li>
                                <li>Career guidance workshops</li>
                                <li>Diplomacy masterclasses</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="card-custom h-100 text-center" style="border: 3px solid #FFD700;">
                        <div style="width: 120px; height: 120px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 30px; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; box-shadow: 0 15px 40px rgba(16, 185, 129, 0.3);">
                            <i class="fas fa-globe" style="font-size: 4rem; color: white;"></i>
                        </div>

                        <h3 class="fw-bold mb-3" style="color: var(--un-blue-dark); font-size: 2rem;">International Youth MUN</h3>
                        <p class="lead mb-4" style="color: var(--gray);">Conference Organizer</p>

                        <p style="font-size: 1.1rem; line-height: 1.9; color: var(--gray); text-align: left;">
                            <strong>IYMUN</strong> has been organizing world-class youth diplomacy conferences since 2019. With 7 successful editions and 10,000+ alumni worldwide, we've established ourselves as a leading platform for youth engagement in global affairs.
                        </p>

                        <div class="mt-4 p-4 rounded-4" style="background: rgba(16, 185, 129, 0.1); text-align: left;">
                            <h5 class="fw-bold mb-3" style="color: #10B981;">Our Track Record:</h5>
                            <ul style="line-height: 2;">
                                <li>7 successful international conferences</li>
                                <li>50+ countries represented</li>
                                <li>10,000+ trained delegates</li>
                                <li>95% satisfaction rate</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== PLATINUM SPONSORS ==================== -->
    <section class="section" style="background: linear-gradient(135deg, #001F3F 0%, #0A72B5 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold text-white mb-3" data-aos="fade-up">
                    Platinum Sponsors 💎
                </h2>
                <p class="lead text-white" style="opacity: 0.9;" data-aos="fade-up" data-aos-delay="100">
                    Major supporters of youth diplomacy and peacebuilding
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center p-5 rounded-4 h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.3);">
                        <div style="width: 100px; height: 100px; background: white; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-university" style="font-size: 3rem; color: #4A90E2;"></i>
                        </div>
                        <h4 class="text-white fw-bold">Global Peace Foundation</h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-center p-5 rounded-4 h-100" style="background: rgba(255, 215, 0, 0.15); backdrop-filter: blur(10px); border: 2px solid rgba(255, 215, 0, 0.5);">
                        <div style="width: 100px; height: 100px; background: white; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-graduation-cap" style="font-size: 3rem; color: #FFD700;"></i>
                        </div>
                        <h4 class="text-white fw-bold">Youth Leadership Institute</h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-center p-5 rounded-4 h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.3);">
                        <div style="width: 100px; height: 100px; background: white; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-handshake" style="font-size: 3rem; color: #10B981;"></i>
                        </div>
                        <h4 class="text-white fw-bold">International Relations Council</h4>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="text-center p-5 rounded-4 h-100" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 2px solid rgba(255, 255, 255, 0.3);">
                        <div style="width: 100px; height: 100px; background: white; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-dove" style="font-size: 3rem; color: #EF4444;"></i>
                        </div>
                        <h4 class="text-white fw-bold">Peacebuilding Alliance</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== ACADEMIC PARTNERS ==================== -->
    <section class="section section-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Academic Partners 🎓</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Leading universities supporting excellence in youth diplomacy
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-custom text-center h-100">
                        <div style="width: 90px; height: 90px; background: linear-gradient(135deg, #8B5CF6, #A78BFA); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-building-columns" style="font-size: 2.5rem; color: white;"></i>
                        </div>
                        <h4 class="card-title">Columbia University</h4>
                        <p class="card-text">School of International & Public Affairs</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-custom text-center h-100">
                        <div style="width: 90px; height: 90px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-book-open" style="font-size: 2.5rem; color: white;"></i>
                        </div>
                        <h4 class="card-title">New York University</h4>
                        <p class="card-text">Center for Global Affairs</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-custom text-center h-100">
                        <div style="width: 90px; height: 90px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-university" style="font-size: 2.5rem; color: white;"></i>
                        </div>
                        <h4 class="card-title">Georgetown University</h4>
                        <p class="card-text">Walsh School of Foreign Service</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card-custom text-center h-100">
                        <div style="width: 90px; height: 90px; background: linear-gradient(135deg, #EF4444, #F87171); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-landmark" style="font-size: 2.5rem; color: white;"></i>
                        </div>
                        <h4 class="card-title">Harvard Kennedy School</h4>
                        <p class="card-text">Belfer Center for Science</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card-custom text-center h-100">
                        <div style="width: 90px; height: 90px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-graduation-cap" style="font-size: 2.5rem; color: white;"></i>
                        </div>
                        <h4 class="card-title">Yale University</h4>
                        <p class="card-text">Jackson Institute for Global Affairs</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="card-custom text-center h-100">
                        <div style="width: 90px; height: 90px; background: linear-gradient(135deg, #06B6D4, #22D3EE); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <i class="fas fa-globe-americas" style="font-size: 2.5rem; color: white;"></i>
                        </div>
                        <h4 class="card-title">Princeton University</h4>
                        <p class="card-text">Woodrow Wilson School</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== MEDIA PARTNERS ==================== -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Media Partners 📰</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Amplifying youth voices in global dialogue
                </p>
            </div>

            <div class="row g-4 align-items-center">
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="p-4 rounded-4 text-center" style="background: white; box-shadow: var(--shadow-md);">
                        <i class="fas fa-newspaper" style="font-size: 3rem; color: var(--un-blue);"></i>
                        <h5 class="mt-3 mb-0 fw-bold">Global Times</h5>
                    </div>
                </div>

                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="p-4 rounded-4 text-center" style="background: white; box-shadow: var(--shadow-md);">
                        <i class="fas fa-broadcast-tower" style="font-size: 3rem; color: #EF4444;"></i>
                        <h5 class="mt-3 mb-0 fw-bold">Youth Voice Radio</h5>
                    </div>
                </div>

                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="p-4 rounded-4 text-center" style="background: white; box-shadow: var(--shadow-md);">
                        <i class="fas fa-laptop" style="font-size: 3rem; color: #10B981;"></i>
                        <h5 class="mt-3 mb-0 fw-bold">DiplomacyNow</h5>
                    </div>
                </div>

                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="500">
                    <div class="p-4 rounded-4 text-center" style="background: white; box-shadow: var(--shadow-md);">
                        <i class="fas fa-video" style="font-size: 3rem; color: #FFD700;"></i>
                        <h5 class="mt-3 mb-0 fw-bold">UN Youth Network</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ==================== TESTIMONIALS ==================== -->
    <section class="section section-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">What Our Partners Say</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-custom h-100">
                        <i class="fas fa-quote-left mb-3" style="font-size: 2rem; color: #FFD700;"></i>
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--gray); margin-bottom: 2rem;">
                            "Partnering with IYMUN has been incredibly rewarding. The delegates' dedication to peacebuilding is inspiring, and we're proud to support the next generation of diplomats."
                        </p>
                        <div class="d-flex align-items-center">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-user-tie" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Dr. Sarah Johnson</div>
                                <div style="color: var(--gray); font-size: 0.9rem;">Director, Global Peace Foundation</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-custom h-100">
                        <i class="fas fa-quote-left mb-3" style="font-size: 2rem; color: #FFD700;"></i>
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--gray); margin-bottom: 2rem;">
                            "IYMUN delivers exceptional quality. The level of preparation, professionalism, and impact is unmatched in youth diplomacy conferences. Highly recommend partnering!"
                        </p>
                        <div class="d-flex align-items-center">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-graduation-cap" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Prof. Michael Chen</div>
                                <div style="color: var(--gray); font-size: 0.9rem;">Columbia University SIPA</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-custom h-100">
                        <i class="fas fa-quote-left mb-3" style="font-size: 2rem; color: #FFD700;"></i>
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--gray); margin-bottom: 2rem;">
                            "The partnership opportunities are excellent. We've recruited amazing interns and built meaningful relationships with young leaders from around the world."
                        </p>
                        <div class="d-flex align-items-center">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #EF4444, #F87171); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-briefcase" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Amanda Rodriguez</div>
                                <div style="color: var(--gray); font-size: 0.9rem;">International Relations Council</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection
