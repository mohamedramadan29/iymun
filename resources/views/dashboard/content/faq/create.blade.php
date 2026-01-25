@extends('dashboard.layouts.app')
@section('title', 'Add Q')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/vendors/css/editors/summernote.css') }}">
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                    <h3 class="mb-0 content-header-title d-inline-block"> Add Q </h3>
                </div>
            </div>
            <div class="content-body">
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form" action="{{ route('dashboard.content.faq.store') }}" method="POST">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="question">Question</label>
                                                <input type="text" id="question" class="form-control" name="question" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="answer">Answer</label>
                                                <textarea id="answer" rows="5" class="form-control" name="answer"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <select id="category" name="category" class="form-control" required>
                                                    <option value="general">General</option>
                                                    <option value="registration">Registration</option>
                                                    <option value="logistics">Logistics</option>
                                                    <option value="schedule">Schedule</option>
                                                    <option value="safety">Safety</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="order">Order</label>
                                                <input type="number" id="order" class="form-control" name="order" value="0">
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">save</button>
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
    <script src="{{ asset('assets/dashboard/vendors/js/editors/summernote/summernote.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/dashboard/js/scripts/editors/editor-summernote.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#answer').summernote({
                height: 300,
            });
        });
    </script>
@endsection
