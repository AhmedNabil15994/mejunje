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
                                        <th>Paid This Month</th>
                                        <th># Order</th>
                                        <th>Actions</th>
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
<script type="text/javascript" src="{{ URL::to('/assets/js/customers.js') }}"></script>
@endsection