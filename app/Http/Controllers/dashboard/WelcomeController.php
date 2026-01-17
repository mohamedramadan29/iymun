<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Models\dashboard\Role;
use App\Models\dashboard\Admin;
use App\Models\dashboard\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\dashboard\ProblemCategory;

class WelcomeController extends Controller
{
    public function index()
    {
        return view("dashboard.welcome");
    }
}
