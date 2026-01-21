<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Models\dashboard\Role;
use App\Models\dashboard\Admin;
use App\Models\dashboard\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\dashboard\ProblemCategory;
use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $users_under_review = User::where('application_status_from_admin','pending')->get();
        $users_approved = User::where('application_status_from_admin','approved')->get();
        $users_rejected = User::where('application_status_from_admin','rejected')->get();
        $users_completed = User::where('complete_application',1)->get();
        return view("dashboard.welcome", compact('users','users_under_review','users_approved','users_rejected','users_completed'));
    }
}
