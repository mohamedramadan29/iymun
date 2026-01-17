@extends('dashboard.layouts.app')
@section('title', ' اضافة قالب جديد ')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block">اضافة قالب جديد</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.images.difference') }}">القوالب
                                </a></li>
                            <li class="breadcrumb-item active">اضافة قالب جديد</li>
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
                                <h4 class="card-title">اضافة قالب جديد</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <form action="{{ route('dashboard.images.difference.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label> العنوان </label>
                                            <input type="text" class="form-control" name="title"
                                                value="{{ old('title') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label> الصورة الاساسية </label>
                                            <input type="file" class="form-control" name="image_one" required>
                                        </div>
                                        <div class="form-group">
                                            <label> الصورة الثانية </label>
                                            <input type="file" class="form-control" name="image_two" required>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> اضافة
                                            </button>
                                            <a href="{{ route('dashboard.images.difference') }}"
                                                class="btn btn-warning mr-1">
                                                <i class="la la-times"></i> الغاء
                                            </a>
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
