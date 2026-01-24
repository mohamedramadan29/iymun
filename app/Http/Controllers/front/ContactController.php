<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Models\front\Contact;
use App\Models\dashboard\Mail;
use App\Http\Traits\Message_Trait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    use Message_Trait;

    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->error_message($validator->errors()->first());
        }
        $data = $request->all();
        Contact::create($data);
        ######## Send Mail To Admin
        ############# Send Mail To Admin ################
        #########
        ###########
        $email = 'info@iyadmun.org';
        $MessageDate = [
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'subject' => $data['subject'],
            'contact_message' => $data['message'],
        ];
        Mail::send('front.mails.sendContactMessageToAdmin', $MessageDate, function ($message) use ($email) {
            $message->to($email)->subject('  رسالة تواصل جديد من الموقع   ');
        });
        return $this->success_message('Message sent successfully');
    }
}
