@extends('dashboard.layouts.app')

@section('title', ' Committee Page Content ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> Committee Page Content </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Home </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"> Committee Page Content
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
                                <h4 class="card-title" id="basic-layout-form"> Committee Page Content </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST"
                                        action="{{ route('dashboard.content.committee.update') }}" enctype="multipart/form-data">
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
                                                        <img src="{{ asset('assets/uploads/content/committee/'.$content->hero_image) }}" style="width: 100px;height: 100px">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Choose Committee Section -->
                                            <h6 style="badge badge-info bg-info"> Choose Committee Section </h6>
                                            <hr>

                                            @foreach(['committee_title' => 'Title', 'committee_desc' => 'Description'] as $field => $label)
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
                                            <h6 style="badge badge-error bg-danger"> First Committee </h6>
                                            <hr>

                                            @foreach(['com1_slogan' => 'Slogan', 'com1_topic_title' => 'Topic Title', 'com1_topic_p' => 'Topic Description', 'com1_discus_title' => 'Discussion Title', 'com1_learn_title' => 'Learning Title'] as $field => $label)
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

                                            <label>Discussion Points (Committee 1)</label>
                                            @for($i = 1; $i <= 5; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Discussion Point {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="com1_discus_point{{ $i }}[ar]" required value="{{ $content->getTranslation('com1_discus_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Discussion Point {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="com1_discus_point{{ $i }}[en]" required value="{{ $content->getTranslation('com1_discus_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <label>Learning Points (Committee 1)</label>
                                            @for($i = 1; $i <= 4; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Learning Point {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="com1_learn_point{{ $i }}[ar]" required value="{{ $content->getTranslation('com1_learn_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Learning Point {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="com1_learn_point{{ $i }}[en]" required value="{{ $content->getTranslation('com1_learn_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor


                                            <!-- Committee 2 -->
                                            <h6 style="badge badge-warning bg-warning"> Second Committee </h6>
                                            <hr>

                                            @foreach(['com2_slogan' => 'Slogan', 'com2_topic_title' => 'Topic Title', 'com2_topic_p' => 'Topic Description', 'com2_discus_title' => 'Discussion Title', 'com2_learn_title' => 'Learning Title'] as $field => $label)
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

                                            <label>Discussion Points (Committee 2)</label>
                                            @for($i = 1; $i <= 5; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Discussion Point {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="com2_discus_point{{ $i }}[ar]" required value="{{ $content->getTranslation('com2_discus_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Discussion Point {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="com2_discus_point{{ $i }}[en]" required value="{{ $content->getTranslation('com2_discus_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <label>Learning Points (Committee 2)</label>
                                            @for($i = 1; $i <= 4; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Learning Point {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="com2_learn_point{{ $i }}[ar]" required value="{{ $content->getTranslation('com2_learn_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Learning Point {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="com2_learn_point{{ $i }}[en]" required value="{{ $content->getTranslation('com2_learn_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <!-- How Work Section -->
                                            <h6 style="badge badge-info bg-info"> How It Works </h6>
                                            <hr>

                                            @foreach(['how_work_title' => 'Title', 'how_work_desc' => 'Description'] as $field => $label)
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

                                            <label>Workflow Steps</label>
                                            @for($i = 1; $i <= 4; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Step Title {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="how_work_title_point{{ $i }}[ar]" required value="{{ $content->getTranslation('how_work_title_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Step Title {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="how_work_title_point{{ $i }}[en]" required value="{{ $content->getTranslation('how_work_title_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Step Description {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="how_work_desc_point{{ $i }}[ar]" required value="{{ $content->getTranslation('how_work_desc_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Step Description {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="how_work_desc_point{{ $i }}[en]" required value="{{ $content->getTranslation('how_work_desc_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            @endfor


                                            <!-- Why Join Section -->
                                            <h6 style="badge badge-info bg-info"> Why Join </h6>
                                            <hr>

                                            @foreach(['why_join_title' => 'Title', 'why_join_desc' => 'Description'] as $field => $label)
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

                                            <label>Why Join Points</label>
                                            @for($i = 1; $i <= 6; $i++)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="why_join_title_point{{ $i }}[ar]" required value="{{ $content->getTranslation('why_join_title_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Title {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="why_join_title_point{{ $i }}[en]" required value="{{ $content->getTranslation('why_join_title_point'.$i, 'en') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="why_join_p_point{{ $i }}[ar]" required value="{{ $content->getTranslation('why_join_p_point'.$i, 'ar')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Point Description {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="why_join_p_point{{ $i }}[en]" required value="{{ $content->getTranslation('why_join_p_point'.$i, 'en') }}">
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
