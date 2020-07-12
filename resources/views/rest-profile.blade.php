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
                                <h5>Restaurant 1</h5>
                                <p class="desc">Delivery Dodd’s fest GDF </p>
                                <p class="stars"><i class="fa fa-star"></i> 4.7</p>
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
                                        <label class="label-2">rest1@admin.com</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-phone"></i> Phone</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2">12012301230</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-map-marker-alt"></i> Address</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2">Minuf, Madinet Menuf, Menuf, Menofia Governorate, Egypt</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fab fa-paypal"></i> Paypal</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2">rest1@paypal.com</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-dollar-sign"></i> Earned This Month</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2">rest1@paypal.com</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-file-invoice"></i> # Orders</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2">500</label>
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
                                    <label class="label-2">Yes</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pd-l-0">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><i class="fa fa-map-marker-alt"></i> Delivery Location</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="label-2">Minuf, Madinet Menuf, Menuf, Menofia Governorate, Egypt</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pd-l-0">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><i class="fa fa-dollar-sign"></i> Delivery Price</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="label-2">$0 / Free</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pd-l-0">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><i class="fa fa-box-open"></i> Pick Up</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="label-2">True</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>

        <div class="chart pd-b-5">
            <div class="row">
                <div class="chart-data">
                    <h4><i class="far fa-clock"></i> Open Times</h4>
                    <div class="row more-info">
                        <div class="col-xs-12 pd-l-0">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><i class="fa fa-calendar"></i> Monday</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="label-2">12:00 - 20:00</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pd-l-0">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><i class="fa fa-calendar"></i> Tuesday</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="label-2">10:00 - 21:00</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pd-l-0">
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><i class="fa fa-calendar"></i> Friday</label>
                                </div>
                                <div class="col-xs-6">
                                    <label class="label-2">16:00 - 22:00</label>
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
                        <p class="rate first"><i class="fa fa-arrow-up"></i> 20</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chart-data reset-data">
                        <span>Cancel Orders</span>
                        <div class="chart-chart chart-chart3 mg-t-10">
                            <canvas id="kt_chart_quick_stats_4" width="50" height="25"></canvas>
                        </div>
                        <p class="rate second"><i class="fa fa-arrow-down"></i> 10</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chart-data reset-data">
                        <span>New Orders</span>
                        <div class="chart-chart chart-chart3 mg-t-10">
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
                <h4><i class="fa fa-bars"></i> Menu</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5>Burger</h5>
                                <p class="desc dish-desc">Burger number ###43344</p>
                                <p class="date dish-desc">1 Pepsi</p>
                                <p class="date dish-desc">Drinks 1:5</p>
                                <p class="date dish-desc">Food Truck</p>
                                <p class="date">01/07/2020</p>
                                <p><label class="btn btn-xs btn-success">Active</label></p>
                                <div class="row last">
                                    <div class="col-xs-6 text-left"><p class="stars"> <i class="fa fa-star"></i> 3.4</p></div>
                                    <div class="col-xs-6 text-right">$3.21</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5>Burger</h5>
                                <p class="desc dish-desc">Burger number ###43344</p>
                                <p class="date dish-desc">1 Pepsi</p>
                                <p class="date dish-desc">Drinks 1:5</p>
                                <p class="date dish-desc">Food Truck</p>
                                <p class="date">01/07/2020</p>
                                <p><label class="btn btn-xs btn-danger">In-Active</label></p>
                                <div class="row last">
                                    <div class="col-xs-6 text-left"><p class="stars"> <i class="fa fa-star"></i> 3.4</p></div>
                                    <div class="col-xs-6 text-right">$3.21</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5>Burger</h5>
                                <p class="desc dish-desc">Burger number ###43344</p>
                                <p class="date dish-desc">1 Pepsi</p>
                                <p class="date dish-desc">Drinks 1:5</p>
                                <p class="date dish-desc">Food Truck</p>
                                <p class="date">01/07/2020</p>
                                <p><label class="btn btn-xs btn-success">Active</label></p>
                                <div class="row last">
                                    <div class="col-xs-6 text-left"><p class="stars"> <i class="fa fa-star"></i> 3.4</p></div>
                                    <div class="col-xs-6 text-right">$3.21</div>
                                </div>
                            </div>
                        </div>
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5>Bagal Story</h5>
                                <p class="desc">Burger number ###43344</p>
                                <p class="date">01/07/2020</p>
                                <p><label class="btn btn-xs btn-primary">In Progress</label></p>
                                <div class="row last">
                                    <div class="col-xs-9 text-left"><img src="{{ URL::to('/assets/images/logo.jpeg') }}"> Restaurant</div>
                                    <div class="col-xs-3 text-right">$3.21</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5>Bagal Story</h5>
                                <p class="desc">Burger number ###43344</p>
                                <p class="date">01/07/2020</p>
                                <p><label class="btn btn-xs btn-success">Active</label></p>
                                <div class="row last">
                                    <div class="col-xs-9 text-left"><img src="{{ URL::to('/assets/images/logo.jpeg') }}"> Restaurant</div>
                                    <div class="col-xs-3 text-right">$3.21</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5>Bagal Story</h5>
                                <p class="desc">Burger number ###43344</p>
                                <p class="date">01/07/2020</p>
                                <p><label class="btn btn-xs btn-danger">Cancel</label></p>
                                <div class="row last">
                                    <div class="col-xs-9 text-left"><img src="{{ URL::to('/assets/images/logo.jpeg') }}"> Restaurant</div>
                                    <div class="col-xs-3 text-right">$3.21</div>
                                </div>
                            </div>
                        </div>
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
                <h4><i class="fa fa-motorcycle"></i> Delivery Men</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5>Steven</h5>
                                <p class="desc dish-desc">description ##$#% hfghbhgf</p>
                                <p class="date dish-desc"><i class="fa fa-envelope"></i> steven@hotmail.com</p>
                                <p class="date dish-desc"><i class="fa fa-phone"></i> 0134567876</p>
                                <p class="date dish-desc"><i class="fab fa-paypal"></i> steven@paypal.com</p>
                                <p class="find-p"><label class="btn btn-xs btn-danger">In-Active</label></p>
                                <div class="row last">
                                    <div class="col-xs-12 text-left"><p class="stars"> License: 23-23-54</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5>Steven</h5>
                                <p class="desc dish-desc">description ##$#% hfghbhgf</p>
                                <p class="date dish-desc"><i class="fa fa-envelope"></i> steven@hotmail.com</p>
                                <p class="date dish-desc"><i class="fa fa-phone"></i> 0134567876</p>
                                <p class="date dish-desc"><i class="fab fa-paypal"></i> steven@paypal.com</p>
                                <p class="find-p"><label class="btn btn-xs btn-success">Active</label></p>
                                <div class="row last">
                                    <div class="col-xs-12 text-left"><p class="stars"> License: 23-23-54</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5>Steven</h5>
                                <p class="desc dish-desc">description ##$#% hfghbhgf</p>
                                <p class="date dish-desc"><i class="fa fa-envelope"></i> steven@hotmail.com</p>
                                <p class="date dish-desc"><i class="fa fa-phone"></i> 0134567876</p>
                                <p class="date dish-desc"><i class="fab fa-paypal"></i> steven@paypal.com</p>
                                <p class="find-p"><label class="btn btn-xs btn-success">Active</label></p>
                                <div class="row last">
                                    <div class="col-xs-12 text-left"><p class="stars"> License: 23-23-54</p></div>
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