@extends('Layouts.master')
@section('title','Rest List')
@section('name','Ahmed')
@section('extra_title','Rest List')
@section('styles')
<style type="text/css" media="screen">
    .rest table tr.tr td button.btn-xs{
        padding: 0;
        width: 40px;
    }
    .view{
        margin-top: -3px;
    }
</style>
@endsection
@section('content')

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
                                        <td>ID</td>
                                        <th width="15%">Restaurant</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Paypal</th>
                                        <th>Earned This Month</th>
                                        <th># Orders</th>
                                        <th>Created On</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr">
                                        <td>1</td>
                                        <td>
                                            <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                            <span>Restaurant 1</span>
                                        </td>
                                        <td>rest1@admin.com</td>
                                        <td>12012301230</td>
                                        <td>Yes</td>
                                        <td>10</td>
                                        <td>20</td>
                                        <td>01/7/2020</td>
                                        <td><label class="label label-success">Active</label></td>
                                        <td>
                                            <button class="btn btn-xs btn-primary view"><i class="fa fa-eye"></i></button>
                                            <button class="btn-xs btn-danger"> <i class="fa fa-times"></i></button>
                                            <button class="btn-xs btn-warning"> Paid</button>
                                        </td>
                                    </tr>
                                    <tr class="tr">
                                        <td>2</td>
                                        <td>
                                            <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                            <span>Restaurant 2</span>
                                        </td>
                                        <td>rest2@admin.com</td>
                                        <td>12012301230</td>
                                        <td>No</td>
                                        <td>100</td>
                                        <td>200</td>
                                        <td>01/7/2018</td>
                                        <td><label class="label label-danger">In-Active</label></td>
                                        <td>
                                            <button class="btn btn-xs btn-primary view"><i class="fa fa-eye"></i></button>
                                            <button class="btn-xs btn-success"> <i class="fa fa-check"></i></button>
                                            <button class="btn-xs btn-warning"> Paid</button>
                                        </td>
                                    </tr>
                                </tbody>
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