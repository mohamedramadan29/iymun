@extends('front.layouts.master')

@section('title', 'Contact Us | IYADMUN 2026 - Get in Touch')

@section('content')
<!-- ==================== PAGE HERO ==================== -->
<section class="hero-wrapper" style="height: 70vh; min-height: 500px;">
    <div class="hero-slider">
        <div class="hero-slide active"
            style="background-image: url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920&q=80');">
        </div>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-badge fade-in-up">
            Get in Touch
        </div>

        <h1 class="hero-title fade-in-up">
            We're Here to<br>
            <span class="gradient-text">Help You</span>
        </h1>

        <p class="hero-subtitle fade-in-up" style="max-width: 900px; margin: 0 auto;">
            Have questions? Our team is ready to assist you with registration, scholarships, visas, and more.
        </p>
    </div>

    <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- ==================== CONTACT METHODS ==================== -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Multiple Ways to Reach Us</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                Choose the method that works best for you
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(74, 144, 226, 0.3);">
                        <i class="fas fa-envelope" style="font-size: 2rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">Email Us</h4>
                    <p class="card-text mb-3">Response within 24 hours</p>
                    <a href="mailto:{{ $setting->email }}" class="fw-bold"
                        style="color: var(--un-blue); text-decoration: none;">{{ $setting->email }}</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom text-center h-100" style="border: 3px solid #10B981;">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);">
                        <i class="fab fa-whatsapp" style="font-size: 2rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">WhatsApp</h4>
                    <p class="card-text mb-3">Instant messaging</p>
                    <a href="https://wa.me/{{ $setting->phone }}" class="fw-bold d-block mb-1"
                        style="color: #10B981; text-decoration: none;">{{ $setting->phone }}</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card-custom text-center h-100">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(255, 215, 0, 0.3);">
                        <i class="fas fa-phone-alt" style="font-size: 2rem; color: white;"></i>
                    </div>
                    <h4 class="card-title">Call Us</h4>
                    <p class="card-text mb-3">Mon-Fri 9AM-6PM EST</p>
                    <a href="tel:{{ $setting->phone }}" class="fw-bold"
                        style="color: var(--un-blue); text-decoration: none;">{{ $setting->phone }} </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CONTACT FORM ==================== -->
<section class="section section-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="section-title" data-aos="fade-up">Send Us a Message</h2>
                    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                        Fill out the form below and we'll get back to you within 24 hours
                    </p>
                </div>

                <div class="card-custom" data-aos="fade-up" data-aos-delay="200">
                    <form class="needs-validation" action="{{ route('front.contact.send') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label for="fullName" class="form-label fw-bold">Full Name <span
                                        style="color: #EF4444;">*</span></label>
                                <input type="text" class="form-control form-control-lg rounded-3" id="fullName"
                                    name="name" required>
                                <div class="invalid-feedback">Please provide your full name.</div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold">Email Address <span
                                        style="color: #EF4444;">*</span></label>
                                <input type="email" class="form-control form-control-lg rounded-3" id="email"
                                    name="email" required>
                                <div class="invalid-feedback">Please provide a valid email.</div>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-bold">Phone Number</label>
                                <input type="tel" class="form-control form-control-lg rounded-3" id="phone" name="phone"
                                    placeholder="+1 (555) 123-4567">
                            </div>
                            <!-- Subject -->
                            <div class="col-12">
                                <label for="subject" class="form-label fw-bold">Subject <span
                                        style="color: #EF4444;">*</span></label>
                                <select class="form-select form-select-lg rounded-3" id="subject" name="subject"
                                    required>
                                    <option value="">Select a topic</option>
                                    <option value="Registration">Registration Question</option>
                                    <option value="Pricing">Pricing & Payment</option>
                                    <option value="Scholarship">Scholarship Application</option>
                                    <option value="Visa">Visa Support Letter</option>
                                    <option value="Accommodation">Accommodation</option>
                                    <option value="Committee">Committee Selection</option>
                                    <option value="Partnership">Partnership Inquiry</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="invalid-feedback">Please select a subject.</div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <label for="message" class="form-label fw-bold">Your Message <span
                                        style="color: #EF4444;">*</span></label>
                                <textarea class="form-control rounded-3" id="message" rows="6" name="message" required
                                    placeholder="Tell us how we can help you..."></textarea>
                                <div class="invalid-feedback">Please write your message.</div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-lg rounded-pill px-5 w-100"
                                    style="background: linear-gradient(135deg, #FFD700, #FFA500); color: white; font-weight: 700; box-shadow: 0 10px 30px rgba(255, 215, 0, 0.3);">
                                    Send Message
                                    <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== OFFICE INFO ==================== -->
<section class="section" style="background: linear-gradient(135deg, #001F3F 0%, #0A72B5 100%);">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-up">
                <h2 class="display-4 fw-bold text-white mb-4">
                    Our Office 🏢
                </h2>
                <p class="lead text-white mb-5" style="opacity: 0.95; line-height: 1.9;">
                    While we operate globally, our main coordination office is located in New York City to ensure
                    seamless planning for the conference.
                </p>

                <div class="mb-4">
                    <div class="d-flex align-items-start mb-4">
                        <div
                            style="width: 60px; height: 60px; background: rgba(255, 215, 0, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                            <i class="fas fa-map-marker-alt" style="font-size: 1.8rem; color: #FFD700;"></i>
                        </div>
                        <div>
                            <h5 class="text-white fw-bold mb-2">Address</h5>
                            <p class="text-white mb-0" style="opacity: 0.9;">
                                {{ $setting->full_address }}
                            </p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        {{-- <div
                            style="width: 60px; height: 60px; background: rgba(255, 215, 0, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                            <i class="fas fa-clock" style="font-size: 1.8rem; color: #FFD700;"></i>
                        </div> --}}
                        {{-- <div>
                            <h5 class="text-white fw-bold mb-2">Office Hours</h5>
                            <p class="text-white mb-0" style="opacity: 0.9;">
                                Monday - Friday: 9:00 AM - 6:00 PM EST<br>
                                Saturday: 10:00 AM - 2:00 PM EST<br>
                                Sunday: Closed
                            </p>
                        </div> --}}
                    </div>

                    <div class="d-flex align-items-start">
                        <div
                            style="width: 60px; height: 60px; background: rgba(255, 215, 0, 0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1.5rem;">
                            <i class="fas fa-globe" style="font-size: 1.8rem; color: #FFD700;"></i>
                        </div>
                        <div>
                            <h5 class="text-white fw-bold mb-2">Social Media</h5>
                            <div class="d-flex gap-3 mt-3">
                                @if($setting?->facebook_url) <a style="background: rgba(255, 215, 0, 0.2);"
                                    href="{{ $setting->facebook_url }}" class="social-link"><i
                                        class="fab fa-facebook-f"></i></a> @endif
                                @if($setting?->instagram_url) <a style="background: rgba(255, 215, 0, 0.2);"
                                    href="{{ $setting->instagram_url }}" class="social-link"><i
                                        class="fab fa-instagram"></i></a> @endif
                                @if($setting?->x_url) <a style="background: rgba(255, 215, 0, 0.2);"
                                    href="{{ $setting->x_url }}" class="social-link"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if($setting?->linkedin_url) <a style="background: rgba(255, 215, 0, 0.2);"
                                    href="{{ $setting->linkedin_url }}" class="social-link"><i
                                        class="fab fa-linkedin-in"></i></a> @endif
                                @if($setting?->youtube_url) <a style="background: rgba(255, 215, 0, 0.2);"
                                    href="{{ $setting->youtube_url }}" class="social-link"><i
                                        class="fab fa-youtube"></i></a> @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up">
                <div class="rounded-5 overflow-hidden" style="box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);">
                 

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.4420962915165!2d-73.97929992403733!3d40.75230017138763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2590228afbc85%3A0x7f2fdbdad8fc999b!2s123%20Park%20Ave%20%23500%2C%20New%20York%2C%20NY%2010170%2C%20USA!5e0!3m2!1sen!2seg!4v1769292111300!5m2!1sen!2seg"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== FAQ LINK ==================== -->
<section class="section">
    <div class="container">
        <div class="text-center" data-aos="zoom-in">
            <div class="p-5 rounded-5"
                style="background: linear-gradient(135deg, rgba(74, 144, 226, 0.1), rgba(10, 114, 181, 0.05)); border: 3px solid #4A90E2;">
                <i class="fas fa-question-circle mb-4" style="font-size: 5rem; color: #4A90E2;"></i>
                <h2 class="display-5 fw-bold mb-4" style="color: var(--un-blue-dark);">
                    Looking for Quick Answers?
                </h2>
                <p class="lead mb-5" style="color: var(--gray); max-width: 700px; margin: 0 auto;">
                    Check out our comprehensive FAQ page for instant answers to common questions about registration,
                    pricing, travel, and more.
                </p>
                <a href="{{ route('front.faq') }}" class="btn btn-lg rounded-pill px-5"
                    style="background: linear-gradient(135deg, #4A90E2, #0A72B5); color: white; font-weight: 700;">
                    Visit FAQ Page
                    <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>


@endsection
