@extends('Layouts.master')
@section('title','Orders List')
@section('name','Ahmed')
@section('extra_title','Orders List')
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
                                        <th width="5%">ID</th>
                                        <th width="20%">Order</th>
                                        <th>Customer</th>
                                        <th>Restaurant</th>
                                        <th>Delivery Man</th>
                                        <th>Dish Name</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Process</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr">
                                        <td>1</td>
                                        <td>
                                            <img src="{{ URL::to('/assets/images/logo.jpeg') }}">
                                            <span>Burger number ###43344</span>
                                        </td>
                                        <td>
                                            <img src="{{ URL::to('/assets/images/logo.jpeg') }}">
                                            <span>Ahmed Nabil</span>
                                        </td>
                                        <td>
                                            <img src="{{ URL::to('/assets/images/logo.jpeg') }}">
                                            <span>Restaurant 1</span>
                                        </td>
                                        <td>
                                            <img src="{{ URL::to('/assets/images/logo.jpeg') }}">
                                            <span>Delivery 1</span>
                                        </td>
                                        <td>
                                            <p>1 Burger & 1 Pepsi</p>
                                        </td>
                                        <td>
                                            <p>01/07/2020</p> 
                                            <p>11:08:54</p>
                                        </td>
                                        <td>
                                            <p>$ 3.21</p>
                                            <p>Credit Card</p>
                                        </td>
                                        <td><label class="label label-primary">In Progress</label></td>
                                        <td><label class="label label-success">New</label></td>
                                        <td>
                                            <button class="btn btn-xs btn-default view">View</button>
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