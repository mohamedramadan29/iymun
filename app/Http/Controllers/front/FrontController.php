<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about(){
        return view('front.about');
    }

    public function committees(){
        return view('front.committees');
    }

    public function whyUs(){
        return view('front.why-us');
    }

    public function pricing(){
        return view('front.pricing');
    }
}
