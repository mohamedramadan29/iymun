@extends('dashboard.layouts.app')

@section('title', ' اضافة خطة جديدة ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> اضافة خطة جديدة </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.packages.index') }}"> الخطط
                                    والاسعار
                                </a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#"> اضافة خطة جديدة </a>
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
                                <h4 class="card-title" id="basic-layout-form"> اضافة خطة جديدة </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST" action="{{ route('dashboard.package.store') }}">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان (ar) </label>
                                                        <input type="text" class="form-control" name="title[ar]"
                                                            required value="{{ old('title[ar]')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> العنوان (en) </label>
                                                        <input type="text" class="form-control" name="title[en]"
                                                            required value="{{ old('title[en]') }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> السعر </label>
                                                        <input type="number" class="form-control" name="price" required
                                                            value="{{ old('price')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> من تاريخ </label>
                                                        <input type="date" class="form-control" name="from_date"
                                                            required value="{{ old('from_date') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label> إلى تاريخ </label>
                                                        <input type="date" class="form-control" name="to_date" required
                                                            value="{{ old('to_date') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> slogan (ar) </label>
                                                        <input type="text" class="form-control" name="slogan[ar]"
                                                            required value="{{ old('slogan[ar]')}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> slogan (en) </label>
                                                        <input type="text" class="form-control" name="slogan[en]"
                                                            required value="{{ old('slogan[en]') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> المميزات (ar) </label>
                                                        <textarea name="features[ar]" id="" class="form-control"
                                                            required>{{ old('features[ar]') }}</textarea>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> المميزات (en) </label>
                                                        <textarea name="features[en]" id="" class="form-control"
                                                            required>{{ old('features[en]') }}</textarea>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label> اللون  </label>
                                                        <input type="color" class="form-control" name="color"
                                                            required value="{{ old('color') }}">
                                                    </div>
                                                </div>

                                            </div>


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
