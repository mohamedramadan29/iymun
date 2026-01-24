@extends('dashboard.layouts.app')

@section('title', ' Home Page Content ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> Home Page Content </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Home </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"> Home Page Content
                                </a>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> Home Page Content </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST"
                                        action="{{ route('dashboard.content.home.update') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h6 style="badge badge-info bg-info"> First Section </h6>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> First Title (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_first_title[ar]" required
                                                            value="{{ $content->getTranslation('hero_first_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> First Title (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_first_title[en]" required
                                                            value="{{ $content->getTranslation('hero_first_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Title (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_main_title[ar]" required
                                                            value="{{ $content->getTranslation('hero_main_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Title (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_main_title[en]" required
                                                            value="{{ $content->getTranslation('hero_main_title','en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Description (ar) </label>
                                                        <input type="text" class="form-control" name="hero_p[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('hero_p','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Description (en) </label>
                                                        <input type="text" class="form-control" name="hero_p[en]"
                                                            required
                                                            value="{{ $content->getTranslation('hero_p','en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> City (ar) </label>
                                                        <input type="text" class="form-control" name="hero_city[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('hero_city', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> City (en) </label>
                                                        <input type="text" class="form-control" name="hero_city[en]"
                                                            required
                                                            value="{{ $content->getTranslation('hero_city', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Date (ar) </label>
                                                        <input type="text" class="form-control" name="hero_date[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('hero_date', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Date (en) </label>
                                                        <input type="text" class="form-control" name="hero_date[en]"
                                                            required
                                                            value="{{ $content->getTranslation('hero_date', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> First Image </label>
                                                        <input type="file" class="form-control" name="hero_img1">
                                                        <img src="{{ asset('assets/uploads/content/home/'.$content->hero_img1) }}"
                                                            style="width: 100px;height: 100px">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Second Image </label>
                                                        <input type="file" class="form-control" name="hero_img2">
                                                        <img src="{{ asset('assets/uploads/content/home/'.$content->hero_img2) }}"
                                                            style="width: 100px;height: 100px">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Third Image </label>
                                                        <input type="file" class="form-control" name="hero_img3">
                                                        <img src="{{ asset('assets/uploads/content/home/'.$content->hero_img3) }}"
                                                            style="width: 100px;height: 100px">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Conference Date </label>
                                                        <input type="date" class="form-control" name="event_date"
                                                            required value="{{ $content->event_date}}">
                                                    </div>
                                                </div>

                                            </div>

                                            <h6 style="badge badge-info bg-info"> Second Section </h6>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> First Title (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_title[ar]" required
                                                            value="{{ $content->getTranslation('conference_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> First Title (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_title[en]" required
                                                            value="{{ $content->getTranslation('conference_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Description (ar) </label>
                                                        <input type="text" class="form-control" name="conference_p[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('conference_p', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Description (en) </label>
                                                        <input type="text" class="form-control" name="conference_p[en]"
                                                            required
                                                            value="{{ $content->getTranslation('conference_p', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Title 1 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title1[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_title1', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Title 1 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title1[en]" required
                                                            value="{{ $content->getTranslation('conference_step_title1', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Text 1 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p1[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_p1', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Text 1 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p1[en]" required
                                                            value="{{ $content->getTranslation('conference_step_p1', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Title 2 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title2[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_title2', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Title 2 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title2[en]" required
                                                            value="{{ $content->getTranslation('conference_step_title2', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Text 2 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p2[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_p2', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Text 2 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p2[en]" required
                                                            value="{{ $content->getTranslation('conference_step_p2', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Title 3 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title3[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_title3', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Title 3 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title3[en]" required
                                                            value="{{ $content->getTranslation('conference_step_title3', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Text 3 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p3[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_p3', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Text 3 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p3[en]" required
                                                            value="{{ $content->getTranslation('conference_step_p3', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Title 4 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title4[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_title4', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Title 4 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title4[en]" required
                                                            value="{{ $content->getTranslation('conference_step_title4', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Text 4 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p4[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_p4', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Event Text 4 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p4[en]" required
                                                            value="{{ $content->getTranslation('conference_step_p4', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 style="badge badge-info bg-info"> Third Section </h6>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Title (ar) </label>
                                                        <input type="text" class="form-control" name="why_title[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('why_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Title (en) </label>
                                                        <input type="text" class="form-control" name="why_title[en]"
                                                            required
                                                            value="{{ $content->getTranslation('why_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Description (ar) </label>
                                                        <input type="text" class="form-control" name="why_p[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('why_p', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Description (en) </label>
                                                        <input type="text" class="form-control" name="why_p[en]"
                                                            required
                                                            value="{{ $content->getTranslation('why_p', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title 1 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title1[ar]" required
                                                            value="{{ $content->getTranslation('why_step_title1', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title 1 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title1[en]" required
                                                            value="{{ $content->getTranslation('why_step_title1', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description 1 (ar) </label>
                                                        <input type="text" class="form-control" name="why_step_p1[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('why_step_p1', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description 1 (en) </label>
                                                        <input type="text" class="form-control" name="why_step_p1[en]"
                                                            required
                                                            value="{{ $content->getTranslation('why_step_p1', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title 2 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title2[ar]" required
                                                            value="{{ $content->getTranslation('why_step_title2','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title 2 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title2[en]" required
                                                            value="{{ $content->getTranslation('why_step_title2','en') }}">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description 2 (ar) </label>
                                                        <input type="text" class="form-control" name="why_step_p2[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('why_step_p2', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description 2 (en) </label>
                                                        <input type="text" class="form-control" name="why_step_p2[en]"
                                                            required
                                                            value="{{ $content->getTranslation('why_step_p2', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title 3 (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title3[ar]" required
                                                            value="{{ $content->getTranslation('why_step_title3', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title 3 (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title3[en]" required
                                                            value="{{ $content->getTranslation('why_step_title3', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description 3 (ar) </label>
                                                        <input type="text" class="form-control" name="why_step_p3[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('why_step_p3', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description 3 (en) </label>
                                                        <input type="text" class="form-control" name="why_step_p3[en]"
                                                            required
                                                            value="{{ $content->getTranslation('why_step_p3', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Point Title (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_main_title[ar]" required
                                                            value="{{ $content->getTranslation('why_main_title','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Point Title (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_main_title[en]" required
                                                            value="{{ $content->getTranslation('why_main_title','en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Point Description (ar) </label>
                                                        <input type="text" class="form-control" name="why_main_p[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('why_main_p','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Main Point Description (en) </label>
                                                        <input type="text" class="form-control" name="why_main_p[en]"
                                                            required
                                                            value="{{ $content->getTranslation('why_main_p','en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <h6 style="badge badge-info bg-info"> Fourth Section Stats </h6>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Stat Title 1 (ar) </label>
                                                        <input type="text" class="form-control" name="number1_title[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('number1_title','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Stat Title 1 (en) </label>
                                                        <input type="text" class="form-control" name="number1_title[en]"
                                                            required
                                                            value="{{ $content->getTranslation('number1_title','en') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Number </label>
                                                        <input type="number" class="form-control" name="number1" required
                                                            value="{{ $content->number1 }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Stat Title 2 (ar) </label>
                                                        <input type="text" class="form-control" name="number2_title[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('number2_title','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Stat Title 2 (en) </label>
                                                        <input type="text" class="form-control" name="number2_title[en]"
                                                            required
                                                            value="{{ $content->getTranslation('number2_title','en') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Number </label>
                                                        <input type="number" class="form-control" name="number2" required
                                                            value="{{ $content->number2 }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Stat Title 3 (ar) </label>
                                                        <input type="text" class="form-control" name="number3_title[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('number3_title','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Stat Title 3 (en) </label>
                                                        <input type="text" class="form-control" name="number3_title[en]"
                                                            required
                                                            value="{{ $content->getTranslation('number3_title','en') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Number </label>
                                                        <input type="number" class="form-control" name="number3" required
                                                            value="{{ $content->number3 }}">
                                                    </div>
                                                </div>
                                            </div>


                                              <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Stat Title 4 (ar) </label>
                                                        <input type="text" class="form-control" name="number4_title[ar]"
                                                            required
                                                            value="{{ $content->getTranslation('number4_title','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Stat Title 4 (en) </label>
                                                        <input type="text" class="form-control" name="number4_title[en]"
                                                            required
                                                            value="{{ $content->getTranslation('number4_title','en') }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> Number </label>
                                                        <input type="number" class="form-control" name="number4" required
                                                            value="{{ $content->number4 }}">
                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Save
                                            </button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
@endsection
