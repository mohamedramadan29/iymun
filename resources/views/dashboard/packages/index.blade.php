@extends('dashboard.layouts.app')
@section('title', ' Plans & Pricing ')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12 breadcrumb-new">
                <h3 class="mb-0 content-header-title d-inline-block"> Plans & Pricing </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.welcome') }}">Home </a>
                            </li>
                            <li class="breadcrumb-item active"> Plans & Pricing
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
                            <a href="{{ route('dashboard.package.create') }}" class="btn btn-primary btn-sm"> Add Plan <i class="la la-plus"></i> </a>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th> Title </th>
                                                <th> Price </th>
                                                <th> Start Date </th>
                                                <th> End Date </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($packages as $package)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td> {{ $package->getTranslation('title','en') }} </td>
                                                <td> {{ $package->price }} </td>
                                                <td> {{ $package->from_date }} </td>
                                                <td> {{ $package->to_date }} </td>
                                                <td>
                                                    <a href="{{ route('dashboard.package.edit', $package->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="la la-edit"></i>
                                                    </a>
                                                    <a href="{{ route('dashboard.package.destroy', $package->id) }}"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return(confirm('Are you sure you want to delete?'))">
                                                        <i class="la la-trash"></i>
                                                    </a>
                                                </td>
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
