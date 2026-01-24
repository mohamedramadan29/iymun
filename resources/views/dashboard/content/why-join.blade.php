@extends('dashboard.layouts.app')

@section('title', ' Why Join Us Page Content ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> Why Join Us Page Content </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Home </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"> Why Join Us Page Content
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
                                <h4 class="card-title" id="basic-layout-form"> Why Join Us Page Content </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST"
                                        action="{{ route('dashboard.content.why-join.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">

                                            <!-- Hero Section -->
                                            <h6 style="badge badge-info bg-info"> Hero Section </h6>
                                            <hr>

                                            @foreach(['hero_title' => 'Main Title', 'hero_sub_title' => 'Sub Title', 'hero_color_title' => 'Colored Title', 'hero_description' => 'Description'] as $field => $label)
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
                                                        <label> Hero Image </label>
                                                        <input type="file" class="form-control" name="hero_image">
                                                        @if($content->hero_image)
                                                        <img src="{{ asset('assets/uploads/content/why-join/'.$content->hero_image) }}" style="width: 100px;height: 100px">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Reasons Section -->
                                            <h6 style="badge badge-info bg-info"> Reasons </h6>
                                            <hr>

                                            @foreach(['reason_title' => 'Section Title', 'reason_desc' => 'Section Description'] as $field => $label)
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

                                            <label>Reasons List (10 reasons)</label>
                                            @for($i = 1; $i <= 10; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Reason Title {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="reason_title{{ $i }}[ar]" required value="{{ $content->getTranslation('reason_title'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Reason Title {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="reason_title{{ $i }}[en]" required value="{{ $content->getTranslation('reason_title'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Reason Description {{ $i }} (ar) </label>
                                                        <textarea class="form-control" name="reason_desc{{ $i }}[ar]" required>{{ $content->getTranslation('reason_desc'.$i, 'ar')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Reason Description {{ $i }} (en) </label>
                                                        <textarea class="form-control" name="reason_desc{{ $i }}[en]" required>{{ $content->getTranslation('reason_desc'.$i, 'en') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endfor

                                            <!-- Testimonials Section -->
                                            <h6 style="badge badge-info bg-info"> Testimonials </h6>
                                            <hr>

                                            @foreach(['test_title' => 'Section Title', 'test_desc' => 'Section Description'] as $field => $label)
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

                                            <label>Testimonials List (3)</label>
                                            @for($i = 1; $i <= 3; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Name {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="testmon_name{{ $i }}[ar]" required value="{{ $content->getTranslation('testmon_name'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Name {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="testmon_name{{ $i }}[en]" required value="{{ $content->getTranslation('testmon_name'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Testimonial {{ $i }} (ar) </label>
                                                        <textarea class="form-control" name="testmon_desc{{ $i }}[ar]" required>{{ $content->getTranslation('testmon_desc'.$i, 'ar')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Testimonial {{ $i }} (en) </label>
                                                        <textarea class="form-control" name="testmon_desc{{ $i }}[en]" required>{{ $content->getTranslation('testmon_desc'.$i, 'en') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endfor

                                            <!-- Career & Academic Section -->
                                            <h6 style="badge badge-info bg-info"> Career & Academic Path </h6>
                                            <hr>

                                            @foreach(['career_title' => 'Main Title', 'career_desc' => 'Description'] as $field => $label)
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
                                            <label>University Applications</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Section Title (ar) </label>
                                                        <input type="text" class="form-control" name="university_title[ar]" required value="{{ $content->getTranslation('university_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Section Title (en) </label>
                                                        <input type="text" class="form-control" name="university_title[en]" required value="{{ $content->getTranslation('university_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @for($i = 1; $i <= 5; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="university_title_point{{ $i }}[ar]" required value="{{ $content->getTranslation('university_title_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="university_title_point{{ $i }}[en]" required value="{{ $content->getTranslation('university_title_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <!-- Career Opportunities -->
                                            <label>Career Opportunities</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Section Title (ar) </label>
                                                        <input type="text" class="form-control" name="career_title2[ar]" required value="{{ $content->getTranslation('career_title2', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Section Title (en) </label>
                                                        <input type="text" class="form-control" name="career_title2[en]" required value="{{ $content->getTranslation('career_title2', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @for($i = 1; $i <= 5; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="career_title_point{{ $i }}[ar]" required value="{{ $content->getTranslation('career_title_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="career_title_point{{ $i }}[en]" required value="{{ $content->getTranslation('career_title_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

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
