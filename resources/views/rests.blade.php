@extends('Layouts.master')
@section('title','Rest List')
@section('name','Ahmed')
@section('extra_title','Rest List')
@section('styles')
<link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
<style type="text/css" media="screen">
    .rest table tr.tr td button.btn-xs{
        padding: 0;
        width: 40px;
    }
    .view{
        margin-top: -5px !important;
    }
    .row.test{
        margin-bottom: 10px !important;
    }
    .daterangepicker .input-mini.active {
        border: 1px solid #ccc;
    }
    .daterangepicker .input-mini,
    .daterangepicker .input-mini:focus{
        display: block;
        width: 100% !important;
        background: unset;
    }
    .calendar-table{
        color: #000 !important;
    }
    td.week,th.week{
        display: none;
    }
</style>
@endsection
@section('content')
<div class="row test">
    <div class="col-md-12">
        <div class="filter">
            <div id="reportrange20" class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span>Choose Your Duration</span> <b class="caret"></b>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="chart">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-data rest">
                        <div class="kt-portlet__body kt-portlet__body--fit">
                            <!--begin: Datatable -->
                            <table id="example" class="uk-table uk-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th width="15%">Restaurant</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Bank Account</th>
                                        <th>Earned $</th>
                                        <th># Orders</th>
                                        <th>Created On</th>
                                        <th>Status</th>
                                        <th class="text-center" width="15%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <!--end: Datatable -->
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script  src="{{ asset('assets/vendors/moment/min/moment.min.js')}}"></script>
<script  src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('/assets/js/rests.js') }}"></script>
@endsection