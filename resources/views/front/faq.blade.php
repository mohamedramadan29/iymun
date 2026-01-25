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


    <!-- ==================== FAQ SECTIONS ==================== -->
    <section class="section" style="padding: 60px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    @php
                        $categories = [
                            'general' => ['title' => 'General Questions', 'icon' => 'fas fa-info-circle', 'bg' => 'linear-gradient(135deg, #4A90E2, #0A72B5)'],
                            'registration' => ['title' => 'Registration & Pricing', 'icon' => 'fas fa-user-plus', 'bg' => 'linear-gradient(135deg, #10B981, #34D399)'],
                            'logistics' => ['title' => 'Travel & Accommodation', 'icon' => 'fas fa-plane', 'bg' => 'linear-gradient(135deg, #FFD700, #FFA500)'],
                            'schedule' => ['title' => 'Conference Schedule', 'icon' => 'fas fa-calendar-check', 'bg' => 'linear-gradient(135deg, #EF4444, #F87171)'],
                            'safety' => ['title' => 'Health & Safety', 'icon' => 'fas fa-shield-alt', 'bg' => 'linear-gradient(135deg, #8B5CF6, #A78BFA)'],
                        ];
                    @endphp

                    @foreach($categories as $key => $cat)
                        @if(isset($faqs[$key]))
                            <div class="mb-5" data-aos="fade-up">
                                <div class="d-flex align-items-center mb-4">
                                    <div style="width: 60px; height: 60px; background: {{ $cat['bg'] }}; border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                        <i class="{{ $cat['icon'] }}" style="font-size: 2rem; color: white;"></i>
                                    </div>
                                    <h2 class="fw-bold mb-0" style="color: var(--un-blue-dark);">{{ $cat['title'] }}</h2>
                                </div>

                                <div class="accordion" id="{{ $key }}FAQ">
                                    @foreach($faqs[$key] as $index => $faq)
                                        <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }} rounded-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $key . $index }}">
                                                    {{ $faq->question }}
                                                </button>
                                            </h2>
                                            <div id="{{ $key . $index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" data-bs-parent="#{{ $key }}FAQ">
                                                <div class="accordion-body" style="font-size: 1.05rem; line-height: 1.9;">
                                                    {!! $faq->answer !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach

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
