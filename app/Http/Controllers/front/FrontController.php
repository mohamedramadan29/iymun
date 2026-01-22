<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\dashboard\Package;
use App\Models\dashboard\AboutPage;
use App\Models\dashboard\CommitteePage;
use App\Models\dashboard\homePage;
use App\Models\dashboard\VenuePage;
use App\Models\dashboard\WhyJoin;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $content = homePage::first();
        return view('front.index',compact('content'));
    }

    public function about()
    {
        $content = AboutPage::first();
        return view('front.about',compact('content'));
    }

    public function committees()
    {
        $content = CommitteePage::first();
        return view('front.committees',compact('content'));
    }

    public function whyUs()
    {
        $content = WhyJoin::first();
        return view('front.why-us',compact('content'));
    }

    public function pricing()
    {
        $packages = Package::all();
        return view('front.pricing',compact('packages'));
    }

    public function venue()
    {
        $content = VenuePage::first();
        return view('front.venue',compact('content'));
    }

    public function partners()
    {
        return view('front.partners');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function contact(){
        return view('front.contact');
    }
}
