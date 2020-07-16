@extends('Layouts.master')
@section('title','Dashboard')
@section('name','Ahmed')
@section('extra_title','Hi '.'Ahmed'.', this is your dashboard')

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="chart">
            <div class="row">
                <div class="col-md-10 first">
                    <div class="chart-data">
                        <span>A)</span> <span>Sales Report By Rest</span>
                    </div>
                    <div class="chart-chart">
                        <div id="kt_chart_revenue_change"></div>
                    </div>
                </div>        
                <div class="col-md-2">
                    <div class="actions first-menu">
                        <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div class="menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Month</a>
                            <a class="dropdown-item" href="#">Year</a>
                          </div>
                        </div>    
                    </div>
                </div>        
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="chart">
            <div class="row">
                <div class="col-md-10 first">
                    <div class="chart-data">
                        <span>B)</span> <span>My Income Report &nbsp;&nbsp;(100%)</span>
                    </div>
                    <div class="chart-chart">
                        <canvas id="myChart" width="300" height="220"></canvas>
                    </div>
                </div>        
                <div class="col-md-2">
                    <div class="actions second-menu">
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
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="chart2">
            <div class="row">
                <div class="col-md-6">
                    <div class="chart-data">
                        <span>Today Income</span>
                        <p class="rate"><i class="fa fa-arrow-down"></i> -4%</p>
                        <p class="cost"></p>
                    </div>
                </div>    
                <div class="col-md-6">
                    <div class="chart-chart chart-chart2">
                        <canvas id="kt_chart_quick_stats" width="300" height="150"></canvas>
                    </div>
                </div>         
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="chart2">
            <div class="row">
                <div class="col-md-5">
                    <div class="chart-data">
                        <span class="today">Today Orders</span>
                        <div class="chart-chart chart-chart3">
                            <canvas id="kt_chart_quick_stats_2" width="100" height="78"></canvas>
                        </div>
                    </div>
                </div>    
                <div class="col-md-7">
                    <div class="row">
                        <div class="chart-info">
                            <div class="col-xs-4">
                                <span>Complete</span>
                                <p class="rate today first"><i class="fa fa-arrow-up"></i> </p>
                            </div>
                            <div class="col-xs-4">
                                <span>Cancel</span>
                                <p class="rate today second"><i class="fa fa-arrow-down"></i> </p>
                            </div>
                            <div class="col-xs-4">
                                <span>New</span>
                                <p class="rate today third"><i class="fa fa-arrow-up"></i> </p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="chart2 chart3">
            <div class="row">
                <div class="col-md-4">
                    <div class="chart-data">
                        <span>Complete Orders</span>
                        <div class="chart-chart chart-chart3">
                            <canvas id="kt_chart_quick_stats_3" width="50" height="20"></canvas>
                        </div>
                        <p class="rate all first"><i class="fa fa-arrow-up"></i> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chart-data">
                        <span>Cancel Orders</span>
                        <div class="chart-chart chart-chart3">
                            <canvas id="kt_chart_quick_stats_4" width="50" height="20"></canvas>
                        </div>
                        <p class="rate all second"><i class="fa fa-arrow-down"></i> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chart-data">
                        <span>New Orders</span>
                        <div class="chart-chart chart-chart3">
                            <canvas id="kt_chart_quick_stats_5" width="50" height="20"></canvas>
                        </div>
                        <p class="rate all third"><i class="fa fa-arrow-up"></i> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script type="text/javascript" src="{{ URL::to('/assets/js/dashboard.js') }}"></script>
@endsection