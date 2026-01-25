@extends('dashboard.layouts.app')
@section('title', 'الاعدادات ')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/') }}/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/') }}/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/') }}/css-rtl/plugins/forms/checkboxes-radios.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/') }}/vendors/css/editors/summernote.css">
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                    <h3 class="mb-0 content-header-title d-inline-block"> الاعدادات </h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.setting.index') }}"> الاعدادات </a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#"> الاعدادات </a>
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
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                @if (session()->has('success'))
                                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                                @endif
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> الاعدادات </h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" method="POST" id="invoice-form"
                                            action="{{ route('dashboard.setting.update') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name"> اسم الموقع <span class="required_span"> * </span> </label>
                                                            <input required type="text" id="name" class="form-control" name="name" value="{{ $setting->name ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email"> البريد الالكتروني <span class="required_span"> *</span> </label>
                                                            <input required type="email" id="email" class="form-control" name="email" value="{{ $setting->email ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="phone"> رقم الهاتف <span class="required_span"> * </span> </label>
                                                            <input required type="text" id="phone" class="form-control" name="phone" value="{{ $setting->phone ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="full_address"> العنوان بالكامل <span class="required_span"> * </span> </label>
                                                            <input required type="text" id="full_address" class="form-control" name="full_address" value="{{ $setting->full_address ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 d-none">
                                                        <div class="form-group">
                                                            <label for="location"> رابط الموقع (Google Maps) </label>
                                                            <input type="hidden" id="location" class="form-control" name="location" value="{{ $setting->location ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="facebook_url"> رابط الفيسبوك </label>
                                                            <input type="url" id="facebook_url" class="form-control" name="facebook_url" value="{{ $setting->facebook_url ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="x_url"> رابط X (تويتر سابقا) </label>
                                                            <input type="url" id="x_url" class="form-control" name="x_url" value="{{ $setting->x_url ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="instagram_url"> رابط انستغرام </label>
                                                            <input type="url" id="instagram_url" class="form-control" name="instagram_url" value="{{ $setting->instagram_url ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="linkedin_url"> رابط لينكد ان </label>
                                                            <input type="url" id="linkedin_url" class="form-control" name="linkedin_url" value="{{ $setting->linkedin_url ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="youtube_url"> رابط يوتيوب </label>
                                                            <input type="url" id="youtube_url" class="form-control" name="youtube_url" value="{{ $setting->youtube_url ?? '' }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                                <button type="button" class="mr-1 btn btn-warning">
                                                    <i class="ft-x"></i> رجوع
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

@section('js')
    <script src="{{ asset('assets/admin/') }}/vendors/js/editors/summernote/summernote.js" type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/admin/') }}/js/scripts/editors/editor-summernote.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script>
        $(document).ready(function() {
            $('#terms').summernote({
                height: 300,
            });
        });
    </script>
@endsection
