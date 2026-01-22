@extends('dashboard.layouts.app')

@section('title', ' محتوي صفحة اللجان ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> محتوي صفحة اللجان </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"> محتوي صفحة اللجان
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
                                <h4 class="card-title" id="basic-layout-form"> محتوي صفحة اللجان </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST"
                                        action="{{ route('dashboard.content.committee.update') }}" enctype="multipart/form-data">
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
                                                        <img src="{{ asset('assets/uploads/content/committee/'.$content->hero_image) }}" style="width: 100px;height: 100px">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Choose Committee Section -->
                                            <h6 style="badge badge-info bg-info"> قسم اختيار اللجنة (Choose Committee) </h6>
                                            <hr>

                                            @foreach(['committee_title' => 'العنوان', 'committee_desc' => 'الوصف'] as $field => $label)
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

                                            <!-- Committee 1 -->
                                            <h6 style="badge badge-error bg-danger"> اللجنة الأولى (Committee 1) </h6>
                                            <hr>

                                            @foreach(['com1_slogan' => 'الشعار (Slogan)', 'com1_topic_title' => 'عنوان الموضوع', 'com1_topic_p' => 'وصف الموضوع', 'com1_discus_title' => 'عنوان المناقشة', 'com1_learn_title' => 'عنوان التعلم'] as $field => $label)
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

                                            <label>نقاط المناقشة (Committee 1)</label>
                                            @for($i = 1; $i <= 5; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة المناقشة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="com1_discus_point{{ $i }}[ar]" required value="{{ $content->getTranslation('com1_discus_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة المناقشة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="com1_discus_point{{ $i }}[en]" required value="{{ $content->getTranslation('com1_discus_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <label>نقاط التعلم (Committee 1)</label>
                                            @for($i = 1; $i <= 4; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة التعلم {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="com1_learn_point{{ $i }}[ar]" required value="{{ $content->getTranslation('com1_learn_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة التعلم {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="com1_learn_point{{ $i }}[en]" required value="{{ $content->getTranslation('com1_learn_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor


                                            <!-- Committee 2 -->
                                            <h6 style="badge badge-warning bg-warning"> اللجنة الثانية (Committee 2) </h6>
                                            <hr>

                                            @foreach(['com2_slogan' => 'الشعار (Slogan)', 'com2_topic_title' => 'عنوان الموضوع', 'com2_topic_p' => 'وصف الموضوع', 'com2_discus_title' => 'عنوان المناقشة', 'com2_learn_title' => 'عنوان التعلم'] as $field => $label)
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

                                            <label>نقاط المناقشة (Committee 2)</label>
                                            @for($i = 1; $i <= 5; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة المناقشة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="com2_discus_point{{ $i }}[ar]" required value="{{ $content->getTranslation('com2_discus_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة المناقشة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="com2_discus_point{{ $i }}[en]" required value="{{ $content->getTranslation('com2_discus_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <label>نقاط التعلم (Committee 2)</label>
                                            @for($i = 1; $i <= 4; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة التعلم {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="com2_learn_point{{ $i }}[ar]" required value="{{ $content->getTranslation('com2_learn_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> نقطة التعلم {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="com2_learn_point{{ $i }}[en]" required value="{{ $content->getTranslation('com2_learn_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <!-- How Work Section -->
                                            <h6 style="badge badge-info bg-info"> كيف نعمل (How It Works) </h6>
                                            <hr>

                                            @foreach(['how_work_title' => 'العنوان', 'how_work_desc' => 'الوصف'] as $field => $label)
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

                                            <label>خطوات العمل</label>
                                            @for($i = 1; $i <= 4; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان الخطوة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="how_work_title_point{{ $i }}[ar]" required value="{{ $content->getTranslation('how_work_title_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان الخطوة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="how_work_title_point{{ $i }}[en]" required value="{{ $content->getTranslation('how_work_title_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف الخطوة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="how_work_desc_point{{ $i }}[ar]" required value="{{ $content->getTranslation('how_work_desc_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف الخطوة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="how_work_desc_point{{ $i }}[en]" required value="{{ $content->getTranslation('how_work_desc_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endfor


                                            <!-- Why Join Section -->
                                            <h6 style="badge badge-info bg-info"> لماذا تنضم إلينا (Why Join) </h6>
                                            <hr>

                                            @foreach(['why_join_title' => 'العنوان', 'why_join_desc' => 'الوصف'] as $field => $label)
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

                                            <label>نقاط لماذا تنضم</label>
                                            @for($i = 1; $i <= 6; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="why_join_title_point{{ $i }}[ar]" required value="{{ $content->getTranslation('why_join_title_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> عنوان النقطة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="why_join_title_point{{ $i }}[en]" required value="{{ $content->getTranslation('why_join_title_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف النقطة {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="why_join_p_point{{ $i }}[ar]" required value="{{ $content->getTranslation('why_join_p_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> وصف النقطة {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="why_join_p_point{{ $i }}[en]" required value="{{ $content->getTranslation('why_join_p_point'.$i, 'en') }}">
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
