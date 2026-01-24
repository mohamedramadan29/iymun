@extends('dashboard.layouts.app')

@section('title', ' About Us Content ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> About Us Content </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Home </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"> About Us Content
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
                                <h4 class="card-title" id="basic-layout-form"> About Us Content </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST"
                                        action="{{ route('dashboard.content.about.update') }}" enctype="multipart/form-data">
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

                                            <!-- About Section -->
                                            <h6 style="badge badge-info bg-info"> About Section </h6>
                                            <hr>
                                            @foreach(['about_title' => 'About Title', 'about_desc' => 'About Description'] as $field => $label)
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
                                                        <label> About Image </label>
                                                        <input type="file" class="form-control" name="about_image">
                                                        @if($content->about_image)
                                                        <img src="{{ asset('assets/uploads/content/about/'.$content->about_image) }}" style="width: 100px;height: 100px">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <label>About Points</label>
                                            @for($i = 1; $i <= 4; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="about_point{{ $i }}[ar]" required value="{{ $content->getTranslation('about_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="about_point{{ $i }}[en]" required value="{{ $content->getTranslation('about_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <!-- Mission & Vision -->
                                            <h6 style="badge badge-info bg-info"> Vision & Mission </h6>
                                            <hr>

                                            @foreach(['m_section_title' => 'Section Title', 'm_section_p' => 'Section Description', 'mission_title' => 'Mission Title', 'mission_desc' => 'Mission Description', 'vission_title' => 'Vision Title', 'vission_desc' => 'Vision Description'] as $field => $label)
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
                                            <h6 style="badge badge-info bg-info"> Core Values </h6>
                                            <hr>

                                            @foreach(['core_title' => 'Values Title', 'core_p' => 'Values Description'] as $field => $label)
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

                                            <label>Values Points</label>
                                            @for($i = 1; $i <= 6; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="core_point_title{{ $i }}[ar]" required value="{{ $content->getTranslation('core_point_title'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="core_point_title{{ $i }}[en]" required value="{{ $content->getTranslation('core_point_title'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="core_point_p{{ $i }}[ar]" required value="{{ $content->getTranslation('core_point_p'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="core_point_p{{ $i }}[en]" required value="{{ $content->getTranslation('core_point_p'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endfor

                                            <!-- Differentiators -->
                                            <h6 style="badge badge-info bg-info"> Why Us </h6>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Title (ar) </label>
                                                        <input type="text" class="form-control" name="diff_title[ar]" required value="{{ $content->getTranslation('diff_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Title (en) </label>
                                                        <input type="text" class="form-control" name="diff_title[en]" required value="{{ $content->getTranslation('diff_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <label>Distinction Points</label>
                                            @for($i = 1; $i <= 4; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="diff_point{{ $i }}_title[ar]" required value="{{ $content->getTranslation('diff_point'.$i.'_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="diff_point{{ $i }}_title[en]" required value="{{ $content->getTranslation('diff_point'.$i.'_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="diff_point{{ $i }}_p[ar]" required value="{{ $content->getTranslation('diff_point'.$i.'_p', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="diff_point{{ $i }}_p[en]" required value="{{ $content->getTranslation('diff_point'.$i.'_p', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
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
