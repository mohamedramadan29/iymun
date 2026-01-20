<?php

namespace App\Http\Controllers\front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\Message_Trait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use Message_Trait;
    public function register()
    {
        return view('front.auth.register');
    }

    public function registerPost(Request $request)
    {
        $data = $request->all();
        $rules = [
            'name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'nationality' => 'required',
            'country' => 'required',
            'city' => 'required',
            'passport_number' => 'required',
            'passport_issue_country' => 'required',
            'passport_expire_date' => 'required',
            'school' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'whatsapp' => 'nullable|unique:users',
            'emergency_contact_name' => 'required',
            'emergency_contact_relationship' => 'required',
            'emergency_contact_phone_number' => 'required|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'eduction_level' => 'required',
            'organization_name' => 'required',
            'filed_of_study' => 'required',
            'years_of_experience' => 'required',
            'have_model_un_before' => 'required',
            'have_experience_in_leadership' => 'required',
            'preferred_committee' => 'required',
            'country_preference_for_representation' => 'required',
            'dietary_restrictions' => 'required',
            'require_any_special_assistance' => 'required',
            'visa_enter_un' => 'required',
            'previously_issued_visa_us' => 'required',
            'currently_hold_valid_us_visa' => 'required',
            'how_did_you_hear_about_us' => 'required',
            'consent_photos_video' => 'required',
        ];
        $messages = [
            'name.required' => 'Name is required',
            'birthdate.required' => 'Birthdate is required',
            'gender.required' => 'Gender is required',
            'nationality.required' => 'Nationality is required',
            'country.required' => 'Country is required',
            'city.required' => 'City is required',
            'passport_number.required' => 'Passport number is required',
            'passport_issue_country.required' => 'Passport issue country is required',
            'passport_expire_date.required' => 'Passport expire date is required',
            'school.required' => 'School is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'whatsapp.required' => 'WhatsApp is required',
            'emergency_contact_name.required' => 'Emergency contact name is required',
            'emergency_contact_relationship.required' => 'Emergency contact relationship is required',
            'emergency_contact_phone_number.required' => 'Emergency contact phone number is required',
            'password.required' => 'Password is required',
            'password_confirmation.required' => 'Confirm password is required',
            'eduction_level.required' => 'Eduction level is required',
            'organization_name.required' => 'Organization name is required',
            'filed_of_study.required' => 'Field of study is required',
            'years_of_experience.required' => 'Years of experience is required',
            'have_model_un_before.required' => 'Have model UN before is required',
            'have_experience_in_leadership.required' => 'Have experience in leadership is required',
            'preferred_committee.required' => 'Preferred committee is required',
            'country_preference_for_representation.required' => 'Country preference for representation is required',
            'dietary_restrictions.required' => 'Dietary restrictions is required',
            'require_any_special_assistance.required' => 'Require any special assistance is required',
            'visa_enter_un.required' => 'Visa enter UN is required',
            'previously_issued_visa_us.required' => 'Previously issued visa US is required',
            'currently_hold_valid_us_visa.required' => 'Currently hold valid US visa is required',
            'how_did_you_hear_about_us.required' => 'How did you hear about us is required',
            'email.unique' => 'Email already exist',
            'phone.unique' => 'Phone already exist',
            'whatsapp.unique' => 'WhatsApp already exist',
            'emergency_contact_phone_number.unique' => 'Emergency contact phone number already exist',
            'password_confirmation.same' => 'Password and confirm password must be same',
            'consent_photos_video.required' => 'You must consent to share your photos and video',

        ];
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        DB::beginTransaction();
        $user = new User();
        $user->name = $data['name'];
        $user->preferred_name = $data['preferred_name'];
        $user->birthdate = $data['birthdate'];
        $user->gender = $data['gender'];
        $user->nationality = $data['nationality'];
        $user->country = $data['country'];
        $user->city = $data['city'];
        $user->passport_number = $data['passport_number'];
        $user->passport_issue_country = $data['passport_issue_country'];
        $user->passport_expire_date = $data['passport_expire_date'];
        $user->school = $data['school'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->whatsapp = $data['whatsapp'];
        $user->emergency_contact_name = $data['emergency_contact_name'];
        $user->emergency_contact_relationship = $data['emergency_contact_relationship'];
        $user->emergency_contact_phone_number = $data['emergency_contact_phone_number'];
        $user->password = Hash::make($data['password']);
        $user->eduction_level = $data['eduction_level'];
        $user->organization_name = $data['organization_name'];
        $user->filed_of_study = $data['filed_of_study'];
        $user->years_of_experience = $data['years_of_experience'];
        $user->have_model_un_before = $data['have_model_un_before'];
        $user->have_experience_in_leadership = $data['have_experience_in_leadership'];
        $user->preferred_committee = $data['preferred_committee'];
        $user->country_preference_for_representation = $data['country_preference_for_representation'];
        $user->dietary_restrictions = $data['dietary_restrictions'];
        $user->require_any_special_assistance = $data['require_any_special_assistance'];
        $user->visa_enter_un = $data['visa_enter_un'];
        $user->previously_issued_visa_us = $data['previously_issued_visa_us'];
        $user->currently_hold_valid_us_visa = $data['currently_hold_valid_us_visa'];
        $user->how_did_you_hear_about_us = $data['how_did_you_hear_about_us'];
        $user->consent_photos_video = $data['consent_photos_video'];
        $user->save();

        $email = $data['email'];
        // $MessageDate = [
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'code' => base64_encode($data['email'])
        // ];
        // Mail::send('front.mails.UserActivationEmail', $MessageDate, function ($message) use ($email) {
        //     $message->to($email)->subject(' Active Your Email ');
        // });

        DB::commit();
        return $this->success_message(' Congratulations! You have successfully registered Please Activate Your Account By Clicking On The Link Sent To Your Email');
    }


    public function UserConfirm($email)
    {
        $email = base64_decode($email);

        $user = User::where('email', $email)->first();

        if (!$user) {
            abort(404);
        }

        // لو الحساب مفعل من قبل
        if ($user->email_status == 1) {
            return Redirect()->back()->withInput()->withErrors(' Your Account Has Already Been Activated ');
        }



        // لو الحساب لسة ما اتفعلش → نفعله ونسجل دخول
        //  $user->update(['email_active' => 1]);
        $user->email_status = 1;
        $user->save();

        Auth::login($user); // دلوقتي بس بنسجل دخول

        $message = 'Your Account Has Been Activated Successfully';


        return redirect()->route('user.dashboard')->with('success', $message);
    }


    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('front.index');
        }
        return view('front.auth.login');
    }


    public function UserLogin(Request $request)
    {
        $data = $request->all();
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $messages = [
            'email.required' => 'Please Enter Your Email',
            'email.email' => ' Please Enter Valid Email',
            'password.required' => 'Please Enter Your Password',
        ];
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $data['email'])->first();
        if (isset($user)) {
            if ($user->email_status == 1) {
                if (Hash::check($data['password'], $user->password)) {
                    Auth::login($user);
                    return redirect()->route('user.dashboard')->with('Success_message', ' Login Successfully ');
                } else {
                    return redirect()->back()->withInput()->withErrors(' Password Does Not Match ');
                }
            } else {
                return redirect()->back()->withInput()->withErrors(' Please Activate Your Account By Clicking On The Link Sent To Your Email');
            }
        } else {
            return redirect()->back()->withInput()->withErrors(' User Does Not Exist ');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('front.index');
    }
}
