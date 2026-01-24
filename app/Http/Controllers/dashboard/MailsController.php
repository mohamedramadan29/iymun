<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Traits\Message_Trait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\dashboard\Mail as UserMail;

class MailsController extends Controller
{
    use Message_Trait;
    public function index()
    {
        $mails = UserMail::latest()->get();
        return view('dashboard.admin-mails.index', compact('mails'));
    }

    public function create()
    {
        return view('dashboard.admin-mails.create');
    }

    public function send(Request $request)
    {
        $data = $request->all();

        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
        $messages = [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'subject.required' => 'Subject is required',
            'message.required' => 'Message is required',
        ];

        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();
        $mail = new UserMail();
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->subject = $request->subject;
        $mail->message = $request->message;
        $mail->save();

        ########## Send Mail

        ############ Send Notification To User ################################
        $email = $data['email'];
        $MessageDate = [
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'message_content' => $data['message'],
        ];
        Mail::send('front.mails.sendMailFromAdmin', $MessageDate, function ($message) use ($data, $email) {
            $message->to($email)->subject($data['subject']);
        });
        ############ And Send Payment Link In Mail ############ ####################


        DB::commit();
        return $this->success_message('تم ارسال الرسالة بنجاح');
    }
}
