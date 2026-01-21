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
                                    <form class="form" method="POST" action="{{ route('dashboard.package.store') }}">
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
                                                            value="{{ old('hero_first_title[ar]')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الاول (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_first_title[en]" required
                                                            value="{{ old('hero_first_title[en]') }}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الاساسي (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_main_title[ar]" required
                                                            value="{{ old('hero_main_title[ar]')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الاساسي (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_main_title[en]" required
                                                            value="{{ old('hero_main_title[en]') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف (ar) </label>
                                                        <input type="text" class="form-control" name="hero_p[ar]"
                                                            required value="{{ old('hero_p[ar]')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الوصف (en) </label>
                                                        <input type="text" class="form-control" name="hero_p[en]"
                                                            required value="{{ old('hero_p[en]') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> المدينة (ar) </label>
                                                        <input type="text" class="form-control" name="hero_city[ar]"
                                                            required value="{{ old('hero_city[ar]')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> المدينة (en) </label>
                                                        <input type="text" class="form-control" name="hero_city[en]"
                                                            required value="{{ old('hero_city[en]') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> التاريخ (ar) </label>
                                                        <input type="text" class="form-control" name="hero_date[ar]"
                                                            required value="{{ old('hero_date[ar]')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> التاريخ (en) </label>
                                                        <input type="text" class="form-control" name="hero_date[en]"
                                                            required value="{{ old('hero_date[en]') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> الصورة الاولي </label>
                                                        <input type="file" class="form-control" name="hero_img1"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> الصورة الثانية </label>
                                                        <input type="file" class="form-control" name="hero_img2"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> الصورة الثالثة </label>
                                                        <input type="file" class="form-control" name="hero_img3"
                                                            required>
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
                                                            name="hero_first_title[ar]" required
                                                            value="{{ old('hero_first_title[ar]')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان الاول (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="hero_first_title[en]" required
                                                            value="{{ old('hero_first_title[en]') }}">
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
