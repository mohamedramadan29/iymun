@extends('front.layouts.master')

@section('title', 'Register Now | IYMUN 2026 - Secure Your Spot')
@section('css')
<style>
    .call_to_action {
        display: none;
    }
</style>
@endsection

@section('content')

<!-- ==================== PAGE HERO ==================== -->
<section class="hero-wrapper" style="height: 60vh; min-height: 400px;">
    <div class="hero-slider">
        <div class="hero-slide active"
            style="background-image: url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1920&q=80');">
        </div>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-badge fade-in-up">
            🎯 Limited Spots Available
        </div>

        <h1 class="hero-title fade-in-up" style="font-size: 4rem;">
            <span class="gradient-text"> Registration </span>
        </h1>

        <p class="hero-subtitle fade-in-up" style="max-width: 900px; margin: 0 auto;">
            Secure your spot at IYMUN & American Diplomats MUN 2026
        </p>
    </div>
</section>

<!-- ==================== REGISTRATION STEPS ==================== -->
<section class="section" style="padding: 60px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" data-aos="fade-up">Registration Process</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                4 simple steps to join IYMUN 2026
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(255, 215, 0, 0.1), rgba(255, 165, 0, 0.05)); border: 2px solid #FFD700;">
                    <div
                        style="width: 60px; height: 60px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: 900; color: white;">
                        1
                    </div>
                    <h5 class="fw-bold mb-3">Personal Info</h5>
                    <p style="color: var(--gray);">Fill in your details and select committee</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(74, 144, 226, 0.1), rgba(10, 114, 181, 0.05)); border: 2px solid #4A90E2;">
                    <div
                        style="width: 60px; height: 60px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: 900; color: white;">
                        2
                    </div>
                    <h5 class="fw-bold mb-3">Choose Package</h5>
                    <p style="color: var(--gray);">Essential, Premium, or VIP</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(52, 211, 153, 0.05)); border: 2px solid #10B981;">
                    <div
                        style="width: 60px; height: 60px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: 900; color: white;">
                        3
                    </div>
                    <h5 class="fw-bold mb-3">Payment</h5>
                    <p style="color: var(--gray);">Secure online payment or installments</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="text-center p-4 rounded-4 h-100"
                    style="background: linear-gradient(135deg, rgba(239, 68, 68, 0.1), rgba(248, 113, 113, 0.05)); border: 2px solid #EF4444;">
                    <div
                        style="width: 60px; height: 60px; background: linear-gradient(135deg, #EF4444, #F87171); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: 900; color: white;">
                        4
                    </div>
                    <h5 class="fw-bold mb-3">Confirmation</h5>
                    <p style="color: var(--gray);">Receive confirmation & materials</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== REGISTRATION FORM ==================== -->
<section class="section section-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card-custom" data-aos="fade-up">
                    <div class="text-center mb-5">
                        <h2 class="display-5 fw-bold mb-3" style="color: var(--un-blue-dark);">
                            Registration Form
                        </h2>
                        <div class="alert alert-warning d-inline-block" style="border-radius: 15px;">
                            <i class="fas fa-fire me-2"></i>
                            <strong>Early Bird Pricing Ends:</strong> July 31, 2026 - Save up to 30%!
                        </div>
                    </div>

                    <form class="needs-validation" method="post" action="{{ route('front.register.post') }}">

                        <!-- STEP 1: PERSONAL INFORMATION -->
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1.5rem; font-weight: 900; color: white;">1</span>
                                </div>
                                <h3 class="fw-bold mb-0" style="color: var(--un-blue-dark);">Personal Information
                                </h3>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold"> Full Name <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" name="name" class="form-control form-control-lg rounded-3" required value="{{ old('name') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Email Address <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="email" name="email" class="form-control form-control-lg rounded-3" required value="{{ old('email') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold"> Country <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" name="country" class="form-control form-control-lg rounded-3" required value="{{ old('country') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Date of Birth <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="date" name="birthdate" class="form-control form-control-lg rounded-3" required value="{{ old('birthdate') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Phone Number <span
                                            style="color: #EF4444;">*</span></label>
                                    <input name="phone" type="tel" class="form-control form-control-lg rounded-3"
                                        placeholder="+1 (555) 123-4567" required value="{{ old('phone') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold"> Institution/School <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" name="school" class="form-control form-control-lg rounded-3" required value="{{ old('school') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold"> Password To Login <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="password" class="form-control form-control-lg rounded-3" required>
                                </div>
                                {{--
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Gender <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" required>
                                        <option value="">Select gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                        <option>Prefer not to say</option>
                                    </select>
                                </div> --}}

                                {{-- <div class="col-md-6">
                                    <label class="form-label fw-bold">Nationality <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3"
                                        placeholder="e.g., American" required>
                                </div> --}}
                                {{--
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Country of Residence <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" required>
                                        <option value="">Select country</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>Canada</option>
                                        <option>Egypt</option>
                                        <option>UAE</option>
                                        <option>Saudi Arabia</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Passport Number</label>
                                    <input type="text" class="form-control form-control-lg rounded-3"
                                        placeholder="Required for visa invitation letter">
                                    <small class="text-muted">Optional now, required later for international
                                        delegates</small>
                                </div> --}}
                            </div>
                        </div>

                        <!-- STEP 2: ACADEMIC INFORMATION -->
                        <div class="mb-5 d-none">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1.5rem; font-weight: 900; color: white;">2</span>
                                </div>
                                <h3 class="fw-bold mb-0" style="color: var(--un-blue-dark);">Academic Information
                                </h3>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Educational Level <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" required>
                                        <option value="">Select level</option>
                                        <option>High School Student</option>
                                        <option>Undergraduate Student</option>
                                        <option>Graduate Student</option>
                                        <option>Recent Graduate</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">School/University Name <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Year of Study <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" required>
                                        <option value="">Select year</option>
                                        <option>Year 1</option>
                                        <option>Year 2</option>
                                        <option>Year 3</option>
                                        <option>Year 4</option>
                                        <option>Year 5+</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Field of Study</label>
                                    <input type="text" class="form-control form-control-lg rounded-3"
                                        placeholder="e.g., International Relations">
                                </div>
                            </div>
                        </div>

                        <!-- STEP 3: MUN EXPERIENCE -->
                        <div class="mb-5 d-none">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1.5rem; font-weight: 900; color: white;">3</span>
                                </div>
                                <h3 class="fw-bold mb-0" style="color: var(--un-blue-dark);">MUN Experience &
                                    Committee</h3>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">MUN Experience Level <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="munExperience" required>
                                        <option value="">Select experience</option>
                                        <option>First time (0 conferences)</option>
                                        <option>Beginner (1-2 conferences)</option>
                                        <option>Intermediate (3-5 conferences)</option>
                                        <option>Advanced (6+ conferences)</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Committee Preference <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="committee" required>
                                        <option value="">Select committee</option>
                                        <option value="UNGA">UN General Assembly (Intermediate)</option>
                                        <option value="PBC">UN Peacebuilding Commission (Expert)</option>
                                    </select>
                                    <small class="text-muted">Choose based on your experience level</small>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Country Preferences <span
                                            style="color: #EF4444;">*</span></label>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control form-control-lg rounded-3"
                                                placeholder="1st Choice" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control form-control-lg rounded-3"
                                                placeholder="2nd Choice">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control form-control-lg rounded-3"
                                                placeholder="3rd Choice">
                                        </div>
                                    </div>
                                    <small class="text-muted">We'll assign countries based on availability and your
                                        preferences</small>
                                </div>
                            </div>
                        </div>

                        <!-- STEP 4: PACKAGE SELECTION -->
                        <div class="mb-5 d-none">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #EF4444, #F87171); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1.5rem; font-weight: 900; color: white;">4</span>
                                </div>
                                <h3 class="fw-bold mb-0" style="color: var(--un-blue-dark);">Select Your Package
                                </h3>
                            </div>

                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <input type="radio" class="btn-check" name="package" id="essential" value="449"
                                        required>
                                    <label class="card-custom text-center h-100 position-relative" for="essential"
                                        style="cursor: pointer; border: 3px solid #e0e0e0;">
                                        <h4 class="fw-bold mb-3">Essential Delegate</h4>
                                        <div class="mb-3">
                                            <small
                                                style="text-decoration: line-through; color: var(--gray);">$599</small>
                                            <div style="font-size: 3rem; font-weight: 900; color: var(--un-blue);">
                                                $449</div>
                                            <div class="badge bg-success px-3 py-2">Save $150</div>
                                        </div>
                                        <ul class="text-start" style="font-size: 0.95rem;">
                                            <li>✅ All conference sessions</li>
                                            <li>✅ UN HQ tour</li>
                                            <li>✅ Official certificate</li>
                                            <li>✅ Study materials</li>
                                        </ul>
                                    </label>
                                </div>

                                <div class="col-lg-4">
                                    <input type="radio" class="btn-check" name="package" id="premium" value="649">
                                    <label class="card-custom text-center h-100 position-relative" for="premium"
                                        style="cursor: pointer; border: 4px solid #FFD700; transform: scale(1.05);">
                                        <div
                                            style="position: absolute; top: -15px; right: 10px; background: linear-gradient(135deg, #EF4444, #F87171); color: white; padding: 0.4rem 1rem; border-radius: 20px; font-weight: 700; font-size: 0.9rem;">
                                            🔥 POPULAR
                                        </div>
                                        <h4 class="fw-bold mb-3">Premium Diplomat</h4>
                                        <div class="mb-3">
                                            <small
                                                style="text-decoration: line-through; color: var(--gray);">$899</small>
                                            <div style="font-size: 3rem; font-weight: 900; color: #FFD700;">$649
                                            </div>
                                            <div class="badge bg-success px-3 py-2">Save $250</div>
                                        </div>
                                        <ul class="text-start" style="font-size: 0.95rem;">
                                            <li>✅ Everything in Essential</li>
                                            <li>👑 VIP networking dinner</li>
                                            <li>👑 Diplomacy workshop</li>
                                            <li>👑 Priority selection</li>
                                        </ul>
                                    </label>
                                </div>

                                <div class="col-lg-4">
                                    <input type="radio" class="btn-check" name="package" id="vip" value="949">
                                    <label class="card-custom text-center h-100 position-relative" for="vip"
                                        style="cursor: pointer; border: 3px solid #8B5CF6;">
                                        <h4 class="fw-bold mb-3">VIP Ambassador</h4>
                                        <div class="mb-3">
                                            <small
                                                style="text-decoration: line-through; color: var(--gray);">$1,299</small>
                                            <div style="font-size: 3rem; font-weight: 900; color: #8B5CF6;">$949
                                            </div>
                                            <div class="badge bg-success px-3 py-2">Save $350</div>
                                        </div>
                                        <ul class="text-start" style="font-size: 0.95rem;">
                                            <li>✅ Everything in Premium</li>
                                            <li>💎 Meet diplomats privately</li>
                                            <li>💎 Career coaching (2 sessions)</li>
                                            <li>💎 Accommodation help</li>
                                        </ul>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- PAYMENT METHOD -->
                        <div class="mb-5 d-none">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #8B5CF6, #A78BFA); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1.5rem; font-weight: 900; color: white;">5</span>
                                </div>
                                <h3 class="fw-bold mb-0" style="color: var(--un-blue-dark);">Payment Method</h3>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="payment" id="fullPayment" value="full"
                                        required>
                                    <label class="btn btn-outline-primary w-100 py-3 rounded-3" for="fullPayment">
                                        <i class="fas fa-credit-card me-2"></i>
                                        Full Payment Now
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="payment" id="installment2"
                                        value="installment2">
                                    <label class="btn btn-outline-primary w-100 py-3 rounded-3" for="installment2">
                                        <i class="fas fa-calendar me-2"></i>
                                        2 Installments
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <input type="radio" class="btn-check" name="payment" id="installment4"
                                        value="installment4">
                                    <label class="btn btn-outline-primary w-100 py-3 rounded-3" for="installment4">
                                        <i class="fas fa-calendar-alt me-2"></i>
                                        4 Installments
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- SPECIAL REQUESTS -->
                        <div class="mb-5 d-none">
                            <label class="form-label fw-bold">Dietary Requirements / Special Requests</label>
                            <textarea class="form-control rounded-3" rows="3"
                                placeholder="e.g., Vegetarian, Halal, Wheelchair access, etc."></textarea>
                        </div>

                        <!-- TERMS -->
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Refund
                                        Policy</a> <span style="color: #EF4444;">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- SUBMIT -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg rounded-pill px-5"
                                style="background: linear-gradient(135deg, #FFD700, #FFA500); color: white; font-weight: 700; font-size: 1.3rem; padding: 1rem 4rem; box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);">
                                Submit
                                <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                            <p class="mt-3 text-muted">
                                <i class="fas fa-lock me-2"></i>
                                Your information is secure and encrypted
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== NEED HELP ==================== -->
<section class="section" style="background: linear-gradient(135deg, #001F3F 0%, #0A72B5 100%);">
    <div class="container">
        <div class="text-center" data-aos="zoom-in">
            <h2 class="display-4 fw-bold text-white mb-4">
                Need Help with Registration? 🤝
            </h2>
            <p class="lead text-white mb-5" style="opacity: 0.95;">
                Our team is here to assist you every step of the way
            </p>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <a href="mailto:registration@iyadmun.org" class="text-decoration-none">
                        <div class="p-4 rounded-4"
                            style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); transition: all 0.3s;">
                            <i class="fas fa-envelope" style="font-size: 3rem; color: #FFD700;"></i>
                            <h5 class="text-white fw-bold mt-3">Email Support</h5>
                            <p class="text-white mb-0" style="opacity: 0.9;">registration@iyadmun.org</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="https://wa.me/19175130904" class="text-decoration-none">
                        <div class="p-4 rounded-4"
                            style="background: rgba(255, 215, 0, 0.15); backdrop-filter: blur(10px); border: 2px solid rgba(255, 215, 0, 0.5); transition: all 0.3s;">
                            <i class="fab fa-whatsapp" style="font-size: 3rem; color: #10B981;"></i>
                            <h5 class="text-white fw-bold mt-3">WhatsApp</h5>
                            <p class="text-white mb-0" style="opacity: 0.9;">+1 (917) 513-0904</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
