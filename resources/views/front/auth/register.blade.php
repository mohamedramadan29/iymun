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
                    <h5 class=mb-3">Personal Info</h5>
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
                    <h5 class=mb-3">Choose Package</h5>
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
                    <h5 class=mb-3">Payment</h5>
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
                    <h5 class=mb-3">Confirmation</h5>
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
                        <h2 class="display-6 mb-3 fw-bold" style="color: var(--un-blue-dark);">
                            Registration Form
                        </h2>
                        <div class="alert alert-warning d-inline-block" style="border-radius: 15px;">
                            <i class="fas fa-fire me-2"></i>
                            <strong>Early Bird Pricing Ends:</strong> July 31, 2026 - Save up to 30%!
                        </div>
                        <div>
                            @if (Session::has('Success_message'))
                            <div class="alert alert-success">
                                @php
                                echo \Illuminate\Support\Facades\Session::get('Success_message')
                                @endphp
                            </div>
                            @endif
                        </div>
                    </div>

                    <form class="needs-validation" method="post" action="{{ route('front.register.post') }}">

                        @csrf
                        <!-- STEP 1: PERSONAL INFORMATION -->
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 40px; height: 40px; background: linear-gradient(135deg, #FFD700, #FFA500); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1rem; font-weight: 900; color: white;">1</span>
                                </div>
                                <h6 class="mb-0 fw-bold" style="color: var(--un-blue-dark);">Personal Details
                                    (Mandatory)
                                </h6>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label"> Full Name (As written in your passport) <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" name="name" class="form-control form-control-lg rounded-3"
                                        required value="{{ old('name') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Preferred Name (if different) </label>
                                    <input type="text" name="preferred_name"
                                        class="form-control form-control-lg rounded-3"
                                        value="{{ old('preferred_name') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Date of Birth <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="date" name="birthdate" class="form-control form-control-lg rounded-3"
                                        required value="{{ old('birthdate') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Gender <span style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" name="gender" required>
                                        <option value="">Select gender</option>
                                        <option @selected(old('gender')=='male' ) value="male">Male</option>
                                        <option @selected(old('gender')=='female' ) value="female">Female</option>
                                        <option @selected(old('gender')=='prefer_not_to_say' )
                                            value="prefer_not_to_say">Prefer not to say</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Nationality / Nationalities <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3"
                                        placeholder="e.g., American" required name="nationality"
                                        value="{{ old('nationality') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Country of Residence <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" name="country" class="form-control form-control-lg rounded-3"
                                        required value="{{ old('country') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> City of Residence <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" name="city" class="form-control form-control-lg rounded-3"
                                        required value="{{ old('city') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Passport Number <span style="color: #EF4444;">*</span>
                                    </label>
                                    <input type="text" class="form-control form-control-lg rounded-3" required
                                        placeholder="Required for visa invitation letter" name="passport_number"
                                        value="{{ old('passport_number') }}">
                                    <small class="text-muted"> For visa and official documentation purposes only
                                    </small>
                                </div>

                                <div class="col-12">
                                    <label class="form-label"> Passport Issuing Country <span
                                            style="color: #EF4444;">*</span> </label>
                                    <input type="text" class="form-control form-control-lg rounded-3" required
                                        placeholder="Required for visa invitation letter" name="passport_issue_country"
                                        value="{{ old('passport_issue_country') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Passport Expiry Date <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="date" name="passport_expire_date"
                                        class="form-control form-control-lg rounded-3" required
                                        value="{{ old('passport_expire_date') }}">
                                    <small class="text-muted"> (Passport must be valid for at least 6 months after the
                                        conference) </small>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Institution/School <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" name="school" class="form-control form-control-lg rounded-3"
                                        required value="{{ old('school') }}">
                                </div>
                            </div>
                        </div>


                        <!-- STEP 2:  Contact Information -->
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 40px; height: 40px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1rem; font-weight: 900; color: white;">2</span>
                                </div>
                                <h6 class="mb-0 fw-bold" style="color: var(--un-blue-dark);"> Contact Information
                                </h6>
                            </div>



                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label">Email Address (Must be active and accessible)
                                        <span style="color: #EF4444;">*</span></label>
                                    <input type="email" name="email" class="form-control form-control-lg rounded-3"
                                        required value="{{ old('email') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Phone Number (Include country code) <span
                                            style="color: #EF4444;">*</span></label>
                                    <input name="phone" type="text" class="form-control form-control-lg rounded-3"
                                        placeholder="+1 (555) 123-4567" required value="{{ old('phone') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> WhatsApp Number (if different) </label>
                                    <input name="whatsapp" type="text" class="form-control form-control-lg rounded-3"
                                        placeholder="+1 (555) 123-4567" required value="{{ old('whatsapp') }}">
                                </div>





                                <div class="col-md-6">
                                    <label class="form-label"> Emergency Contact Name <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3" required
                                        name="emergency_contact_name" value="{{ old('emergency_contact_name') }}">
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label"> Emergency Contact Relationship <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3" required
                                        name="emergency_contact_relationship"
                                        value="{{ old('emergency_contact_relationship') }}">
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label"> Emergency Contact Phone Number <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3" required
                                        name="emergency_contact_phone_number"
                                        value="{{ old('emergency_contact_phone_number') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Password (Login To Account ) <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="password" class="form-control form-control-lg rounded-3" required
                                        name="password">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Confirm Password <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="password" class="form-control form-control-lg rounded-3" required
                                        name="password_confirmation">
                                </div>


                            </div>
                        </div>


                        <!-- STEP 3: ACADEMIC INFORMATION -->
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 40px; height: 40px; background: linear-gradient(135deg, #4A90E2, #0A72B5); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1rem; font-weight: 900; color: white;">3</span>
                                </div>
                                <h6 class="mb-0 fw-bold" style="color: var(--un-blue-dark);"> Academic / Professional
                                    Background
                                </h6>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label">Educational Level (Current Status) <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" required name="eduction_level">
                                        <option value="">Select level</option>
                                        <option @selected(old('eduction_level')=='highschool' ) value="highschool">High
                                            School Student</option>
                                        <option @selected(old('eduction_level')=='undergraduate' )
                                            value="undergraduate">Undergraduate Student</option>
                                        <option @selected(old('eduction_level')=='graduate' ) value="graduate">Graduate
                                            Student</option>
                                        <option @selected(old('eduction_level')=='researcher' ) value="researcher">
                                            Researcher </option>
                                        <option @selected(old('eduction_level')=='young' ) value="young"> Young
                                            Professional </option>
                                        <option @selected(old('eduction_level')=='other' ) value="other"> Other (please
                                            specify) </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Please Specify Other Status </label>
                                    <input type="text" class="form-control form-control-lg rounded-3"
                                        name="eduction_level_other" value="{{ old('eduction_level_other') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Institution / Organization Name <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3" required
                                        name="organization_name" value="{{ old('organization_name') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Field of Study / Profession <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3" required
                                        name="filed_of_study" value="{{ old('filed_of_study') }}">
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label"> Year of Study or Years of Professional Experience
                                        <span style="color: #EF4444;">*</span></label>
                                    <input type="number" class="form-control form-control-lg rounded-3" required
                                        name="years_of_experience" value="{{ old('years_of_experience') }}">
                                </div>

                            </div>
                        </div>

                        <!-- STEP 4: MUN & Youth Engagement Background -->
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 40px; height: 40px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1rem; font-weight: 900; color: white;">4</span>
                                </div>
                                <h6 class="mb-0 fw-bold" style="color: var(--un-blue-dark);"> MUN & Youth Engagement
                                    Background </h6>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label"> Have you participated in Model United Nations
                                        conferences before? <span style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="munExperience" required
                                        name="have_model_un_before">
                                        <option value="">-- Select --</option>
                                        <option @selected(old('have_model_un_before')=='yes' ) value="yes"> Yes
                                        </option>
                                        <option @selected(old('have_model_un_before')=='no' ) value="no"> No </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> If yes, please list up to the MUN conference/s
                                        you have participated in (including committee and role): <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3"
                                        name="list_of_model_un" value="{{ old('list_of_model_un') }}">
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label"> Do you have experience in youth leadership,
                                        peacebuilding, advocacy, or community initiatives? <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="munExperience" required
                                        name="have_experience_in_leadership">
                                        <option value="">-- Select --</option>
                                        <option @selected(old('have_experience_in_leadership')=='yes' ) value="yes"> Yes
                                        </option>
                                        <option @selected(old('have_experience_in_leadership')=='no' ) value="no"> No
                                        </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> If yes, please briefly describe your experience
                                        (max 150 words): <span style="color: #EF4444;">*</span></label>
                                    <textarea id="" maxlength="150" class="form-control"
                                        name="list_of_experience_in_leadership">{{ old('list_of_experience_in_leadership') }}</textarea>
                                </div>

                            </div>
                        </div>

                        <!-- STEP 5: Conference Preferences -->
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 40px; height: 40px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1rem; font-weight: 900; color: white;">5</span>
                                </div>
                                <h6 class="mb-0 fw-bold" style="color: var(--un-blue-dark);"> Conference Preferences
                                </h6>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label"> Preferred Committee <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="munExperience" required
                                        name="preferred_committee">
                                        <option value="">-- Select --</option>
                                        <option @selected(old('preferred_committee')=='UNGA' ) value="UNGA"> General
                                            Assembly (UNGA) </option>
                                        <option @selected(old('preferred_committee')=='PBC' ) value="PBC"> UN
                                            Peacebuilding Commission (PBC) </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Country Preference for Representation (List up to
                                        three countries in order of preference) <span
                                            style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3" required
                                        name="country_preference_for_representation"
                                        value="{{ old('country_preference_for_representation') }}">
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label"> Dietary Restrictions <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="munExperience" required
                                        name="dietary_restrictions">
                                        <option value="">-- Select --</option>
                                        <option @selected(old('dietary_restrictions')=='none' ) value="none"> None
                                        </option>
                                        <option @selected(old('dietary_restrictions')=='vegetarian' )
                                            value="vegetarian"> Vegetarian </option>
                                        <option @selected(old('dietary_restrictions')=='vegan' ) value="vegan"> Vegan
                                        </option>
                                        <option @selected(old('dietary_restrictions')=='halal' ) value="halal"> Halal
                                        </option>
                                        <option @selected(old('dietary_restrictions')=='other' ) value="other"> Other
                                            (please specify) </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"> please specify </label>
                                    <input type="text" class="form-control form-control-lg rounded-3"
                                        name="dietary_restrictions_specify"
                                        value="{{ old('dietary_restrictions_specify') }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Do you require any special assistance or
                                        accommodations? <span style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="munExperience" required
                                        name="require_any_special_assistance">
                                        <option value="">-- Select --</option>
                                        <option @selected(old('require_any_special_assistance')=='no' ) value="no"> No
                                        </option>
                                        <option @selected(old('require_any_special_assistance')=='yes' ) value="yes">
                                            Yes (please specify) </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"> please specify </label>
                                    <input type="text" class="form-control form-control-lg rounded-3"
                                        name="require_any_special_assistance_specify"
                                        value="{{ old('require_any_special_assistance_specify') }}">
                                </div>

                            </div>
                        </div>

                        <!-- STEP 6: Travel & Visa Information -->
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 40px; height: 40px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1rem; font-weight: 900; color: white;">6</span>
                                </div>
                                <h6 class="mb-0 fw-bold" style="color: var(--un-blue-dark);"> Travel & Visa Information
                                </h6>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label"> Will you require a visa to enter the United
                                        States? <span style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="munExperience" required
                                        name="visa_enter_un">
                                        <option value="">-- Select --</option>
                                        <option @selected(old('visa_enter_un')=='yes' ) value="yes"> Yes </option>
                                        <option @selected(old('visa_enter_un')=='no' ) value="no"> No </option>
                                        <option @selected(old('visa_enter_un')=='not_sure' ) value="not_sure"> Not sure
                                        </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Have you previously been issued a U.S. visa?
                                        <span style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="munExperience" required
                                        name="previously_issued_visa_us">
                                        <option value="">-- Select --</option>
                                        <option @selected(old('previously_issued_visa_us')=='yes' ) value="yes"> Yes
                                        </option>
                                        <option @selected(old('previously_issued_visa_us')=='no' ) value="no"> No
                                        </option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"> Do you currently hold a valid U.S. visa? <span
                                            style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="munExperience" required
                                        name="currently_hold_valid_us_visa">
                                        <option value="">-- Select --</option>
                                        <option @selected(old('currently_hold_valid_us_visa')=='yes' ) value="yes"> Yes
                                        </option>
                                        <option @selected(old('currently_hold_valid_us_visa')=='no' ) value="no"> No
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- STEP 7: Declarations & Consent -->
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div
                                    style="width: 40px; height: 40px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                    <span style="font-size: 1rem; font-weight: 900; color: white;">7</span>
                                </div>
                                <h6 class="mb-0 fw-bold" style="color: var(--un-blue-dark);"> Declarations & Consent
                                </h6>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label"> How did you hear about IYADMUN New York 2026?
                                        <span style="color: #EF4444;">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3" required
                                        name="how_did_you_hear_about_us" value="{{ old('how_did_you_hear_about_us') }}">
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="confirm_information"
                                            required>
                                        <label class="form-check-label" for="confirm_information">
                                            Do you confirm that all information provided is accurate and truthful?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="agree" required>
                                        <label class="form-check-label" for="agree">
                                            Do you agree to abide by the IYADMUN Code of Conduct and conference rules?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label"> Do you consent to the use of photos and videos
                                        taken during the conference for IYADMUN’s official communication and promotional
                                        purposes? <span style="color: #EF4444;">*</span></label>
                                    <select class="form-select form-select-lg rounded-3" id="munExperience" required
                                        name="consent_photos_video">
                                        <option value="">-- Select --</option>
                                        <option @selected(old('consent_photos_video')=='yes' ) value="yes"> Yes
                                        </option>
                                        <option @selected(old('consent_photos_video')=='no' ) value="no"> No </option>
                                    </select>
                                </div>
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
            <h2 class="display-4 text-white mb-4">
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
                            <h5 class="text-white mt-3">Email Support</h5>
                            <p class="text-white mb-0" style="opacity: 0.9;">registration@iyadmun.org</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="https://wa.me/19175130904" class="text-decoration-none">
                        <div class="p-4 rounded-4"
                            style="background: rgba(255, 215, 0, 0.15); backdrop-filter: blur(10px); border: 2px solid rgba(255, 215, 0, 0.5); transition: all 0.3s;">
                            <i class="fab fa-whatsapp" style="font-size: 3rem; color: #10B981;"></i>
                            <h5 class="text-white mt-3">WhatsApp</h5>
                            <p class="text-white mb-0" style="opacity: 0.9;">+1 (917) 513-0904</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
