@extends('dashboard.layouts.app')

@section('title', ' Venue Page Content ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> Venue Page Content </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Home </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"> Venue Page Content
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
                                <h4 class="card-title" id="basic-layout-form"> Venue Page Content </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST"
                                        action="{{ route('dashboard.content.venue.update') }}" enctype="multipart/form-data">
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
                                                        <img src="{{ asset('assets/uploads/content/venue/'.$content->hero_image) }}" style="width: 100px;height: 100px">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Coming Soon Section -->
                                            <h6 style="badge badge-warning bg-warning"> Coming Soon </h6>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Title (ar) </label>
                                                        <input type="text" class="form-control" name="coming_soon_title[ar]" required value="{{ $content->getTranslation('coming_soon_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Title (en) </label>
                                                        <input type="text" class="form-control" name="coming_soon_title[en]" required value="{{ $content->getTranslation('coming_soon_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Paragraph 1 (ar) </label>
                                                        <textarea class="form-control" name="coming_soon_p1[ar]" required>{{ $content->getTranslation('coming_soon_p1', 'ar')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Paragraph 1 (en) </label>
                                                        <textarea class="form-control" name="coming_soon_p1[en]" required>{{ $content->getTranslation('coming_soon_p1', 'en') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Paragraph 2 (ar) </label>
                                                        <textarea class="form-control" name="coming_soon_p2[ar]" required>{{ $content->getTranslation('coming_soon_p2', 'ar')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Paragraph 2 (en) </label>
                                                        <textarea class="form-control" name="coming_soon_p2[en]" required>{{ $content->getTranslation('coming_soon_p2', 'en') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Advantages Section -->
                                            <h6 style="badge badge-info bg-info"> Advantages </h6>
                                            <hr>

                                            @for($i = 1; $i <= 3; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Advantage Title {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="adv_title{{ $i }}[ar]" required value="{{ $content->getTranslation('adv_title'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Advantage Title {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="adv_title{{ $i }}[en]" required value="{{ $content->getTranslation('adv_title'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Advantage Description {{ $i }} (ar) </label>
                                                        <textarea class="form-control" name="adv_p{{ $i }}[ar]" required>{{ $content->getTranslation('adv_p'.$i, 'ar')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Advantage Description {{ $i }} (en) </label>
                                                        <textarea class="form-control" name="adv_p{{ $i }}[en]" required>{{ $content->getTranslation('adv_p'.$i, 'en') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endfor

                                            <!-- Why New York City Section -->
                                            <h6 style="badge badge-primary bg-primary"> Why New York City </h6>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Section Title (ar) </label>
                                                        <input type="text" class="form-control" name="why_title[ar]" required value="{{ $content->getTranslation('why_title', 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Section Title (en) </label>
                                                        <input type="text" class="form-control" name="why_title[en]" required value="{{ $content->getTranslation('why_title', 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Section Description (ar) </label>
                                                        <textarea class="form-control" name="why_p1[ar]" required>{{ $content->getTranslation('why_p1', 'ar')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Section Description (en) </label>
                                                        <textarea class="form-control" name="why_p1[en]" required>{{ $content->getTranslation('why_p1', 'en') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <label>Why NYC Points (6 points)</label>
                                            @for($i = 1; $i <= 6; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="why_title_point{{ $i }}[ar]" required value="{{ $content->getTranslation('why_title_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="why_title_point{{ $i }}[en]" required value="{{ $content->getTranslation('why_title_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description {{ $i }} (ar) </label>
                                                        <textarea class="form-control" name="why_p_point{{ $i }}[ar]" required>{{ $content->getTranslation('why_p_point'.$i, 'ar')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description {{ $i }} (en) </label>
                                                        <textarea class="form-control" name="why_p_point{{ $i }}[en]" required>{{ $content->getTranslation('why_p_point'.$i, 'en') }}</textarea>
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
