@extends('dashboard.layouts.app')

@section('title', ' محتوي صفحة لماذا تنضم الينا ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> محتوي صفحة لماذا تنضم الينا </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"> محتوي صفحة لماذا تنضم الينا
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
                                <h4 class="card-title" id="basic-layout-form"> محتوي صفحة لماذا تنضم الينا </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST"
                                        action="{{ route('dashboard.content.why-join.update') }}" enctype="multipart/form-data">
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

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label> صورة الهيدر </label>
                                                        <input type="file" class="form-control" name="hero_image">
                                                        @if($content->hero_image)
                                                        <img src="{{ asset('assets/uploads/content/why-join/'.$content->hero_image) }}" style="width: 100px;height: 100px">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Reasons Section -->
                                            <h6 style="badge badge-info bg-info"> الأسباب (Reasons) </h6>
                                            <hr>

                                            @foreach(['reason_title' => 'عنوان القسم', 'reason_desc' => 'وصف القسم'] as $field => $label)
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

                                            <label>قائمة الأسباب (10 أسباب)</label>
                                            @for($i = 1; $i <= 10; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان السبب {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="reason_title{{ $i }}[ar]" required value="{{ $content->getTranslation('reason_title'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان السبب {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="reason_title{{ $i }}[en]" required value="{{ $content->getTranslation('reason_title'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف السبب {{ $i }} (ar) </label>
                                                        <textarea class="form-control" name="reason_desc{{ $i }}[ar]" required>{{ $content->getTranslation('reason_desc'.$i, 'ar')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف السبب {{ $i }} (en) </label>
                                                        <textarea class="form-control" name="reason_desc{{ $i }}[en]" required>{{ $content->getTranslation('reason_desc'.$i, 'en') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endfor

                                            <!-- Testimonials Section -->
                                            <h6 style="badge badge-info bg-info"> آراء المشاركين (Testimonials) </h6>
                                            <hr>

                                            @foreach(['test_title' => 'عنوان القسم', 'test_desc' => 'وصف القسم'] as $field => $label)
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

                                            <label>آراء (3 آراء)</label>
                                            @for($i = 1; $i <= 3; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الاسم {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="testmon_name{{ $i }}[ar]" required value="{{ $content->getTranslation('testmon_name'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الاسم {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="testmon_name{{ $i }}[en]" required value="{{ $content->getTranslation('testmon_name'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الرأي {{ $i }} (ar) </label>
                                                        <textarea class="form-control" name="testmon_desc{{ $i }}[ar]" required>{{ $content->getTranslation('testmon_desc'.$i, 'ar')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> الرأي {{ $i }} (en) </label>
                                                        <textarea class="form-control" name="testmon_desc{{ $i }}[en]" required>{{ $content->getTranslation('testmon_desc'.$i, 'en') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endfor

                                            <!-- Career & Academic Section -->
                                            <h6 style="badge badge-info bg-info"> المسار المهني والأكاديمي </h6>
                                            <hr>

                                            @foreach(['career_title' => 'العنوان الرئيسي', 'career_desc' => 'الوصف'] as $field => $label)
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

                                            <!-- University Applications -->
                                            <label>التقديم للجامعات</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان القسم (ar) </label>
                                                        <input type="text" class="form-control" name="university_title[ar]" required value="{{ $content->getTranslation('university_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان القسم (en) </label>
                                                        <input type="text" class="form-control" name="university_title[en]" required value="{{ $content->getTranslation('university_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @for($i = 1; $i <= 5; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="university_title_point{{ $i }}[ar]" required value="{{ $content->getTranslation('university_title_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="university_title_point{{ $i }}[en]" required value="{{ $content->getTranslation('university_title_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <!-- Career Opportunities -->
                                            <label>الفرص المهنية</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان القسم (ar) </label>
                                                        <input type="text" class="form-control" name="career_title2[ar]" required value="{{ $content->getTranslation('career_title2', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان القسم (en) </label>
                                                        <input type="text" class="form-control" name="career_title2[en]" required value="{{ $content->getTranslation('career_title2', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @for($i = 1; $i <= 5; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="career_title_point{{ $i }}[ar]" required value="{{ $content->getTranslation('career_title_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="career_title_point{{ $i }}[en]" required value="{{ $content->getTranslation('career_title_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
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
