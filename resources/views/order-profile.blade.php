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
                    <div class="chart-data cust-profile rest-prof order-prof">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}" alt="">
                            </div>
                            <div class="col-xs-6 data">
                                <h5>#3150819141</h5>
                                <p class="desc">Burger number ###43344 Burger number ###43344 Burger number</p>
                                <div class="row latest">
                                    <p class="stars"><i class="fa fa-star"></i> 3.5</p>
                                    <p class="stars"><i class="fa fa-dollar-sign"></i> 3.12</p>
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
                                        <label class="label-2">2020-07-10 19:30</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fas fa-cookie"></i> Dish</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2">Burger</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fas fa-wine-glass-alt"></i> Drinks</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2">1 Pepsi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-utensils"></i> Type</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2">Truck Food</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-money-bill-wave-alt"></i> Payment Type</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2">Credit Card</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-parking"></i> Process</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 btn-xs btn-primary">In Progress</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label><i class="fa fa-file-invoice"></i> Status</label>
                                    </div>
                                    <div class="col-xs-6">
                                        <label class="label-2 btn-xs btn-success">New</label>
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
                    <div class="chart-data cust-profile rest-prof order-prof">
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
</div>

<div class="row">
    <div class="col-md-5 col-md-offset-1 col-xs-12">
        <div class="chart pd-b-5">
            <div class="row">
                <div class="chart-data order-det order-det-person">
                    <h4><i class="fa fa-user"></i> Customer</h4>
                    <div class="row more-info">
                        <div class="cust-order">
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ URL::to('/assets/images/meal.jpeg') }}">
                            </div>
                            <div class="col-md-6 col-xs-12 order-details">
                                <h5>Ahmed Nabil</h5>
                                <p class="desc dish-desc">Login By: Facebook</p>
                                <p class="date dish-desc"><i class="fa fa-envelope"></i> ahmed@hotmail.com</p>
                                <p class="date dish-desc"><i class="fa fa-map-marker-alt"></i> Cairo</p>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="col-md-5 tests col-xs-12">
        <div class="chart pd-b-5">
            <div class="row">
                <div class="chart-data order-det order-det-person">
                    <h4><i class="fa fa-people-carry"></i> Delivery Man</h4>
                    <div class="row more-info">
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
                                <p><label class="btn btn-xs btn-success">Active</label></p>
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