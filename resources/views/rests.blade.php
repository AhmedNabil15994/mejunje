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
        margin-top: -5px !important;
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
                                        <th>ID</th>
                                        <th width="15%">Restaurant</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Bank Account</th>
                                        <th>Earned This Month</th>
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
<script type="text/javascript" src="{{ URL::to('/assets/js/rests.js') }}"></script>
@endsection