@extends('Layouts.master')
@section('title','Customer Profile')
@section('name','Ahmed')
@section('extra_title','Customer Profile')

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="chart">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-data cust-profile">
                        <div class="row text-center">
                            <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                            <h5 class="text-center"></h5>
                            <p class="text-center"><i class="fas fa-dot-circle"></i> Offline</p>
                            <hr>
                        </div>
                        <div class="row more-info">
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="form-group has-search">
                                            <input type="text" class="form-control email" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="form-group has-search">
                                            <textarea class="form-control address" disabled></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <label>Login Type</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="form-group has-search">
                                            <input type="text" class="form-control login_type" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <label>Paid This Month</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="form-group has-search">
                                            <input type="text" class="form-control paid" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <label># Orders This Month</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="form-group has-search">
                                            <input type="text" class="form-control number" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row edit-my-data">
                            <button class="btn btn-md"> Edit My Data <i class="fas fa-pencil-alt"></i></button>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="chart cust-profile">
            <div class="row">
                <div class="col-md-10 first">
                    <div class="chart-data">
                        <span>A)</span> <span>My Sales Report &nbsp;&nbsp;</span>
                    </div>
                    <div class="chart-chart">
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
         <div class="chart2 customer">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="chart-data reset-data">
                        <span>Complete Orders</span>
                        <div class="chart-chart chart-chart3">
                            <canvas id="kt_chart_quick_stats_3" width="50" height="25"></canvas>
                        </div>
                        <p class="rate first"><i class="fa fa-arrow-up"></i> 20</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chart-data reset-data">
                        <span>Cancel Orders</span>
                        <div class="chart-chart chart-chart3">
                            <canvas id="kt_chart_quick_stats_4" width="50" height="25"></canvas>
                        </div>
                        <p class="rate second"><i class="fa fa-arrow-down"></i> 10</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chart-data reset-data">
                        <span>New Orders</span>
                        <div class="chart-chart chart-chart3">
                            <canvas id="kt_chart_quick_stats_5" width="50" height="25"></canvas>
                        </div>
                        <p class="rate third"><i class="fa fa-arrow-up"></i> 20</p>
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
                <h4><i class="fa fa-receipt"></i> Orders</h4>
                <div class="row my-orders"></div>   
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ URL::to('/assets/js/customer-profile.js') }}"></script>
@endsection