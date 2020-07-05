@extends('Layouts.master')
@section('title','Notifications')
@section('name','Ahmed')
@section('extra_title','Notifications (5)')
@section('extra_design')
<div class="form-group has-search calendar">
    <span class="fa fa-calendar form-control-feedback"></span>
    <input type="text" class="datepicker form-control" placeholder="Pick A Date">
</div>
@endsection
@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="chart chart6 notif">
            <div class="row notif_row">
                <span class="dot"></span>
                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                <span class="name">Ahmed Nabil</span>
                <span class="desc">changed his password</span>
                <span class="time">9:35 am</span>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="chart chart6 notif">
            <div class="row notif_row">
                <span class="dot"></span>
                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                <span class="name">Ahmed Nabil</span>
                <span class="desc">changed his password</span>
                <span class="time">9:35 am</span>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="chart chart6 notif">
            <div class="row notif_row">
                <span class="dot"></span>
                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                <span class="name">Ahmed Nabil</span>
                <span class="desc">changed his password</span>
                <span class="time">9:35 am</span>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row yest">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="col-xs-12">
            <h4>Yesterday</h4>
            <div class="chart chart6 notif">
            <div class="row notif_row">
                <span class="dot"></span>
                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                <span class="name">Ahmed Nabil</span>
                <span class="desc">changed his password</span>
                <span class="time">9:35 am</span>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="chart chart6 notif">
            <div class="row notif_row">
                <span class="dot"></span>
                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                <span class="name">Ahmed Nabil</span>
                <span class="desc">changed his password</span>
                <span class="time">9:35 am</span>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 text-right">
        <div class="paginatior">
            <div class="col-xs-6"> <i class="fa fa-chevron-left"></i> </div>
            <div class="col-xs-6"> <i class="fa fa-chevron-right"></i> </div>
        </div>
    </div>
</div>
@endsection