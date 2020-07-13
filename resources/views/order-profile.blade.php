@extends('Layouts.master')
@section('title','Order Profile')
@section('name','Ahmed')
@section('extra_title','Order Profile')

@section('content')

<div class="row">
    <div class="col-md-5 col-md-offset-1">
        <div class="chart pd-b-0 order">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-data cust-profile rest-prof order-prof order-data">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                            </div>
                            <div class="col-xs-6 data">
                                <h5></h5>
                                <p class="desc"></p>
                                <div class="row latest">
                                    <p class="stars"><i class="fa fa-star"></i> <b></b></p>
                                    <p class="stars"><i class="fa fa-dollar-sign"></i> <b></b></p>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row more-info cust-resets">
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-clock"></i> Date</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 date"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fas fa-cookie"></i> Dish</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 dish"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fas fa-wine-glass-alt"></i> Drinks</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 drink"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-utensils"></i> Type</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 type"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-money-bill-wave-alt"></i> Payment Type</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 payment"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-parking"></i> Process</label>
                                    </div>
                                    <div class="col-xs-6 proccess">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-file-invoice"></i> Status</label>
                                    </div>
                                    <div class="col-xs-6 status">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="chart pd-b-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-data cust-profile rest-prof order-prof rest-data">
                        <div class="row">
                            <div class="col-xs-3 text-center">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                            </div>
                            <div class="col-xs-9">
                                <h5></h5>
                                <p class="desc"></p>
                                <p class="stars"><i class="fa fa-star"></i> <b></b></p>
                            </div>
                            <hr>
                        </div>
                        <div class="row more-info cust-resets">
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-envelope"></i> Email</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 email"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-phone"></i> Phone</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 phone"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-map-marker-alt"></i> Address</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 address"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fab fa-paypal"></i> Paypal</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 paypal"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-dollar-sign"></i> Earned This Month</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 earned"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-file-invoice"></i> # Orders</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 number"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5 col-md-offset-1 col-xs-12">
        <div class="chart pd-b-5">
            <div class="row">
                <div class="chart-data order-det order-det-person customer-data">
                    <h4><i class="fa fa-user"></i> Customer</h4>
                    <div class="row more-info">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5></h5>
                                <p class="desc dish-desc"></p>
                                <p class="date dish-desc cust-email"><i class="fa fa-envelope"></i></p>
                                <p class="date dish-desc cust-address"><i class="fa fa-map-marker-alt"></i></p>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="col-md-5 tests driver col-xs-12">
        <div class="chart pd-b-5">
            <div class="row">
                <div class="chart-data order-det order-det-person driver-data">
                    <h4><i class="fa fa-people-carry"></i> Delivery Man</h4>
                    <div class="row more-info">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5></h5>
                                <p class="desc dish-desc descr"></p>
                                <p class="date dish-desc email"><i class="fa fa-envelope"></i></p>
                                <p class="date dish-desc phone"><i class="fa fa-phone"></i></p>
                                <p class="date dish-desc paypal"><i class="fab fa-paypal"></i></p>
                                <p class="find-p"><label class="btn btn-xs btn-success"></label></p>
                                <div class="row last">
                                    <div class="col-xs-12 text-left"><p class="stars licen"></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ URL::to('/assets/js/order-profile.js') }}"></script>
@endsection