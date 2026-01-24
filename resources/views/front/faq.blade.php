@extends('front.layouts.master')

@section('title', 'FAQ | IYADMUN 2026 - Frequently Asked Questions')

@section('content')
    <!-- ==================== PAGE HERO ==================== -->
    <section class="hero-wrapper" style="height: 70vh; min-height: 500px;">
        <div class="hero-slider">
            <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1920&q=80');"></div>
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-content">
            <div class="hero-badge fade-in-up">
                Frequently Asked Questions
            </div>

            <h1 class="hero-title fade-in-up">
                Got Questions?<br>
                <span class="gradient-text">We've Got Answers</span>
            </h1>

            <p class="hero-subtitle fade-in-up" style="max-width: 900px; margin: 0 auto;">
                Everything you need to know about IYADMUN 2026
            </p>
        </div>

        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>


    <!-- ==================== FAQ CATEGORIES ==================== -->
    <section class="section" style="padding: 60px 0;" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- GENERAL QUESTIONS -->
                    <div class="mb-5" data-aos="fade-up">
                        <div class="d-flex align-items-center mb-4">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-info-circle" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <h2 class="fw-bold mb-0" style="color: var(--un-blue-dark);">General Questions</h2>
                        </div>

                        <div class="accordion" id="generalFAQ">
                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#g1">
                                        What is IYADMUN 2026?
                                    </button>
                                </h2>
                                <div id="g1" class="accordion-collapse collapse show" data-bs-parent="#generalFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        IYADMUN 2026 is the <strong>International Youth Model United Nations</strong> conference taking place in <strong>New York City in October 2026</strong>. In partnership with American Diplomats, we bring together 2,000+ young leaders from 50+ countries to debate critical global issues like preventing violent extremism and post-conflict peacebuilding.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#g2">
                                        When and where is the conference?
                                    </button>
                                </h2>
                                <div id="g2" class="accordion-collapse collapse" data-bs-parent="#generalFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>Dates:</strong> October 15-17, 2026 (3 days)<br>
                                        <strong>Location:</strong> Midtown Manhattan Conference Center, New York City, USA<br>
                                        <strong>Bonus:</strong> Exclusive UN Headquarters tour included!
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#g3">
                                        Who can attend IYADMUN 2026?
                                    </button>
                                </h2>
                                <div id="g3" class="accordion-collapse collapse" data-bs-parent="#generalFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        IYADMUN is open to <strong>high school and university students aged 15-25</strong> from all countries. No prior MUN experience required! We welcome both beginners (UNGA committee) and experienced delegates (PBC committee).
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#g4">
                                        Do I need MUN experience?
                                    </button>
                                </h2>
                                <div id="g4" class="accordion-collapse collapse" data-bs-parent="#generalFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>No!</strong> We have two committees: <strong>UNGA (Intermediate)</strong> for delegates with 0-2 MUN conferences, and <strong>PBC (Expert)</strong> for experienced delegates. We provide comprehensive study guides and training for all levels.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- REGISTRATION -->
                    <div class="mb-5" data-aos="fade-up">
                        <div class="d-flex align-items-center mb-4">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-user-plus" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <h2 class="fw-bold mb-0" style="color: var(--un-blue-dark);">Registration & Pricing</h2>
                        </div>

                        <div class="accordion" id="registrationFAQ">
                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#r1">
                                        How do I register?
                                    </button>
                                </h2>
                                <div id="r1" class="accordion-collapse collapse show" data-bs-parent="#registrationFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        Click the <strong>"Register Now"</strong> button, complete the registration form, select your committee preference, choose your package (Essential/Premium/VIP), and make payment. You'll receive confirmation within 24 hours!
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#r2">
                                        What's included in the registration fee?
                                    </button>
                                </h2>
                                <div id="r2" class="accordion-collapse collapse" data-bs-parent="#registrationFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>All packages include:</strong>
                                        <ul class="mt-2">
                                            <li>3 days of committee sessions</li>
                                            <li>UN Headquarters guided tour ($50 value)</li>
                                            <li>Opening & closing ceremonies</li>
                                            <li>Background study guides</li>
                                            <li>Official participation certificate</li>
                                            <li>Daily lunch & refreshments</li>
                                            <li>Delegate materials & badge</li>
                                            <li>Access to all social events</li>
                                            <li>Lifetime alumni network access</li>
                                        </ul>
                                        <strong>Premium & VIP packages include additional perks!</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#r3">
                                        When is the registration deadline?
                                    </button>
                                </h2>
                                <div id="r3" class="accordion-collapse collapse" data-bs-parent="#registrationFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>Early Bird Deadline:</strong> July 31, 2026 (save up to 30%!)<br>
                                        <strong>Regular Registration:</strong> August 1 - September 30, 2026<br>
                                        <strong>Final Deadline:</strong> September 30, 2026 (or when spots fill up)<br><br>
                                        <span style="color: #EF4444;"><strong>⚠️ Register early!</strong> Spots are limited and we sell out every year.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#r4">
                                        Are scholarships available?
                                    </button>
                                </h2>
                                <div id="r4" class="accordion-collapse collapse" data-bs-parent="#registrationFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>Yes!</strong> We offer:<br>
                                        <ul class="mt-2">
                                            <li><strong>Full Scholarships:</strong> 100% coverage (5 available)</li>
                                            <li><strong>Half Scholarships:</strong> 50% coverage (10 available)</li>
                                            <li><strong>Quarter Scholarships:</strong> 25% coverage (20 available)</li>
                                            <li><strong>Need-Based Aid:</strong> Up to 60% for developing nations</li>
                                        </ul>
                                        Apply via our <a href="contact.html">contact form</a> or email <a href="mailto:scholarships@iyadmun.org">scholarships@iyadmun.org</a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#r5">
                                        Can I pay in installments?
                                    </button>
                                </h2>
                                <div id="r5" class="accordion-collapse collapse" data-bs-parent="#registrationFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>Yes!</strong> We offer flexible payment plans. Split your payment into <strong>2-4 installments</strong> with no extra fees. Select this option during registration or contact us for a custom payment plan.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LOGISTICS -->
                    <div class="mb-5" data-aos="fade-up">
                        <div class="d-flex align-items-center mb-4">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-plane" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <h2 class="fw-bold mb-0" style="color: var(--un-blue-dark);">Travel & Accommodation</h2>
                        </div>

                        <div class="accordion" id="logisticsFAQ">
                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#l1">
                                        Is accommodation included?
                                    </button>
                                </h2>
                                <div id="l1" class="accordion-collapse collapse show" data-bs-parent="#logisticsFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        Accommodation is <strong>not included</strong> in the registration fee, but we've negotiated special rates at 3 partner hotels (starting from $99/night). <strong>VIP package</strong> includes accommodation assistance. See our <a href="venue.html">Venue page</a> for hotel options.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#l2">
                                        Do I need a visa to attend?
                                    </button>
                                </h2>
                                <div id="l2" class="accordion-collapse collapse" data-bs-parent="#logisticsFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        International delegates may need a <strong>B-2 Tourist Visa</strong> to enter the USA. We provide <strong>official invitation letters</strong> to support your visa application. Contact us after registration for your letter. Start the visa process early (3-4 months before).
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#l3">
                                        How do I get to the venue from the airport?
                                    </button>
                                </h2>
                                <div id="l3" class="accordion-collapse collapse" data-bs-parent="#logisticsFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>From JFK:</strong> AirTrain to subway (45 min, ~$10) or taxi/Uber ($60-80)<br>
                                        <strong>From LaGuardia:</strong> M60 bus to subway (35 min, ~$3) or taxi/Uber ($40-60)<br>
                                        <strong>From Newark:</strong> NJ Transit train (50 min, ~$15) or taxi/Uber ($70-90)<br><br>
                                        We'll send detailed transportation guides after registration!
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#l4">
                                        What should I pack?
                                    </button>
                                </h2>
                                <div id="l4" class="accordion-collapse collapse" data-bs-parent="#logisticsFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>Dress Code:</strong> Business formal/Western Business attire for committee sessions<br>
                                        <strong>Essentials:</strong>
                                        <ul class="mt-2">
                                            <li>2-3 suits or formal dresses</li>
                                            <li>Comfortable shoes (you'll walk a lot!)</li>
                                            <li>Laptop/tablet for research</li>
                                            <li>Notebook & pens</li>
                                            <li>Phone charger & adapters (US plugs)</li>
                                            <li>Light jacket (October can be cool)</li>
                                            <li>Personal medications</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CONFERENCE DETAILS -->
                    <div class="mb-5" data-aos="fade-up">
                        <div class="d-flex align-items-center mb-4">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #EF4444, #F87171); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-calendar-check" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <h2 class="fw-bold mb-0" style="color: var(--un-blue-dark);">Conference Schedule</h2>
                        </div>

                        <div class="accordion" id="scheduleFAQ">
                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#s1">
                                        What's the daily schedule?
                                    </button>
                                </h2>
                                <div id="s1" class="accordion-collapse collapse show" data-bs-parent="#scheduleFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>Day 1 (Oct 15):</strong>
                                        <ul>
                                            <li>9:00 AM - Registration & Opening Ceremony</li>
                                            <li>11:00 AM - First Committee Session</li>
                                            <li>1:00 PM - Lunch Break</li>
                                            <li>2:30 PM - Second Committee Session</li>
                                            <li>6:00 PM - Welcome Networking Dinner</li>
                                        </ul>

                                        <strong>Day 2 (Oct 16):</strong>
                                        <ul>
                                            <li>9:00 AM - UN Headquarters Tour</li>
                                            <li>12:00 PM - Lunch & Diplomacy Workshop</li>
                                            <li>2:00 PM - Committee Sessions Continue</li>
                                            <li>7:00 PM - Cultural Night</li>
                                        </ul>

                                        <strong>Day 3 (Oct 17):</strong>
                                        <ul>
                                            <li>9:00 AM - Final Committee Sessions</li>
                                            <li>12:00 PM - Voting & Resolutions</li>
                                            <li>2:00 PM - Closing Ceremony & Awards</li>
                                            <li>4:00 PM - Farewell Reception</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#s2">
                                        Can I choose my country assignment?
                                    </button>
                                </h2>
                                <div id="s2" class="accordion-collapse collapse" data-bs-parent="#scheduleFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        You can list <strong>3 country preferences</strong> during registration, and we'll do our best to accommodate. Countries are assigned on a <strong>first-come, first-served</strong> basis. Premium & VIP packages get <strong>priority selection</strong>. Final assignments are sent 4 weeks before the conference.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#s3">
                                        Will study guides be provided?
                                    </button>
                                </h2>
                                <div id="s3" class="accordion-collapse collapse" data-bs-parent="#scheduleFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>Yes!</strong> Comprehensive background guides for both committees will be sent <strong>6 weeks before the conference</strong>. They include topic overviews, country positions, key terms, and research resources. We also provide links to useful articles and videos.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#s4">
                                        What language is used?
                                    </button>
                                </h2>
                                <div id="s4" class="accordion-collapse collapse" data-bs-parent="#scheduleFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        All sessions are conducted in <strong>English</strong>, following official UN procedures. Delegates should have <strong>intermediate to advanced English proficiency</strong> to participate effectively in debates, negotiations, and resolution writing.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COVID & SAFETY -->
                    <div class="mb-5" data-aos="fade-up">
                        <div class="d-flex align-items-center mb-4">
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #8B5CF6, #A78BFA); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-shield-alt" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <h2 class="fw-bold mb-0" style="color: var(--un-blue-dark);">Health & Safety</h2>
                        </div>

                        <div class="accordion" id="safetyFAQ">
                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#h1">
                                        What safety measures are in place?
                                    </button>
                                </h2>
                                <div id="h1" class="accordion-collapse collapse show" data-bs-parent="#safetyFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <ul>
                                            <li>Professional security at venue</li>
                                            <li>24/7 emergency hotline for delegates</li>
                                            <li>On-site medical team</li>
                                            <li>Travel insurance recommended (not provided)</li>
                                            <li>Code of conduct strictly enforced</li>
                                            <li>Chaperones for under-18 delegates</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#h2">
                                        What's your refund policy?
                                    </button>
                                </h2>
                                <div id="h2" class="accordion-collapse collapse" data-bs-parent="#safetyFAQ">
                                    <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                        <strong>Full refund:</strong> If cancelled 60+ days before event<br>
                                        <strong>50% refund:</strong> If cancelled 30-59 days before event<br>
                                        <strong>No refund:</strong> If cancelled within 30 days of event<br><br>
                                        Refunds processed within 14 business days. If the conference is cancelled by organizers, <strong>100% refund guaranteed</strong>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ==================== STILL HAVE QUESTIONS ==================== -->
    <section class="section" style="background: linear-gradient(135deg, #001F3F 0%, #0A72B5 100%);">
        <div class="container">
            <div class="text-center" data-aos="zoom-in">
                <h2 class="display-4 fw-bold text-white mb-4">
                    Still Have Questions? 💬
                </h2>
                <p class="lead text-white mb-5" style="opacity: 0.95; max-width: 700px; margin: 0 auto;">
                    Our team is here to help! Contact us and we'll get back to you within 24 hours.
                </p>

                <div class="row g-4 justify-content-center mb-5">
                    <div class="col-md-4">
                        <div class="p-4 rounded-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                            <i class="fas fa-envelope" style="font-size: 3rem; color: #FFD700;"></i>
                            <h5 class="text-white fw-bold mt-3 mb-2">Email Us</h5>
                            <a href="mailto:info@iyadmun.org" class="text-white" style="text-decoration: none;">info@iyadmun.org</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-4 rounded-4" style="background: rgba(255, 215, 0, 0.15); backdrop-filter: blur(10px); border: 2px solid rgba(255, 215, 0, 0.5);">
                            <i class="fab fa-whatsapp" style="font-size: 3rem; color: #10B981;"></i>
                            <h5 class="text-white fw-bold mt-3 mb-2">WhatsApp</h5>
                            <a href="https://wa.me/19175130904" class="text-white" style="text-decoration: none;">+1 (917) 513-0904</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-4 rounded-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                            <i class="fas fa-comment-dots" style="font-size: 3rem; color: #4A90E2;"></i>
                            <h5 class="text-white fw-bold mt-3 mb-2">Live Chat</h5>
                            <p class="text-white mb-0">Mon-Fri 9AM-6PM EST</p>
                        </div>
                    </div>
                </div>

                <a href="contact.html" class="btn-primary-custom">
                    Contact Us
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>


    @endsection
