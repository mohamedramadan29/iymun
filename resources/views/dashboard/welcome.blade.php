@extends('dashboard.layouts.app')
@section('title')
Home
@endsection
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- eCommerce statistic -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="text-left media-body">
                                        <h3 class="info"> {{ $users->count() }} </h3>
                                        <h6> Users & Orders </h6>
                                    </div>
                                    <div>
                                        <i class="float-right icon-basket-loaded info font-large-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="text-left media-body">
                                        <h3 class="info"> {{ $users_under_review->count() }} </h3>
                                        <h6> Orders Under Review </h6>
                                    </div>
                                    <div>
                                        <i class="float-right icon-basket-loaded info font-large-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="text-left media-body">
                                        <h3 class="info"> {{ $users_approved->count() }} </h3>
                                        <h6> Approved Orders </h6>
                                    </div>
                                    <div>
                                        <i class="float-right icon-basket-loaded info font-large-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="text-left media-body">
                                        <h3 class="info"> {{ $users_completed->count() }} </h3>
                                        <h6> Payment Completed </h6>
                                    </div>
                                    <div>
                                        <i class="float-right icon-basket-loaded info font-large-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="text-left media-body">
                                        <h3 class="info"> {{ $users_rejected->count() }} </h3>
                                        <h6> Rejected Orders </h6>
                                    </div>
                                    <div>
                                        <i class="float-right icon-basket-loaded info font-large-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!--/ eCommerce statistic -->

        </div>
    </div>
</div>
@endsection
