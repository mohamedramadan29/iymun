<?php

namespace App\Http\Controllers\front\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        if(!$user){
            return to_route('front.index');
        }
        return view('front.auth.dashboard', compact('user'));
    }
}
