@extends('dashboard.layouts.app')
@section('title', ' Emails Management ')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> Emails Management </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Home </a>
                            </li>
                            <li class="breadcrumb-item active"> Emails Management
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
                            <a href="{{ route('dashboard.mail.create') }}" class="btn btn-primary"> Add New Email
                            </a>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th> Name </th>
                                                <th> Email </th>
                                                <th> Subject </th>
                                                <th> Message </th>
                                                <th> Date </th>
                                                {{-- <th> Actions </th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($mails as $mail)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td> {{ $mail->name }} </td>
                                                <td> {{ $mail->email }} </td>
                                                <td> {{ $mail->subject }} </td>
                                                <td> {{ $mail->message }} </td>
                                                <td> {{ $mail->created_at->format('Y/m/d - h:i a') }} </td>
                                                {{-- <td>
                                                    <a class="btn btn-info btn-sm"
                                                        href="{{ route('mail.details', $mail->id) }}"><i
                                                            class="la la-edit"></i> تفاصيل </a>
                                                    <a href="#" class="btn btn-danger btn-sm">
                                                        حذف <i class="la la-trash"></i>
                                                    </a>
                                                </td> --}}
                                            </tr>
                                            @empty
                                            <td colspan="4"> No data available </td>
                                            @endforelse
                                        </tbody>
                                    </table>

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
