@extends('dashboard.layouts.app')
@section('title')
الرئيسية
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
                                        <h3 class="info"> 2 </h3>
                                        <h6> المستخدمين والطلبات </h6>
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
                                        <h3 class="info"> 5 </h3>
                                        <h6> طلبات تحت المراجعة </h6>
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
                                        <h3 class="info"> 3 </h3>
                                        <h6> طلبات تمت الموافقة عليها </h6>
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
                                        <h3 class="info"> 4 </h3>
                                        <h6> تم اكمال الدفع </h6>
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
                                        <h3 class="info"> 5 </h3>
                                        <h6> طلبات مرفوضة </h6>
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
