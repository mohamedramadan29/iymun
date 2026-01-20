<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\Message_Trait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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
        // Mail::send('front.mails.SendApplicationStatusMail', $MessageDate, function ($message) use ($email) {
        //     $message->to($email)->subject(' Send Application Status  ');
        // });
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
}
