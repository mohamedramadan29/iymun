@extends('dashboard.layouts.app')

@section('title', ' Partner Page Content ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> Partner Page Content </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Home </a></li>
                            <li class="breadcrumb-item active"> Partner Page Content </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> Partner Page Management (AR/EN) </h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST" action="{{ route('dashboard.content.partner.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">

                                            <!-- Hero Section -->
                                            <h4 class="form-section"><i class="la la-image"></i> Hero Section</h4>
                                            @foreach(['hero_title' => 'Main Title', 'hero_sub_title' => 'Sub Title', 'hero_color_title' => 'Colored Title', 'hero_description' => 'Description'] as $field => $label)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (ar) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[ar]" value="{{ $content ? $content->getTranslation($field, 'ar') : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (en) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[en]" value="{{ $content ? $content->getTranslation($field, 'en') : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label> Hero Image </label>
                                                        <input type="file" class="form-control" name="hero_image">
                                                        @if($content && $content->hero_image)
                                                        <img src="{{ asset('assets/uploads/content/partener/'.$content->hero_image) }}" style="width: 150px; margin-top: 10px;" class="rounded shadow-sm">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Founding Partners - American Diplomats -->
                                            <h4 class="form-section"><i class="la la-users"></i> Founding Partners: American Diplomats</h4>
                                            @foreach(['american_title' => 'Title', 'american_sub_title' => 'Sub Title', 'american_p' => 'Description', 'contribute_title' => 'Contribution Title'] as $field => $label)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (ar) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[ar]" value="{{ $content ? $content->getTranslation($field, 'ar') : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (en) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[en]" value="{{ $content ? $content->getTranslation($field, 'en') : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Contribution Points (ar) </label>
                                                        <textarea class="form-control" name="contribute_points[ar]" rows="4">{{ $content ? $content->getTranslation('contribute_points', 'ar') : '' }}</textarea>
                                                        <small class="text-muted">Enter points separated by new lines</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Contribution Points (en) </label>
                                                        <textarea class="form-control" name="contribute_points[en]" rows="4">{{ $content ? $content->getTranslation('contribute_points', 'en') : '' }}</textarea>
                                                        <small class="text-muted">Enter points separated by new lines</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Founding Partners - IYADMUN -->
                                            <h4 class="form-section"><i class="la la-globe"></i> Founding Partners: International Youth MUN</h4>
                                            @foreach(['iymun_title' => 'Title', 'iymun_sub_title' => 'Sub Title', 'iymun_p' => 'Description', 'track_title' => 'Track Record Title'] as $field => $label)
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (ar) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[ar]" value="{{ $content ? $content->getTranslation($field, 'ar') : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (en) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[en]" value="{{ $content ? $content->getTranslation($field, 'en') : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Track Record Points (ar) </label>
                                                        <textarea class="form-control" name="track_points[ar]" rows="4">{{ $content ? $content->getTranslation('track_points', 'ar') : '' }}</textarea>
                                                        <small class="text-muted">Enter points separated by new lines</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Track Record Points (en) </label>
                                                        <textarea class="form-control" name="track_points[en]" rows="4">{{ $content ? $content->getTranslation('track_points', 'en') : '' }}</textarea>
                                                        <small class="text-muted">Enter points separated by new lines</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Platinum Sponsors -->
                                            <h4 class="form-section"><i class="la la-diamond"></i> Platinum Sponsors Section</h4>
                                            <div class="row">
                                                @foreach(['platinum_title' => 'Section Title', 'platinum_p' => 'Section Description'] as $field => $label)
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (ar) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[ar]" value="{{ $content ? $content->getTranslation($field, 'ar') : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (en) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[en]" value="{{ $content ? $content->getTranslation($field, 'en') : '' }}">
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="row">
                                                @for($i=1; $i<=4; $i++)
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Sponsor {{ $i }} Name (ar) </label>
                                                        <input type="text" class="form-control" name="platinum{{ $i }}_title[ar]" value="{{ $content ? $content->getTranslation('platinum'.$i.'_title', 'ar') : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Sponsor {{ $i }} Name (en) </label>
                                                        <input type="text" class="form-control" name="platinum{{ $i }}_title[en]" value="{{ $content ? $content->getTranslation('platinum'.$i.'_title', 'en') : '' }}">
                                                    </div>
                                                </div>
                                                @endfor
                                            </div>

                                            <!-- Academic Partners -->
                                            <h4 class="form-section"><i class="la la-university"></i> Academic Partners Section</h4>
                                            <div class="row">
                                                @foreach(['academic_title' => 'Section Title', 'academic_p' => 'Section Description'] as $field => $label)
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (ar) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[ar]" value="{{ $content ? $content->getTranslation($field, 'ar') : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> {{ $label }} (en) </label>
                                                        <input type="text" class="form-control" name="{{ $field }}[en]" value="{{ $content ? $content->getTranslation($field, 'en') : '' }}">
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            @for($i=1; $i<=6; $i++)
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Partner {{ $i }} Title (ar) </label>
                                                        <input type="text" class="form-control" name="academic{{ $i }}_title[ar]" value="{{ $content ? $content->getTranslation('academic'.$i.'_title', 'ar') : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Partner {{ $i }} Title (en) </label>
                                                        <input type="text" class="form-control" name="academic{{ $i }}_title[en]" value="{{ $content ? $content->getTranslation('academic'.$i.'_title', 'en') : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Partner {{ $i }} Subtitle/Info (ar) </label>
                                                        <input type="text" class="form-control" name="academic{{ $i }}_p[ar]" value="{{ $content ? $content->getTranslation('academic'.$i.'_p', 'ar') : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Partner {{ $i }} Subtitle/Info (en) </label>
                                                        <input type="text" class="form-control" name="academic{{ $i }}_p[en]" value="{{ $content ? $content->getTranslation('academic'.$i.'_p', 'en') : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                            <!-- Partners Testimonials -->
                                            <h4 class="form-section"><i class="la la-quote-left"></i> What Our Partners Say</h4>
                                            @for($i=1; $i<=3; $i++)
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Testimonial {{ $i }} Text (ar) </label>
                                                        <textarea class="form-control" name="partner_say{{ $i }}_text[ar]" rows="3">{{ $content ? $content->getTranslation('partner_say'.$i.'_text', 'ar') : '' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Testimonial {{ $i }} Text (en) </label>
                                                        <textarea class="form-control" name="partner_say{{ $i }}_text[en]" rows="3">{{ $content ? $content->getTranslation('partner_say'.$i.'_text', 'en') : '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Name & Title {{ $i }} (ar) </label>
                                                        <input type="text" class="form-control" name="partner_say{{ $i }}_name[ar]" value="{{ $content ? $content->getTranslation('partner_say'.$i.'_name', 'ar') : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> Name & Title {{ $i }} (en) </label>
                                                        <input type="text" class="form-control" name="partner_say{{ $i }}_name[en]" value="{{ $content ? $content->getTranslation('partner_say'.$i.'_name', 'en') : '' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor

                                        </div>
                                        <div class="form-actions center">
                                            <button type="submit" class="btn btn-primary btn-lg">
                                                <i class="la la-check-square-o"></i> Save Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
