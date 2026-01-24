@extends('front.layouts.master')


@section('title','IYADMUN 2026 | International Youth Diplomacy Conference - New York')
@section('content')
<!-- ==================== HERO SECTION ==================== -->
<div class="hero-wrapper">
    <!-- Background Slider -->
    <div class="hero-slider">
        <div class="hero-slide active"
            style="background-image: url('{{ asset('assets/uploads/content/home/'.$content['hero_img1']) }}?w=1920&q=80');">
        </div>
        <div class="hero-slide"
            style="background-image: url('{{ asset('assets/uploads/content/home/'.$content['hero_img2']) }}?w=1920&q=80');">
        </div>

        <div class="hero-slide"
            style="background-image: url('{{ asset('assets/uploads/content/home/'.$content['hero_img3']) }}?w=1920&q=80');">
        </div>
    </div>

    <!-- Overlay -->
    <div class="hero-overlay"></div>

    <!-- Content -->
    <div class="hero-content">
        <div class="hero-badge fade-in-up">
            {{ $content->getTranslation('hero_first_title',app()->getLocale()) }}
        </div>

        <h1 class="hero-title fade-in-up">
            <?php
               // جيب الجملة كاملة من الداتابيز
        $subTitle = $content->getTranslation('hero_main_title', app()->getLocale());

        // فصل الكلمات إلى array
        $words = explode(' ', trim($subTitle));

        // عدد الكلمات
        $wordCount = count($words);

        // لو فيه كلمتين أو أكتر، خد آخر كلمتين
        if ($wordCount >= 2) {
            $lastWord1 = $words[$wordCount - 3];  // Global
            $lastWord2 = $words[$wordCount - 2];  // Global
            $lastWord3 = $words[$wordCount - 1];  // Dialogue

            // الجزء الأول من الجملة (كل الكلمات ما عدا آخر كلمتين)
            $firstPart = implode(' ', array_slice($words, 0, $wordCount - 3));
        } else {
            // لو الجملة أقل من كلمتين (نادر)، خليها كلها أول جزء
            $firstPart = $subTitle;
            $lastWord1 = '';
            $lastWord2 = '';
            $lastWord3 = '';
        }
                ?>
            {!! !empty($firstPart) ? $firstPart : '' !!}
            {{-- <br> --}}
            {{ $lastWord1 }} <span class="gradient-text">{{ $lastWord2 }} {{ $lastWord3 }}</span>

        </h1>

        <p class="hero-subtitle fade-in-up">
            {{ $content->getTranslation('hero_p',app()->getLocale()) }}
        </p>

        <div class="hero-location fade-in-up">
            <span> {{ $content->getTranslation('hero_city',app()->getLocale()) }} </span>
            <span> {{ $content->getTranslation('hero_date',app()->getLocale()) }} </span>
        </div>

        <div class="hero-countdown fade-in-up" id="countdown">
            <div class="countdown-item">
                <span class="countdown-number" id="days">00</span>
                <span class="countdown-label">Days</span>
            </div>
            <div class="countdown-separator">:</div>
            <div class="countdown-item">
                <span class="countdown-number" id="hours">00</span>
                <span class="countdown-label">Hours</span>
            </div>
            <div class="countdown-separator">:</div>
            <div class="countdown-item">
                <span class="countdown-number" id="minutes">00</span>
                <span class="countdown-label">Minutes</span>
            </div>
            <div class="countdown-separator">:</div>
            <div class="countdown-item">
                <span class="countdown-number" id="seconds">00</span>
                <span class="countdown-label">Seconds</span>
            </div>
        </div>

        <div class="hero-buttons fade-in-up">
            <a href="{{ route('front.register') }}" class="btn-primary-custom">
                Register Now
                <i class="fas fa-arrow-right"></i>
            </a>
            <a href="{{ route('front.pricing') }}" class="btn-secondary-custom">
                View Packages
                <i class="fas fa-ticket-alt"></i>
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    {{-- <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
    </div> --}}
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
        <h2 class="section-title" data-aos="fade-up"> {{ $content->getTranslation('conference_title',app()->getLocale())
            }} </h2>
        <p class=" text-center mb-5 section-subtitle"
            style="max-width: 700px; margin-left: auto; margin-right: auto; opacity: 0.95;" data-aos="fade-up"
            data-aos-delay="100">
            {{ $content->getTranslation('conference_p',app()->getLocale()) }}
        </p>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card-custom text-center"
                    style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 2px solid rgba(255, 215, 0, 0.3); transform: perspective(1000px); transition: all 0.4s ease;">
                    <div
                        style="background: linear-gradient(135deg, #FFD700, #FFA500); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);">
                        <span style="font-size: 2.5rem;">🌍</span>
                    </div>
                    <h3 class="card-title"> {{ $content->getTranslation('conference_step_title1',app()->getLocale()) }}
                    </h3>
                    <p class="card-text"> {{ $content->getTranslation('conference_step_p1',app()->getLocale()) }} </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card-custom text-center"
                    style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 2px solid rgba(74, 144, 226, 0.3);">
                    <div
                        style="background: linear-gradient(135deg, #4A90E2, #0A72B5); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(74, 144, 226, 0.4);">
                        <span style="font-size: 2.5rem;">🎓</span>
                    </div>
                    <h3 class="card-title"> {{ $content->getTranslation('conference_step_title2',app()->getLocale()) }}
                    </h3>
                    <p class="card-text"> {{ $content->getTranslation('conference_step_p2',app()->getLocale()) }} </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card-custom text-center"
                    style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 2px solid rgba(16, 185, 129, 0.3);">
                    <div
                        style="background: linear-gradient(135deg, #10B981, #34D399); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);">
                        <span style="font-size: 2.5rem;">🏛️</span>
                    </div>
                    <h3 class="card-title"> {{ $content->getTranslation('conference_step_title3',app()->getLocale()) }}
                    </h3>
                    <p class="card-text"> {{ $content->getTranslation('conference_step_p3',app()->getLocale()) }} </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="card-custom text-center"
                    style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border: 2px solid rgba(239, 68, 68, 0.3);">
                    <div
                        style="background: linear-gradient(135deg, #EF4444, #F87171); width: 80px; height: 80px; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 10px 30px rgba(239, 68, 68, 0.4);">
                        <span style="font-size: 2.5rem;">🏆</span>
                    </div>
                    <h3 class="card-title"> {{ $content->getTranslation('conference_step_title4',app()->getLocale()) }}
                    </h3>
                    <p class="card-text"> {{ $content->getTranslation('conference_step_p4',app()->getLocale()) }} </p>
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
            <div class="col-lg-6 mb-4 mb-lg-0 text-white" data-aos="fade-up">
                <h2 class="display-3 fw-bold mb-4"> {{ $content->getTranslation('why_title',app()->getLocale()) }} </h2>
                <p class="lead mb-4" style="font-size: 1.4rem;">
                    {{ $content->getTranslation('why_p',app()->getLocale()) }}
                </p>

                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex align-items-start p-4 rounded-4"
                            style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                            <div class="me-3" style="font-size: 3rem;">🏛️</div>
                            <div>
                                <h5 class="fw-bold mb-2"> {{
                                    $content->getTranslation('why_step_title1',app()->getLocale()) }} </h5>
                                <p class="mb-0" style="opacity: 0.9;"> {{
                                    $content->getTranslation('why_step_p1',app()->getLocale()) }} </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex align-items-start p-4 rounded-4"
                            style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                            <div class="me-3" style="font-size: 3rem;">🌆</div>
                            <div>
                                <h5 class="fw-bold mb-2"> {{
                                    $content->getTranslation('why_step_title2',app()->getLocale()) }} </h5>
                                <p class="mb-0" style="opacity: 0.9;"> {{
                                    $content->getTranslation('why_step_p2',app()->getLocale()) }} </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex align-items-start p-4 rounded-4"
                            style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                            <div class="me-3" style="font-size: 3rem;">🎯</div>
                            <div>
                                <h5 class="fw-bold mb-2"> {{
                                    $content->getTranslation('why_step_title3',app()->getLocale()) }} </h5>
                                <p class="mb-0" style="opacity: 0.9;"> {{
                                    $content->getTranslation('why_step_p3',app()->getLocale()) }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up">
                <div class="text-center text-white p-2 rounded-4"
                    style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                    <div style="font-size: 8rem; margin-bottom: 1rem;">🗽</div>
                    <h3 class="display-5 fw-bold mb-3"> {{ $content->getTranslation('why_main_title',app()->getLocale())
                        }} </h3>
                    <p class="lead" style="opacity: 0.9;">
                        {{ $content->getTranslation('why_main_p',app()->getLocale()) }}
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
                    <div class="counter" data-target="{{ $content->number1 }}">{{ $content->number1 }}</div>
                    <h5>{{ $content->getTranslation('number1_title',app()->getLocale()) }}</h5>
                </div>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="stats-card">
                    <div class="counter" data-target="{{ $content->number2 }}">{{ $content->number2 }}</div>
                    <h5>{{ $content->getTranslation('number2_title',app()->getLocale()) }}</h5>
                </div>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="stats-card">
                    <div class="counter" data-target="{{ $content->number3 }}">{{ $content->number3 }}</div>
                    <h5>{{ $content->getTranslation('number3_title',app()->getLocale()) }}</h5>
                </div>
            </div>

            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="500">
                <div class="stats-card">
                    <div class="counter" data-target="{{ $content->number4 }}">{{ $content->number4 }}</div>
                    <h5>{{ $content->getTranslation('number4_title',app()->getLocale()) }}</h5>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set the date we're counting down to
        const countDownDate = new Date("{{ $content->event_date }}").getTime();

        // Update the count down every 1 second
        const x = setInterval(function() {

            // Get today's date and time
            const now = new Date().getTime();

            // Find the distance between now and the count down date
            const distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            // Add padding with '0' for single digits
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days").innerHTML = (days < 10 && days >= 0) ? "0" + days : days;
            document.getElementById("hours").innerHTML = (hours < 10 && hours >= 0) ? "0" + hours : hours;
            document.getElementById("minutes").innerHTML = (minutes < 10 && minutes >= 0) ? "0" + minutes : minutes;
            document.getElementById("seconds").innerHTML = (seconds < 10 && seconds >= 0) ? "0" + seconds : seconds;

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "<div class='text-white text-center h4 mb-0'>Conference Has Started!</div>";
            }
        }, 1000);
    });
</script>
@endsection
