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
                                        <th width="15%">ID</th>
                                        <th width="10%">Order</th>
                                        <th>Customer</th>
                                        <th>Restaurant</th>
                                        <th>Dish Name</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Process</th>
                                        <th>Status</th>
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
<script type="text/javascript" src="{{ URL::to('/assets/js/orders.js') }}"></script>
@endsection