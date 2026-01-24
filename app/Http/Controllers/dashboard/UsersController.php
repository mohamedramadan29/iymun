<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\Message_Trait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\dashboard\Mail as UserMail;

class UsersController extends Controller
{
    use Message_Trait;
    public function index()
    {
        $users = User::latest()->paginate(60);
        return view('dashboard.users.index', compact('users'));
    }

    public function details($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            abort(404);
        }

        return view('dashboard.users.details', compact('user'));
    }

    public function changeStatus(Request $request, $id)
    {
        $data = $request->all();
        $user = User::where('id', $id)->first();
        if (!$user) {
            abort(404);
        }
        $user->application_status_from_admin = $data['status'];
        $user->save();
        ############ Send Notification To User ################################
        $email = $user['email'];
        $MessageDate = [
            'name' => $user['name'],
            'email' => $user['email'],
            'status' => $data['status'],
        ];
        Mail::send('front.mails.SendApplicationStatusMail', $MessageDate, function ($message) use ($email) {
            $message->to($email)->subject(' Send Application Status  ');
        });
        ############ And Send Payment Link In Mail ############ ####################

        return $this->success_message('تم تغير حالة المستخدم بنجاح');
    }

    public function completeApplication($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            abort(404);
        }
        $user->complete_application = 1;
        $user->save();
        return $this->success_message(' تم اكتمال الطلب بنجاح  ');
    }


    public function create($id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard.users.create_mail', compact('user'));
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
        $mail->user_id = $request->user_id;
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
