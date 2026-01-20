<?php

namespace App\Http\Controllers\front\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\Message_Trait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ForgetPasswordController extends Controller
{
    use Message_Trait;
    public function showForgetPasswordForm()
    {
        return view('front.auth.forget-password');
    }


    public function sendResetLinkEmail(Request $request)
    {
        $data = $request->all();
        $rules = [
            'email' => 'required|email',
            'user_type' => 'required',
        ];
        $messages = [
            'email.required' => ' من فضلك ادخل البريد الالكتروني  ',
            'user_type.required' => ' يجب تحديد نوع المستخدم من دكتور او مريض  ',
        ];
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return Redirect()->back()->withInput()->withErrors($validator);
        }

        ############################# Check Email Type ###############################

        $email = $data['email'];
        $user_type = $data['user_type'];
        $user = User::where('email', $email)->first();
        if (!$user) {
            return Redirect()->back()->withInput()->withErrors('البريد الاكتروني غير صحيح ');
        }
        if ($user) {


            ################################################
            $MessageDate = [
                'code' => base64_encode($email)
            ];
            Mail::send('front.mails.UserChangePasswordMail', $MessageDate, function ($message) use ($email) {
                $message->to($email)->subject(' رابط تغير كلمة المرور ');
            });
            return $this->success_message(' تم ارسال رابط تغير كلمة المرور علي البريد الالكتروني  ');
            ####### Send Mail Resend Password

        }
    }

    public function change_forget_password(Request $request, $email)
    {
        $email = base64_decode($email);
        return view('front.auth.reset-password', compact('email'));
    }

    public function update_forget_password(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            $email = $data['email'];
            //dd($data);
            $usercount = User::where('email', $email)->count();
            if ($usercount > 0) {
                ////////// Start Change Password
                $user = User::where('email', $email)->first();
                $rules = [
                    'password' => 'required',
                    'confirm_password' => 'required|same:password'
                ];
                $messages = [
                    'password.required' => ' من فضلك ادخل كلمة المرور  ',
                    'confirm_password.required' => ' من فضلك اكد كلمة المرور ',
                    'confirm_password.same' => ' من فضلك يجب تاكيد كلمة المرور بنجاح '
                ];
                $validator = Validator::make($data, $rules, $messages);
                if ($validator->fails()) {
                    return Redirect::back()->withInput()->withErrors($validator);
                }
                $user->update([
                    'password' => Hash::make($data['password']),
                ]);
                return redirect()->route('front.login')->with('Success_message', '   تم تعديل كلمة المرور بنجاح سجل ذخولك الان ');
            } else {
                return Redirect::back()->withErrors(['للاسف لا يوجد حساب بهذة البيانات ']);
            }
        }
    }
}
