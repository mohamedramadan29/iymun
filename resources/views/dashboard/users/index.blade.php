@extends('dashboard.layouts.app')
@section('title', ' ادارة المستخدمين ')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> ادارة الطلبات والمستخدمين </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-item active"> ادارة الطلبات والمستخدمين
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">

            </div>
        </div>
        <div class="content-body">

            <!-- Bordered striped start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">


                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th> الاسم </th>
                                                <th> البريد الالكتروني </th>
                                                <th> الحالة </th>
                                                <th> حالة الدفع </th>
                                                <th> حالة الاكتمال </th>
                                                <th> تاريخ التسجيل </th>
                                                <th> العمليات </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($users as $user)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td> {{ $user->name }} </td>
                                                <td> {{ $user->email }} </td>
                                                <td> {{ $user->application_status_from_admin }} </td>
                                                <td> {{ $user->payment_status }} </td>
                                                <td>
                                                    @if ($user->complete_application == 1)
                                                    <span class="badge badge-success">مكتمل</span>
                                                    @else
                                                    <span class="badge badge-danger">غير مكتمل</span>
                                                    @endif
                                                </td>
                                                <td> {{ $user->created_at->format('Y/m/d - h:i a') }} </td>

                                                <td>
                                                    <a href="{{ route('dashboard.user.details', $user->id) }}"
                                                        class="btn btn-info btn-sm">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                     <a href="{{ route('dashboard.user.mail.create', $user->id) }}"
                                                        class="btn btn-warning btn-sm">
                                                        <i class="la la-envelope"></i>
                                                    </a>
                                                    <a href="{{ route('dashboard.user.destroy', $user->id) }}"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return(confirm('هل انت متاكد من الحذف '))">
                                                        <i class="la la-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            @empty
                                            <td colspan="4"> لا يوجد بيانات </td>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bordered striped end -->
        </div>
    </div>
</div>


@endsection
