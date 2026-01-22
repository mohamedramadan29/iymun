@extends('dashboard.layouts.app')

@section('title', ' محتوي صفحة من نحن ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> محتوي صفحة من نحن </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"> محتوي صفحة من نحن
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
                                <h4 class="card-title" id="basic-layout-form"> محتوي صفحة من نحن </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST"
                                        action="{{ route('dashboard.content.about.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">

                                            <!-- Hero Section -->
                                            <h6 style="badge badge-info bg-info"> قسم الهيدر (Hero Section) </h6>
                                            <hr>
                                            @foreach(['hero_title' => 'العنوان الرئيسي', 'hero_sub_title' => 'العنوان الفرعي', 'hero_color_title' => 'العنوان الملون', 'hero_description' => 'الوصف'] as $field => $label)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (ar) </label>
                                                        <input type="text" class="form-control"
                                                            name="{{ $field }}[ar]" required
                                                            value="{{ $content->getTranslation($field, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (en) </label>
                                                        <input type="text" class="form-control"
                                                            name="{{ $field }}[en]" required
                                                            value="{{ $content->getTranslation($field, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            <!-- About Section -->
                                            <h6 style="badge badge-info bg-info"> قسم من نحن (About Section) </h6>
                                            <hr>
                                            @foreach(['about_title' => 'عنوان من نحن', 'about_desc' => 'وصف من نحن'] as $field => $label)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (ar) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[ar]" required value="{{ $content->getTranslation($field, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (en) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[en]" required value="{{ $content->getTranslation($field, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label> صورة من نحن </label>
                                                        <input type="file" class="form-control" name="about_image">
                                                        @if($content->about_image)
                                                        <img src="{{ asset('assets/uploads/content/about/'.$content->about_image) }}" style="width: 100px;height: 100px">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <label>نقاط من نحن</label>
                                            @for($i = 1; $i <= 4; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> النقطة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="about_point{{ $i }}[ar]" required value="{{ $content->getTranslation('about_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> النقطة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="about_point{{ $i }}[en]" required value="{{ $content->getTranslation('about_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <!-- Mission & Vision -->
                                            <h6 style="badge badge-info bg-info"> الرؤية والرسالة </h6>
                                            <hr>

                                            @foreach(['m_section_title' => 'عنوان القسم', 'm_section_p' => 'وصف القسم', 'mission_title' => 'عنوان الرسالة', 'mission_desc' => 'وصف الرسالة', 'vission_title' => 'عنوان الرؤية', 'vission_desc' => 'وصف الرؤية'] as $field => $label)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (ar) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[ar]" required value="{{ $content->getTranslation($field, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (en) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[en]" required value="{{ $content->getTranslation($field, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            <!-- Core Values -->
                                            <h6 style="badge badge-info bg-info"> القيم الجوهرية (Core Values) </h6>
                                            <hr>

                                            @foreach(['core_title' => 'عنوان القيم', 'core_p' => 'وصف القيم'] as $field => $label)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (ar) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[ar]" required value="{{ $content->getTranslation($field, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (en) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[en]" required value="{{ $content->getTranslation($field, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            <label>نقاط القيم</label>
                                            @for($i = 1; $i <= 6; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="core_point_title{{ $i }}[ar]" required value="{{ $content->getTranslation('core_point_title'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="core_point_title{{ $i }}[en]" required value="{{ $content->getTranslation('core_point_title'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف النقطة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="core_point_p{{ $i }}[ar]" required value="{{ $content->getTranslation('core_point_p'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف النقطة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="core_point_p{{ $i }}[en]" required value="{{ $content->getTranslation('core_point_p'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endfor

                                            <!-- Differentiators -->
                                            <h6 style="badge badge-info bg-info"> لماذا نحن (Differentiators) </h6>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان (ar) </label>
                                                        <input type="text" class="form-control" name="diff_title[ar]" required value="{{ $content->getTranslation('diff_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان (en) </label>
                                                        <input type="text" class="form-control" name="diff_title[en]" required value="{{ $content->getTranslation('diff_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <label>نقاط التميز</label>
                                            @for($i = 1; $i <= 4; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="diff_point{{ $i }}_title[ar]" required value="{{ $content->getTranslation('diff_point'.$i.'_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="diff_point{{ $i }}_title[en]" required value="{{ $content->getTranslation('diff_point'.$i.'_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف النقطة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="diff_point{{ $i }}_p[ar]" required value="{{ $content->getTranslation('diff_point'.$i.'_p', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف النقطة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="diff_point{{ $i }}_p[en]" required value="{{ $content->getTranslation('diff_point'.$i.'_p', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endfor

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
