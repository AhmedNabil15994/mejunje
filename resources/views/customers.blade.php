@extends('Layouts.master')
@section('title','Customers List')
@section('name','Ahmed')
@section('extra_title','Customers List')

@section('content')

<div class="row">
    <div class="col-xs-12">
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
                                        <th width="20%">Customer</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th width="15%">Login Type</th>
                                        <th>Monthly Sales</th>
                                        <th># Order This Month</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tr">
                                        <td>1</td>
                                        <td>
                                            <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                            <span>Ahmed Nabil</span>
                                        </td>
                                        <td>admin@admin.com</td>
                                        <td>
                                            <p>Shebin El-kom</p>
                                            <p></p>
                                        </td>
                                        <td>Facebook</td>
                                        
                                        <td>20</td>
                                        <td>50</td>
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