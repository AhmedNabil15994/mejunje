@extends('Layouts.master')
@section('title','Rest Profile')
@section('name','Ahmed')
@section('extra_title','Rest Profile')

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="chart">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-data rest-profile">
                        <h3><i class="fa fa-user"></i> Profile Info</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group has-search">
                                    <input type="text" class="form-control" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group has-search">
                                    <input type="text" class="form-control" placeholder="Rest Hours">
                                </div>
                                <div class="form-group has-search">
                                    <input type="text" class="form-control" placeholder="Delivery Option">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-search">
                                    <input type="text" class="form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group has-search">
                                    <input type="text" class="form-control" placeholder="Food Types">
                                </div>
                                <div class="form-group has-search">
                                    <input type="text" class="form-control" placeholder="Location">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group has-search">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="form-group has-search">
                                    <input type="text" class="form-control" placeholder="Description">
                                </div>
                                <div class="form-group has-search">
                                    <input type="text" class="form-control" placeholder="Coverage Area">
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
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="chart chart2 rest">
            <div class="row">
                <div class="col-md-10">
                    <div class="chart-data">
                        <div class="row main">
                            <div class="col-md-3">
                                <span>Sales Report</span>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ URL::to('/assets/images/addition.jpeg') }}" alt="">
                            </div>
                            <div class="col-md-4">
                                <div class="chart-chart" style="position: relative; height:22vh; width:22vw">
                                    <canvas id="myChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="col-md-2">
                    <div class="actions">
                        <div class="dropdown">
                          <button class="btn dropdown-toggle" type="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div class="menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Daily</a>
                            <a class="dropdown-item" href="#">Weekly</a>
                            <a class="dropdown-item" href="#">Monthly</a>
                            <a class="dropdown-item" href="#">Yearly</a>
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
        <div class="chart2 chart3 data">
            <div class="row">
                <div class="col-md-6">
                    <div class="chart-data">
                        <span>Payment Account &nbsp;&nbsp; (forAds)</span>
                        <div class="radios">
                            <!-- Default inline 1-->
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" checked class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                              <label class="custom-control-label" for="defaultInline1">Visa</label>
                            </div>

                            <!-- Default inline 2-->
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                              <label class="custom-control-label" for="defaultInline2">Master Card</label>
                            </div>

                            <!-- Default inline 3-->
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample">
                              <label class="custom-control-label" for="defaultInline3">Paypal</label>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="chart-data">
                        <span>Deposit Account</span>
                        <div class="radios">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" checked class="custom-control-input" id="defaultInline4" name="inlineDefaultRadiosExample2">
                              <label class="custom-control-label" for="defaultInline4">Paypal</label>
                            </div>

                            <!-- Default inline 2-->
                            <div class="custom-control custom-radio custom-control-inline pull-right">
                              <input type="radio" class="custom-control-input" id="defaultInline5" name="inlineDefaultRadiosExample2">
                              <label class="custom-control-label" for="defaultInline5">Bank Account</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection