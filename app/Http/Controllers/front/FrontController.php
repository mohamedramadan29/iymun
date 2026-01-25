<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Models\dashboard\Package;
use App\Models\dashboard\WhyJoin;
use App\Models\dashboard\homePage;
use App\Models\dashboard\AboutPage;
use App\Models\dashboard\VenuePage;
use App\Http\Controllers\Controller;
use App\Models\dashboard\PartenerPage;
use App\Models\dashboard\CommitteePage;

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
        $content = PartenerPage::first();
        return view('front.partners', compact('content'));
    }

    public function faq()
    {
        $faqs = \App\Models\dashboard\Faq::orderBy('order')->get()->groupBy('category');
        return view('front.faq', compact('faqs'));
    }

    public function contact(){
        return view('front.contact');
    }
}
