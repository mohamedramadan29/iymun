@extends('dashboard.layouts.app')

@section('title', ' محتوي الصفحة الرئيسية ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> محتوي الصفحة الرئيسية </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"> محتوي الصفحة الرئيسية
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
                                <h4 class="card-title" id="basic-layout-form"> محتوي الصفحة الرئيسية </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST"
                                        action="{{ route('dashboard.content.home.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h6 style="badge badge-info bg-info"> القسم الاول </h6>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الاول (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_first_title[ar]" required
                                                            value="{{ $content->getTranslation('hero_first_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الاول (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_first_title[en]" required
                                                            value="{{ $content->getTranslation('hero_first_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الاساسي (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_main_title[ar]" required
                                                            value="{{ $content->getTranslation('hero_main_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الاساسي (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_main_title[en]" required
                                                            value="{{ $content->getTranslation('hero_main_title','en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف (ar) </label>
                                                        <input type="text" class="form-control" name="hero_p[ar]"
                                                            required value="{{ $content->getTranslation('hero_p','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف (en) </label>
                                                        <input type="text" class="form-control" name="hero_p[en]"
                                                            required value="{{ $content->getTranslation('hero_p','en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> المدينة (ar) </label>
                                                        <input type="text" class="form-control" name="hero_city[ar]"
                                                            required value="{{ $content->getTranslation('hero_city', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> المدينة (en) </label>
                                                        <input type="text" class="form-control" name="hero_city[en]"
                                                            required value="{{ $content->getTranslation('hero_city', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> التاريخ (ar) </label>
                                                        <input type="text" class="form-control" name="hero_date[ar]"
                                                            required value="{{ $content->getTranslation('hero_date', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> التاريخ (en) </label>
                                                        <input type="text" class="form-control" name="hero_date[en]"
                                                            required value="{{ $content->getTranslation('hero_date', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> الصورة الاولي </label>
                                                        <input type="file" class="form-control" name="hero_img1">
                                                        <img src="{{ asset('assets/uploads/content/home/'.$content->hero_img1) }}" style="width: 100px;height: 100px">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> الصورة الثانية </label>
                                                        <input type="file" class="form-control" name="hero_img2">
                                                        <img src="{{ asset('assets/uploads/content/home/'.$content->hero_img2) }}" style="width: 100px;height: 100px">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> الصورة الثالثة </label>
                                                        <input type="file" class="form-control" name="hero_img3">
                                                        <img src="{{ asset('assets/uploads/content/home/'.$content->hero_img3) }}" style="width: 100px;height: 100px">

                                                    </div>
                                                </div>
                                            </div>

                                            <h6 style="badge badge-info bg-info"> القسم الثاني </h6>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الاول (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_title[ar]" required
                                                            value="{{ $content->getTranslation('conference_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الاول (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_title[en]" required
                                                            value="{{ $content->getTranslation('conference_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف الاساسي (ar) </label>
                                                        <input type="text" class="form-control" name="conference_p[ar]"
                                                            required value="{{ $content->getTranslation('conference_p', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف الاساسي (en) </label>
                                                        <input type="text" class="form-control" name="conference_p[en]"
                                                            required value="{{ $content->getTranslation('conference_p', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان الحدث الاول (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title1[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_title1', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان الحدث الاول (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title1[en]" required
                                                            value="{{ $content->getTranslation('conference_step_title1', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نص الحدث الاول (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p1[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_p1', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نص الحدث الاول (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p1[en]" required
                                                            value="{{ $content->getTranslation('conference_step_p1', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان الحدث الثاني (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title2[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_title2', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان الحدث الثاني (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title2[en]" required
                                                            value="{{ $content->getTranslation('conference_step_title2', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نص الحدث الثاني (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p2[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_p2', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نص الحدث الثاني (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p2[en]" required
                                                            value="{{ $content->getTranslation('conference_step_p2', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان الحدث الثالث (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title3[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_title3', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان الحدث الثالث (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title3[en]" required
                                                            value="{{ $content->getTranslation('conference_step_title3', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نص الحدث الثالث (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p3[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_p3', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نص الحدث الثالث (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p3[en]" required
                                                            value="{{ $content->getTranslation('conference_step_p3', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان الحدث الرابع (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title4[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_title4', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان الحدث الرابع (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_title4[en]" required
                                                            value="{{ $content->getTranslation('conference_step_title4', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نص الحدث الرابع (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p4[ar]" required
                                                            value="{{ $content->getTranslation('conference_step_p4', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نص الحدث الرابع (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="conference_step_p4[en]" required
                                                            value="{{ $content->getTranslation('conference_step_p4', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <h6 style="badge badge-info bg-info"> القسم الثالث </h6>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الرئيسي (ar) </label>
                                                        <input type="text" class="form-control" name="why_title[ar]"
                                                            required value="{{ $content->getTranslation('why_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الرئيسي (en) </label>
                                                        <input type="text" class="form-control" name="why_title[en]"
                                                            required value="{{ $content->getTranslation('why_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف الرئيسي (ar) </label>
                                                        <input type="text" class="form-control" name="why_p[ar]"
                                                            required value="{{ $content->getTranslation('why_p', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف الرئيسي (en) </label>
                                                        <input type="text" class="form-control" name="why_p[en]"
                                                            required value="{{ $content->getTranslation('why_p', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة الاولي (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title1[ar]" required
                                                            value="{{ $content->getTranslation('why_step_title1', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة الاولي (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title1[en]" required
                                                            value="{{ $content->getTranslation('why_step_title1', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف النقطة الاولي (ar) </label>
                                                        <input type="text" class="form-control" name="why_step_p1[ar]"
                                                            required value="{{ $content->getTranslation('why_step_p1', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف النقطة الاولي (en) </label>
                                                        <input type="text" class="form-control" name="why_step_p1[en]"
                                                            required value="{{ $content->getTranslation('why_step_p1', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة الثانية (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title2[ar]" required
                                                            value="{{ $content->getTranslation('why_step_title2','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة الثانية (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title2[en]" required
                                                            value="{{ $content->getTranslation('why_step_title2','en') }}">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف النقطة الثانية (ar) </label>
                                                        <input type="text" class="form-control" name="why_step_p2[ar]"
                                                            required value="{{ $content->getTranslation('why_step_p2', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف النقطة الثانية (en) </label>
                                                        <input type="text" class="form-control" name="why_step_p2[en]"
                                                            required value="{{ $content->getTranslation('why_step_p2', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة الثالثة (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title3[ar]" required
                                                            value="{{ $content->getTranslation('why_step_title3', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة الثالثة (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_step_title3[en]" required
                                                            value="{{ $content->getTranslation('why_step_title3', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف النقطة الثالثة (ar) </label>
                                                        <input type="text" class="form-control" name="why_step_p3[ar]"
                                                            required value="{{ $content->getTranslation('why_step_p3', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف النقطة الثالثة (en) </label>
                                                        <input type="text" class="form-control" name="why_step_p3[en]"
                                                            required value="{{ $content->getTranslation('why_step_p3', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة الاساسية (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_main_title[ar]" required
                                                            value="{{ $content->getTranslation('why_main_title','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة الاساسية (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="why_main_title[en]" required
                                                            value="{{ $content->getTranslation('why_main_title','en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف النقطة الاساسية (ar) </label>
                                                        <input type="text" class="form-control" name="why_main_p[ar]"
                                                            required value="{{ $content->getTranslation('why_main_p','ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف النقطة الاساسية (en) </label>
                                                        <input type="text" class="form-control" name="why_main_p[en]"
                                                            required value="{{ $content->getTranslation('why_main_p','en') }}">
                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
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
