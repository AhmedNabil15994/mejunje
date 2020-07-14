@extends('Layouts.master')
@section('title','Rest Profile')
@section('name','Ahmed')
@section('extra_title','Rest Profile')

@section('content')

<div class="row">
    <div class="col-md-5 col-md-offset-1">
        <div class="chart pd-b-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-data cust-profile rest-prof">
                        <div class="row">
                            <div class="col-xs-3 text-center">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                            </div>
                            <div class="col-xs-9">
                                <h5></h5>
                                <p class="desc"></p>
                                <p class="stars"><i class="fa fa-star"></i> <b class="value"></b></p>
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
                                        <label><i class="fa fa-university"></i> Bank Account</label>
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
    <div class="col-md-6">
        <div class="chart pd-b-5">
            <div class="row">
                <div class="chart-data">
                    <h4><i class="fa fa-people-carry"></i> Delivery Options</h4>
                    <div class="row more-info">
                        <div class="col-xs-12 pd-l-0">
                            <div class="form-group">



                                <div class="col-xs-6">
                                    <label><i class="fa fa-motorcycle"></i> Delivery</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="label-2 delivery"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pd-l-0">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><i class="fa fa-map-marker-alt"></i> Delivery Location</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="label-2 delivery-location"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pd-l-0">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><i class="fa fa-dollar-sign"></i> Delivery Price</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="label-2 delivery-price"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pd-l-0">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><i class="fa fa-box-open"></i> Pick Up</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="label-2 pick-up"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>

        <div class="chart pd-b-5">
            <div class="row">
                <div class="chart-data w-100">
                    <h4><i class="far fa-clock"></i> Open Times</h4>
                    <div class="row more-info my-times"></div>
                </div>   
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5 col-md-offset-1">
        <div class="chart cust-profile">
            <div class="row">
                <div class="col-md-10 first">
                    <div class="chart-data">
                        <span>A)</span> <span>My Income Report &nbsp;&nbsp; (100%)</span>
                    </div>
                    <div class="chart-chart reset-chart">
                        <canvas id="myChart" width="300" height="220"></canvas>
                    </div>
                </div>        
                <div class="col-md-2">
                    <div class="actions">
                        <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div class="menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Week</a>
                            <a class="dropdown-item" href="#">Month</a>
                            <a class="dropdown-item" href="#">Year</a>
                          </div>
                        </div>    
                    </div>
                </div>        
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="chart cust-profile pd-b-0">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="chart-data reset-data">
                        <span>Complete Orders</span>
                        <div class="chart-chart chart-chart3 mg-t-10">
                            <canvas id="kt_chart_quick_stats_3" width="50" height="25"></canvas>
                        </div>
                        <p class="rate first"><i class="fa fa-arrow-up"></i> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chart-data reset-data">
                        <span>Cancel Orders</span>
                        <div class="chart-chart chart-chart3 mg-t-10">
                            <canvas id="kt_chart_quick_stats_4" width="50" height="25"></canvas>
                        </div>
                        <p class="rate second"><i class="fa fa-arrow-down"></i> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chart-data reset-data">
                        <span>New Orders</span>
                        <div class="chart-chart chart-chart3 mg-t-10">
                            <canvas id="kt_chart_quick_stats_5" width="50" height="25"></canvas>
                        </div>
                        <p class="rate third"><i class="fa fa-arrow-up"></i> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row yest">
    <div class="col-md-1"></div>
    <div class="col-md-11">
        <div class="chart chart-menu">
            <div class="row yester_row">
                <h4><i class="fa fa-bars"></i> Menu</h4>
                <div class="row my-menu type-menu"></div>   
            </div>
        </div>
    </div>
</div>

<div class="row yest">
    <div class="col-md-1"></div>
    <div class="col-md-11">
        <div class="chart chart-menu">
            <div class="row yester_row">
                <h4><i class="fa fa-receipt"></i> Orders</h4>
                <div class="row my-orders"></div>   
            </div>
        </div>
    </div>
</div>

<div class="row yest">
    <div class="col-md-1"></div>
    <div class="col-md-11">
        <div class="chart chart-menu">
            <div class="row yester_row">
                <h4><i class="fa fa-motorcycle"></i> Delivery Men</h4>
                <div class="row my-delivery"></div>   
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ URL::to('/assets/js/rest-profile.js') }}"></script>
@endsection