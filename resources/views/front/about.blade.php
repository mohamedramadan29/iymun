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
            About IYMUN 2026
        </div>

        <h1 class="hero-title fade-in-up" style="font-size: 4rem;">
            About the
            <span class="gradient-text">Conference.</span>
        </h1>

        <p class="hero-subtitle fade-in-up" style="max-width: 800px; margin: 0 auto;">
            A prestigious international platform for youth diplomacy, leadership, and global dialogue
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
                    <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=800&q=80"
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
                    Iraqi Youth Model United Nations
                </h2>
                <p class="mb-1" style="color: var(--gray); line-height: 1.8;">
                    <strong>IYMUN</strong> is a leading youth-driven organization dedicated to promoting diplomacy,
                    leadership, and international cooperation among young people across the Middle East and beyond.
                </p>
                <p class="mb-1" style="color: var(--gray); line-height: 1.8;">
                    Since our founding, we have organized numerous successful conferences, bringing together thousands
                    of delegates to discuss critical global issues and develop practical solutions.
                </p>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-center p-2 rounded"
                            style="background: white; box-shadow: var(--shadow-md); transition: var(--transition-base); transform: translateX(0px);">
                            <div class="me-3" style="font-size: 1.5rem;">🏆</div>
                            <div>
                                <h5 class="fw-bold"> Award-winning conference organization </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="d-flex align-items-center p-2 rounded"
                            style="background: white; box-shadow: var(--shadow-md); transition: var(--transition-base); transform: translateX(0px);">
                            <div class="me-3" style="font-size: 1.5rem;"> 🌍 </div>
                            <div>
                                <h5 class="fw-bold"> Delegates from 50+ countries </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        <div class="d-flex align-items-center p-2 rounded"
                            style="background: white; box-shadow: var(--shadow-md); transition: var(--transition-base); transform: translateX(0px);">
                            <div class="me-3" style="font-size: 1.5rem;"> 📚 </div>
                            <div>
                                <h5 class="fw-bold"> Comprehensive training programs </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-2">
                        <div class="d-flex align-items-center p-2 rounded"
                            style="background: white; box-shadow: var(--shadow-md); transition: var(--transition-base); transform: translateX(0px);">
                            <div class="me-3" style="font-size: 1.5rem;"> 🤝 </div>
                            <div>
                                <h5 class="fw-bold"> Strong alumni network </h5>
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
                Our Mission & Vision
            </h2>
            <p class="lead text-white" style="opacity: 0.9; max-width: 800px; margin: 0 auto;" data-aos="fade-up"
                data-aos-delay="100">
                Driving meaningful change through youth-led diplomacy
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
                    <h3 class="display-6 fw-bold text-white mb-2">Our Mission</h3>
                    <p class="text-white" style="font-size: 1.15rem; line-height: 1.9; opacity: 0.95;">
                        To empower youth from around the world to become effective peacebuilders and diplomats through
                        immersive Model United Nations experiences that address <strong>preventing violent
                            extremism</strong> and <strong>building resilient post-conflict societies</strong>.
                    </p>
                    <p class="text-white" style="font-size: 1.15rem; line-height: 1.9; opacity: 0.95;">
                        We provide a platform where young voices matter, where diplomatic skills are honed, and where
                        lifelong networks for peace are formed.
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
                    <h3 class="display-6 fw-bold text-white mb-2">Our Vision</h3>
                    <p class="text-white" style="font-size: 1.15rem; line-height: 1.9; opacity: 0.95;">
                        A world where <strong>every young person</strong> has the skills, knowledge, and network to
                        contribute meaningfully to global peace and security.
                    </p>
                    <p class="text-white" style="font-size: 1.15rem; line-height: 1.9; opacity: 0.95;">
                        We envision a future generation of leaders who understand that <strong>dialogue triumphs over
                            division</strong>, that diplomacy is more powerful than conflict, and that youth are not
                        just the leaders of tomorrow—they are the peacebuilders of today.
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
            <h2 class="section-title" data-aos="fade-up">Our Core Values</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                The principles that guide everything we do
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);">
                        <i class="fas fa-handshake" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">Inclusivity</h4>
                    <p class="card-text">
                        We welcome delegates from all backgrounds, cultures, and experiences. Diversity strengthens our
                        dialogue and enriches our community.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(74, 144, 226, 0.3);">
                        <i class="fas fa-award" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">Excellence</h4>
                    <p class="card-text">
                        We maintain the highest standards in everything—from our committee topics to our venues, from
                        our mentors to our procedures.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(255, 215, 0, 0.3);">
                        <i class="fas fa-users" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">Empowerment</h4>
                    <p class="card-text">
                        We believe in the power of youth voices. Every delegate has the potential to drive change and
                        shape the future of global diplomacy.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #EF4444, #F87171); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(239, 68, 68, 0.3);">
                        <i class="fas fa-dove" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">Peace</h4>
                    <p class="card-text">
                        Our ultimate goal is lasting peace. We tackle the root causes of conflict through education,
                        dialogue, and youth engagement.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #8B5CF6, #A78BFA); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(139, 92, 246, 0.3);">
                        <i class="fas fa-lightbulb" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">Innovation</h4>
                    <p class="card-text">
                        We constantly evolve our methods and approaches, combining traditional UN procedures with modern
                        technology and pedagogy.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="700">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 100px; height: 100px; background: linear-gradient(135deg, #06B6D4, #22D3EE); border-radius: 25px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(6, 182, 212, 0.3);">
                        <i class="fas fa-balance-scale" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">Integrity</h4>
                    <p class="card-text">
                        We operate with complete transparency and honesty. Our commitment to ethical leadership guides
                        every decision we make.
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
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="display-3 fw-bold text-white mb-5">
                    What Makes IYMUN Different? 🌟
                </h2>

                <div class="mb-4">
                    <div class="d-flex align-items-start p-4 rounded-4 mb-3"
                        style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-left: 5px solid #FFD700;">
                        <div class="me-4" style="font-size: 3rem;">🎯</div>
                        <div>
                            <h4 class="text-white fw-bold mb-2">Real-World Impact Focus</h4>
                            <p class="text-white mb-0" style="opacity: 0.9; line-height: 1.8;">
                                Unlike traditional MUNs, we focus on <strong>actionable solutions</strong> to violent
                                extremism and post-conflict recovery—issues that directly impact millions of lives
                                today.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start p-4 rounded-4 mb-3"
                        style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-left: 5px solid #4A90E2;">
                        <div class="me-4" style="font-size: 3rem;">🏛️</div>
                        <div>
                            <h4 class="text-white fw-bold mb-2">American Diplomats Partnership</h4>
                            <p class="text-white mb-0" style="opacity: 0.9; line-height: 1.8;">
                                Direct access to <strong>current and former U.S. diplomats</strong> who provide keynote
                                speeches, mentorship, and insider perspectives on real diplomatic work.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start p-4 rounded-4 mb-3"
                        style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-left: 5px solid #10B981;">
                        <div class="me-4" style="font-size: 3rem;">🗽</div>
                        <div>
                            <h4 class="text-white fw-bold mb-2">New York City Experience</h4>
                            <p class="text-white mb-0" style="opacity: 0.9; line-height: 1.8;">
                                <strong>Exclusive UN Headquarters tour</strong>, networking events in Manhattan, and the
                                chance to experience diplomacy at the heart of international relations.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start p-4 rounded-4"
                        style="background: rgba(255, 215, 0, 0.15); backdrop-filter: blur(10px); border: 2px solid rgba(255, 215, 0, 0.5);">
                        <div class="me-4" style="font-size: 3rem;">🎓</div>
                        <div>
                            <h4 class="text-white fw-bold mb-2">Certification That Matters</h4>
                            <p class="text-white mb-0" style="opacity: 0.95; line-height: 1.8;">
                                Our certificates are recognized by <strong>universities and employers
                                    worldwide</strong>, demonstrating your commitment to global citizenship and
                                leadership.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
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
            </div>
        </div>
    </div>
</section>

@endsection
