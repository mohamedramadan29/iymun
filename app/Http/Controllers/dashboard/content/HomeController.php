<?php

namespace App\Http\Controllers\dashboard\content;

use App\Http\Controllers\Controller;
use App\Models\dashboard\homePage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $content = null;
        $content = homePage::first();
        return view('dashboard.content.home',compact('content'));
    }
}
