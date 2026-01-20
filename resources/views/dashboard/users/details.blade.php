@extends('dashboard.layouts.app')
@section('title', ' تفاصيل الطلب والمستخدم ')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> تفاصيل الطلب والمستخدم </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item active"> تفاصيل الطلب والمستخدم
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">

            </div>
        </div>
        <div class="content-body">

            <!-- Bordered striped start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4 class="card-title"> تفاصيل الطلب </h4>
                            @if($user->complete_application == 0)
                            <a onclick="return(confirm('هل انت متاكد من تاكيد حميع الخطوات والطلب'))"
                                href="{{ route('dashboard.user.complete_application',$user->id) }}"
                                class="btn btn-danger btn-sm"> تاكيد الطلب بشكل نهائي <i class="la la-check"></i> </a>
                            @else
                            <span class="badge badge-success"> تم اكمال الطلب بنجاح </span>
                            @endif
                            <button style="margin-right: 3px" type="button" class="btn btn-primary btn-sm"
                                data-toggle="modal" data-target="#edit_user{{ $user->id }}">
                                <i class="la la-edit"></i> تعديل حالة الطلب
                            </button>
                            @include('dashboard.users._update_status')
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <tr>
                                                <th style="background-color:#FFBF03;color:#fff"> Personal Details
                                                    (Mandatory) </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Full Name
                                                </th>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <th>

                                                    Preferred Name
                                                </th>
                                                <td>
                                                    {{ $user->preferred_name }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Date of Birth
                                                </th>
                                                <td>
                                                    {{ $user->birthdate }}
                                                </td>
                                                <th>
                                                    Gender
                                                </th>
                                                <td>
                                                    {{ $user->gender }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Nationality / Nationalities
                                                </th>
                                                <td>
                                                    {{ $user->nationality }}
                                                </td>
                                                <th>
                                                    Country of Residence
                                                </th>
                                                <td>
                                                    {{ $user->country }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    City of Residence
                                                </th>
                                                <td>
                                                    {{ $user->city }}
                                                </td>
                                                <th>

                                                    Passport Number
                                                </th>
                                                <td>
                                                    {{ $user->passport_number }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Passport Issuing Country
                                                </th>
                                                <td>
                                                    {{ $user->passport_issue_country }}
                                                </td>
                                                <th>
                                                    Passport Expiry Date
                                                </th>
                                                <td>
                                                    {{ $user->passport_expire_date }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Institution/School
                                                </th>
                                                <td>
                                                    {{ $user->school }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="background-color:#FFBF03;color:#fff"> Contact Information
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Email Address
                                                </th>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <th>

                                                    Phone Number
                                                </th>
                                                <td>
                                                    {{ $user->phone }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    WhatsApp Number
                                                </th>
                                                <td>
                                                    {{ $user->whatsapp }}
                                                </td>
                                                <th>

                                                    Emergency Contact Name
                                                </th>
                                                <td>
                                                    {{ $user->emergency_contact_name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Emergency Contact Relationship
                                                </th>
                                                <td>
                                                    {{ $user->emergency_contact_relationship }}
                                                </td>
                                                <th>

                                                    Emergency Contact Phone Number
                                                </th>
                                                <td>
                                                    {{ $user->emergency_contact_phone_number }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th style="background-color:#FFBF03;color:#fff"> Academic / Professional
                                                    Background
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Educational Level
                                                </th>
                                                <td>
                                                    {{ $user->eduction_level }}
                                                </td>
                                                <th>

                                                    Please Specify Other Status
                                                </th>
                                                <td>
                                                    {{ $user->eduction_level_other ?? '--' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Institution / Organization Name
                                                </th>
                                                <td>
                                                    {{ $user->organization_name }}
                                                </td>
                                                <th>


                                                    Field of Study / Profession
                                                </th>
                                                <td>
                                                    {{ $user->filed_of_study }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Year of Study or Years of Professional Experience
                                                </th>
                                                <td>
                                                    {{ $user->years_of_experience }}
                                                </td>

                                            </tr>
                                            <tr>
                                                <th style="background-color:#FFBF03;color:#fff"> MUN & Youth Engagement
                                                    Background
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Have you participated in Model United Nations
                                                </th>
                                                <td>
                                                    {{ $user->have_model_un_before }}
                                                </td>
                                                <th>

                                                    If yes, please list up to the MUN conference/s
                                                </th>
                                                <td>
                                                    {{ $user->list_of_model_un ?? '--' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Do you have experience in youth leadership
                                                </th>
                                                <td>
                                                    {{ $user->have_experience_in_leadership }}
                                                </td>
                                                <th>

                                                    If yes, please briefly describe your experience
                                                </th>
                                                <td>
                                                    {{ $user->list_of_experience_in_leadership ?? '--' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th style="background-color:#FFBF03;color:#fff"> Conference Preferences
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Preferred Committee
                                                </th>
                                                <td>
                                                    {{ $user->preferred_committee }}
                                                </td>
                                                <th>

                                                    Country Preference for Representation
                                                </th>
                                                <td>
                                                    {{ $user->country_preference_for_representation ?? '--' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Dietary Restrictions
                                                </th>
                                                <td>
                                                    {{ $user->dietary_restrictions }}
                                                </td>
                                                <th>

                                                    please specify
                                                </th>
                                                <td>
                                                    {{ $user->dietary_restrictions_specify ?? '--' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Do you require any special assistance
                                                </th>
                                                <td>
                                                    {{ $user->require_any_special_assistance }}
                                                </td>
                                                <th>

                                                    please specify
                                                </th>
                                                <td>
                                                    {{ $user->require_any_special_assistance_specify ?? '--' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th style="background-color:#FFBF03;color:#fff"> Travel & Visa
                                                    Information
                                                </th>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Will you require a visa to enter the United States?
                                                </th>
                                                <td>
                                                    {{ $user->visa_enter_un }}
                                                </td>
                                                <th>

                                                    Have you previously been issued a U.S. visa?
                                                </th>
                                                <td>
                                                    {{ $user->previously_issued_visa_us ?? '--' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    Do you currently hold a valid U.S. visa?
                                                </th>
                                                <td>
                                                    {{ $user->currently_hold_valid_us_visa }}
                                                </td>

                                            </tr>

                                            <tr>
                                                <th style="background-color:#FFBF03;color:#fff"> Declarations & Consent
                                                </th>
                                            </tr>

                                            <tr>
                                                <th>
                                                    How did you hear about IYADMUN New York 2026
                                                </th>
                                                <td>
                                                    {{ $user->how_did_you_hear_about_us }}
                                                </td>
                                                <th>
                                                    Do you consent to the use of photos and videos
                                                </th>
                                                <td>
                                                    {{ $user->consent_photos_video }}
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bordered striped end -->
        </div>
    </div>
</div>


@endsection
