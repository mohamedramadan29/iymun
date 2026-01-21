@extends('dashboard.layouts.app')

@section('title', ' اضافة بريد جديد ')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> اضافة بريد جديد </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.mails.index') }}"> الايميلات </a>
                            </li>
                            <li class="breadcrumb-item active"><a href="#"> اضافة بريد الكتروني جديد </a>
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
                                <h4 class="card-title" id="basic-layout-form"> اضافة بريد الكتروني جديد </h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" method="POST" action="{{ route('dashboard.user.mail.store') }}">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <input type="hidden" name="user_id" value="{{ $user->id }}" id="">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name"> الاسم </label>
                                                        <input readonly type="text" id="name" class="form-control"
                                                            placeholder="  name " name="name" required
                                                            value="{{ $user->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email"> البريد الالكتروني </label>
                                                        <input readonly type="email" id="email" class="form-control"
                                                            placeholder="  email " name="email" required
                                                            value="{{ $user->email }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="subject"> عنوان الرسالة </label>
                                                        <input type="text" id="subject" class="form-control"
                                                            placeholder="  subject " name="subject" required
                                                            value="{{ old('subject') }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="subject"> الرسالة </label>
                                                        <textarea name="message" required id=""
                                                            class="form-control">{{ old('message') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button>
                                            <button type="button" class="mr-1 btn btn-warning">
                                                <i class="ft-x"></i> رجوع
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
