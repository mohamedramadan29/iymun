@extends('dashboard.layouts.app')
@section('title', ' Edit Q ')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/vendors/css/editors/summernote.css') }}">
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                    <h3 class="mb-0 content-header-title d-inline-block"> Edit Q </h3>
                </div>
            </div>
            <div class="content-body">
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form" action="{{ route('dashboard.content.faq.update', $faq->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="question"> Question </label>
                                                <input type="text" id="question" class="form-control" name="question" value="{{ $faq->question }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="answer"> Answer </label>
                                                <textarea id="answer" rows="5" class="form-control" name="answer">{{ $faq->answer }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <select id="category" name="category" class="form-control" required>
                                                    <option value="general" {{ $faq->category == 'general' ? 'selected' : '' }}>General</option>
                                                    <option value="registration" {{ $faq->category == 'registration' ? 'selected' : '' }}>Registration</option>
                                                    <option value="logistics" {{ $faq->category == 'logistics' ? 'selected' : '' }}>Logistics</option>
                                                    <option value="schedule" {{ $faq->category == 'schedule' ? 'selected' : '' }}>Schedule</option>
                                                    <option value="safety" {{ $faq->category == 'safety' ? 'selected' : '' }}>Safety</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="order">Order</label>
                                                <input type="number" id="order" class="form-control" name="order" value="{{ $faq->order }}">
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="{{ route('dashboard.content.faq.index') }}" class="btn btn-warning">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/dashboard/') }}/vendors/js/editors/summernote/summernote.js" type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard/') }}/js/scripts/editors/editor-summernote.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#answer').summernote({
                height: 300,
            });
        });
    </script>
@endsection
