@extends('dashboard.layouts.app')
@section('title', ' Payments ')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> Payments </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Home </a>
                            </li>
                            <li class="breadcrumb-item active">  Payments
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
                                                <th> Name </th>
                                                <th> Email </th>
                                                <th> Plan Name </th>
                                                <th> Price </th>
                                                <th> Status </th>
                                                <th> Date </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($payments as $payment)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td> <a href="{{ route('dashboard.user.details',$payment->user_id) }}"> {{ $payment->name }} </a> </td>
                                                <td> {{ $payment->email }} </td>
                                                <td> {{ $payment->package_name }} </td>
                                                <td> {{  number_format($payment->price,2) }} $ </td>
                                                <td> {{ $payment->status }} </td>
                                                <td> {{ $payment->created_at->format('Y/m/d - h:i a') }} </td>


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
