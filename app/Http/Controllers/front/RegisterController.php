<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('front.auth.register');
    }

    public function registerPost(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

    public function login()
    {
        return view('front.auth.login');
    }
}
