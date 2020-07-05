@extends('Layouts.master')
@section('title','Customer Profile')
@section('name','Ahmed')
@section('extra_title','Customer Profile')

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <div class="chart">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-data cust-profile">
                        <div class="row text-center">
                            <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                            <h5 class="text-center">Ahmed Nabil</h5>
                            <p class="text-center"><i class="fas fa-dot-circle"></i> Offline</p>
                            <hr>
                        </div>
                        <div class="row more-info">
                            <div class="col-md-6">
                                <label><i class="fa fa-map-marker-alt"></i> From</label>
                            </div>
                            <div class="col-md-6 pd-l-30">
                                <label>Cairo</label>
                            </div>
                            <div class="col-md-6">
                                <label><i class="fa fa-user"></i> Member Since</label>
                            </div>
                            <div class="col-md-6 pd-l-30">
                                <label>May 2020</label>
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
        <div class="chart">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-data cust-profile2">
                        <h3>Profile Information</h3>
                        <p>Get the best recommendation for your need.<br>This information is public</p>
                        <div class="row">
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <label>What is your area of major?</label>
                                    <div class="form-group has-search">
                                        <input type="text" class="form-control" disabled placeholder="Food">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <label>What is your Food title?</label>
                                    <div class="form-group has-search">
                                        <input type="text" class="form-control" disabled placeholder="Fast Food">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <label>Biography</label>
                                    <div class="form-group has-search">
                                        <input type="text" class="form-control" disabled placeholder="upload here">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 pd-l-0">
                                <div class="form-group">
                                    <label>Which industry does the workplace/business belong to?</label>
                                    <div class="form-group has-search">
                                        <input type="text" class="form-control" disabled placeholder="ex: Restaurant">
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
@endsection