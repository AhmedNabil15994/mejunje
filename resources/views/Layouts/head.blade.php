<link rel="icon" href="{{ URL::to('assets/images/logo.jpeg') }}" type="image/ico" />
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/all.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/morris.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/swiper.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/swiper.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/uikit.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('/assets/css/datatable.min.css') }}">
<link href="{{ URL::to('/assets/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">

<style type="text/css" media="screen">
    *{
        font-family: 'Exo 2', sans-serif;
    }
    .pull-right{
        float: right;
    }
    .pull-left{
        float: left;
    }
    div.row{
        margin-right: 0;
    }
    #page-content-wrapper,
    .container-fluid{
        padding-right: 0;
    }
    .left_col{
        padding-left: 0;
        position: relative;
    }
    #wrapper .rowest{
        margin-right: 0;
        margin-left: 0;
        width: 100%;
        height: 100%;
    }
    .sidebar-heading{
        padding-top: 20px;
    }
    #sidebar-wrapper{
        position: fixed;
        width: 16.666667%;
    }
    #sidebar-wrapper .img-circle{
        width: 100px;
        height: 100px;
        background-color: #FFF;
        border-radius: 50%;
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.05);
    }
    .list-group{
        margin-top: 30px
    }
    .list-group .li-wrapper{
        padding-left: 0;
        margin-bottom: 15px;
    }
    .list-group a{
        color: #999;
        margin-bottom: 15px;
        border: 0;
        width: 60% !important;
        padding: 15px;
        text-decoration: none;
        width: calc(100% - 160px);
        display: inline-block;
    }
    .list-group a:hover{
        text-decoration: none;
    }
    .list-group span.pull-left{
        font-size: 19px;
        display: inline-block;
        width: 60px;
        height: 60px;
        padding: 15px;
        padding-top: 18px;
    }
    .list-group span.pull-left i{
        display: block;
        margin: auto;
        font-size: 19px;
        color: #999;
    }
    .list-group a.active{
        color: #F14441;
        text-decoration: none;
    }
    .list-group .li-wrapper.active span.pull-left{
        border: 1px solid #F14441;
        color: #FFF;
        background-color: #F14441;
        border-top-right-radius: 50%;
        border-bottom-right-radius: 50%;
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.05);
    }
    .list-group .li-wrapper.active span.pull-left i{
        color: #FFF;
    }
    .list-group i.fa-chevron-right{
        color: #999;
        font-size: 14px;
        margin-top: 20px;
        float: right;
    }
    #header{
        height: 500px;
        width: calc(100% - 30px);
        position: absolute;
        /*border: 1px solid #F14441;*/
        /*background-color: #F14441;
        border-bottom-left-radius: 35%;*/
        /*box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.05);*/
    }
    #header .row{
        margin-left: 0;
        width: 100%;
        height: 100%;
    }
    #header .col-md-6:first-of-type{
        background-color: #F14441;
        border-bottom-left-radius: 30%;
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.05);
        background-image: linear-gradient(to right, #F14441 , #F95F55);
    }
    #header .col-md-6:last-of-type{
        background-color: #F14441;
        box-shadow: 0 1px 0.1rem rgba(0, 0, 0, 0.05);
        background-image: linear-gradient(to right, #F95F55 , #F14441);
    }
    #header .col-md-6 .welcome{
        padding: 60px;
        padding-left: 95px;
        color: #FFF;
    }
    #header .col-md-6 .welcome h2{
        font-size: 45px;
        margin-bottom: 20px;
        color: #FFF;
    }
    #header .col-md-6 .welcome h2 span.name{
        font-weight: bold;
    }
    #header .col-md-6 .welcome p{
        font-size: 24px;
    }
    .has-search .form-control {
        padding-left: 40px;
        margin-top: 70px;
        border-radius: 20px;
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.05);
        width: 100%;
        height: 45px;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 3.1rem;
        left: 20px;
        text-align: center;
        pointer-events: none;
        color: #000;
        font-size: 18px;
    }
    #data{
        margin-top: 230px;
    }
    #data .row{
        margin-right: 0;
        margin-left: 0;
        margin-bottom: 40px;
    }
    #data div.chart{
        width: 100%;
        box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.15);
        background-color: #FFF;
        color: #000;
        border-radius: 25px;
        padding-bottom: 20px;
    }
    #data div.chart .chart-data{
        padding: 20px;
        padding-right: 0;
    }
    #kt_chart_revenue_change svg,canvas#myChart{
        height: 260px !important;
    }
    #data div.chart .chart-data span{
        font-size: 24px;
    }
    #data div.chart .chart-data span:first-of-type{
        margin-right: 30px;
    }
    #data div.chart .col-md-2{
        padding: 0;
    }
    #data div.chart div.actions{
        background-color: #F3F3F3;
        width: 100%;
        text-align: right;
        border-top-right-radius: 20px;
    }
    #data div.chart div.actions .dropdown button{
        width: 100%;
        outline: 0;
    }
    #data div.chart div.actions .dropdown button:focus,
    #data div.chart div.actions .dropdown button.focus{
        box-shadow: unset;
    }
    #data div.chart div.actions .dropdown .dropdown-toggle::after{
        display: none;
    }
    #data div.chart div.actions .dropdown button i{
        font-size: 18px;
        color: #fff;
        background: #444;
        padding: 0 10px;
        border-radius: 5px;
    }
    #data div.chart div.actions .dropdown .menu{
        padding-top: 40px;
        display: none;
    }
    #data div.chart div.actions .dropdown .menu a{
        padding-top: 10px;
        padding-bottom: 10px;
        color: #000;
        font-weight: bold;
        display: block;
        text-align: center;
    }
    #data div.chart2{
        width: 100%;
        min-height: 250px;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.15);
        background-color: #FFF;
        color: #000;
        border-radius: 25px;
        padding-bottom: 20px;
    }
    #data div.chart2 .chart-data{
        padding: 20px;
        padding-bottom: 0;
    }
    #data div.chart2 .chart-data span{
        font-size: 24px;
    }
    #data div.chart2 .chart-data span:first-of-type{
        margin-right: 30px;
    }
    #data div.chart2 .chart-data p.rate{
        margin-top: 40px;
        color: #F64000;
        font-size: 25px;
        font-weight: bold;
        margin-bottom: 40px;
    }
    #data div.chart2 .chart-data p.rate i {
        transform: rotateZ(-45deg);
        margin-right: 10px;
        font-size: 25px;
    }
    .chart .row,.chart2 .row{
        margin-bottom: 0 !important;
    }
    #data div.chart2 .chart-data p.cost{
        font-weight: bold;
        font-size: 30px;
        margin-bottom: 0;
    }
    #data div.chart2 .chart-chart2{
        padding-top: 50px;
    }
    #data div.chart2 .chart-chart3{
        width: 100%;
        height: 100%;
    }
    .chart-info{
        margin-bottom: 0;
        margin-top: 20px;
        border-radius: 10px;
        /*background-color: #F6F6F6;*/
        width: 100%;
    }
    .chart-info .col-md-4{
        padding: 0;
        padding-left: 10px;
        padding-top: 15px;
        /*border-right: 1px solid #DDD;*/
        float: left;
        text-align: center;
        height: 100%;
    }
    .chart-info .col-md-4:last-child{
        border: 0;
    }
    .chart-info div span{
        font-size: 18px;
        font-weight: 500;
    }
    .chart-info p.rate{
        margin-top: 100px;
        font-weight: bold;
        font-size: 24px;
    }
    p.rate.first{
        color: #41C719 !important;
    }
    p.rate.first i{
        transform: rotateZ(-45deg);
        margin-right: 10px;
        font-size: 32px;
    }
    p.rate.second{
        color: #F64000 !important;
    }
    p.rate.second i{
        transform: rotateZ(-45deg) !important;
        margin-right: 10px;
        font-size: 32px;
    }
    p.rate.third{
        color: #22637d !important;
    }
    p.rate.third i{
        transform: rotateZ(-45deg);
        margin-right: 10px;
        font-size: 32px;
    }
    div.chart2.chart3{
        padding: 20px 25px; 
    }
    div.chart2.chart3 div.col-md-4 .chart-data{
        /*padding: 0 !important;*/
        background-color: #F6F6F6;
        border-radius: 15px;
        padding: 15px 15px 0 15px !important;
        position: relative;
    }
    .chart-chart.chart-chart3{
        height: 160px !important;
        padding-top: 15px;
    }
    .chart3 .chart-data p.rate{
        margin: 0 !important;
        position: absolute;
        bottom: 10px;
        right: 10px;
    }
    span.today{
        margin-right: 0 !important;
    }

/*-----------------------------------------------------------------------------------------------------*/


    #data div.chart .chart-data.rest{
        padding-right: 10px;
        padding-left: 10px;
        padding-bottom: 0;
    }
    .chart-data.rest .row.uk-grid:first-child{
        display: none;
    }
    .rest [class*=uk-width]{
        padding-left: 0;
    }
    .rest table{
        border-spacing: 0 1em;
    }
    .rest div.dataTables_wrapper div.row.uk-grid.dt-merge-grid:last-child{
        margin-top: 20px;
    }
    table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting{
        padding:5px !important;
    }
    .rest table tr th{
        color: #000;
        font-size: 18px;
        text-transform: capitalize;
    }
    table.dataTable thead .sorting:before, table.dataTable thead .sorting_asc:before, table.dataTable thead .sorting_desc:before, table.dataTable thead .sorting_asc_disabled:before, table.dataTable thead .sorting_desc_disabled:before,
    table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:after{
        top: 10px;
    }

    .rest table tr.tr{
        background-color: #F6F6F6;
    }
    .rest table tr.tr:hover{
        background-color: #FFF;
        box-shadow: 0 1px 0.5rem rgba(248, 93, 83, .5);
    }
    .rest table th{
/*        text-align: center;
*/    }
    .rest table th:nth-of-type(2){
        text-align: left;
    }
    .rest .uk-table td{
        padding: 0;
        border-bottom: 10px solid #FFF;
        padding-top: 15px;
        padding-bottom: 5px;
        padding: 15px 5px;
    }
    .rest .uk-table td:nth-of-type(2){
        padding-top: 15px;
        padding-left: 0;
    }
    .rest tr td button.btn-default.view{
        background: #F14441;
        border-color: #F14441;
        margin-top: -2px;
    }
    .rest table tr.tr:hover button.btn-default.view{
        color: #FFF;
       
    }
    .rest table tr td p{
        margin-bottom: 0;
        margin-top: 0;
        padding-left: 5px;
    }
    .rest table tr td p i{
        color: #999;
    }
    .rest table tr td p:first-of-type{
        color: #777;
    }
    .rest table tr td p:not(:first-of-type){
        color: #999;
        font-size: 12px;
    }
    .rest table tr.tr:hover td p i{
        color: #F14441;
    }
    .rest table tr.tr td img{
        width: 35px;
        height: 35px;
        border-radius: 50%;
    }
    .rest table tr.tr td img ~ span{
        color: #999;
        font-size: 15px !important;
        margin-right: 0 !important;
        margin-left: 5px;
    }
    .rest table tr.tr td button.btn-xs{
        border: 0;
        padding: 5px 25px;
        border-radius: 25px;
        font-size: 16px !important;
        width: 120px;
        color: #fff !important;
        box-shadow: 0px 4px 16px 0px rgba(34, 185, 255, 0.15);
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }
    /*.rest table tr.tr td button.btn-xs:first-child{
        color: #8cc740;
    }
    .rest table tr.tr td button.btn-xs:last-child{
        color: #22637d;
    }*/
    .btn-danger{
        color: #fff !important;
        background-color: #dc3545 !important;
        border-color: #dc3545 !important;
        
    }
    .btn-success{
        background-color: #1dc9b7;
        border-color: #1dc9b7;
    }
    .btn-primary{
        background-color: #5867dd;
        border-color: #5867dd;
    }
    .btn-warning{
        background-color: #ffb822;
        border-color: #ffb822;
    }
/*-----------------------------------------------------------------------------------------------------*/

    .rest-profile h3 i{
        color: #999;
        margin-bottom: 25px;
    }
    .rest-profile .has-search .form-control{
        margin-top: 0;
        margin-bottom: 20px;
        padding-left: 20px;
        background-color: #f1f1f1;
        display: block;
        width: 100%;
        border: 0;
    }
    .rest-profile .has-search .form-control:focus{
        color: #F14441;
        border: 1px solid #F14441;
    }
    .rest-profile .has-search .form-control:focus::placeholder{
        color: #F14441;
    }
    #data div.chart.rest{
        min-height: 250px !important;
        min-height: 250px !important;
    }
    #data div.chart.rest .actions{
        width: 50%;
        margin-left: 50%;
    }
    #data div.chart2.data{
        min-height: unset !important;
    }
    #data .rest div:not(.main){
        height: 100% !important;
    }
    #data .rest .row.main{
        height: 230px;
    }
    #data .rest .row.main .col-md-3,
    #data .rest .row.main .col-md-6{
        height: 100%;
    }
    .rest .actions .dropdown .menu{
        display: none;
        padding-top: 15px !important;
    }
    .chart3.data .col-md-6 .chart-data{
        background-color: #F6F6F6;
        border-radius: 10px;
        height: 100%;
    }
    .chart3.data .col-md-6 .chart-data span,
    .chart3.data .col-md-6 .chart-data .radios{
        display: block;
        width: 100%;
        margin-bottom: 40px;
    }
    .radios .custom-control-label{
        font-size: 28px;
        padding-left: 15px;
    }
    .custom-control-label::before,
    .custom-control-label::after{
        width: 2rem;
        height: 2rem;
    }
    .custom-control-input{
        outline: 0;
    }
    .custom-control-input:checked~.custom-control-label::before{
        background-color: #F14441;
        border-color: #F14441;
        outline: 0;
    }
    .custom-control-inline:last-of-type{
        margin-right: 0;
    }
    .label{
        padding-top: 5px;
        font-weight: 600;
        background-color: transparent;
        font-size: 16px;
    }
    .label-primary{
        color: #2e6da4;
    }
    .label-success{
        color: #41C719;
    }
    .label-danger{
        color: #F64000;
    }
/*-----------------------------------------------------------------------------------------------------*/

    .cust-profile .row img{
        display: block;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 1px solid #DDD;
        margin: auto;
        margin-top: 20px;
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.05);
    }
    .cust-profile .row h5.text-center,
    .cust-profile .row p.text-center{
        display: block;
        width: 100%;
        font-size: 19px;
        font-weight: bold;
        margin-top: 15px;
        margin-bottom: 10px;
    }
    .cust-profile .row p.text-center{
        font-weight: 400;
        font-size: 14px;
        margin-top: 0;
    }
    .cust-profile .row p.text-center i.fas{
        color: #999;
        font-size: 12px;
    }
    .cust-profile .row hr{
        display: block;
        width: 100%;
        border-color: #DDD;
    }
/*-----------------------------------------------------------------------------------------------------*/

    .pd-l-30{
        padding-left: 30px;
        font-weight: 400;
    }
    .more-info{
        margin-top: 30px;
        margin-bottm: 30px;
    }
    .more-info label{
        font-size: 18px;
    }
    .more-info .col-md-6:first-of-type label{
        margin-bottom: 40px;
    }
    .more-info label i{
        color: #F14441;
        font-size: 20px;
        margin-right: 5px;
    }
    .more-info .pd-l-30 label{
        font-weight: 400;
    }
    .edit-my-data button{
        width: 80%;
        display: block;
        margin: auto;
        margin-top: 30px;
        border: 1px solid #DDD;
        color: #FFF;
        background-color: #F14441;
        padding: 15px;
        font-size: 18px;
        border-radius: 50px;
    }
    .edit-my-data button:hover{
        color: #FFF;    
    }
    .edit-my-data button i {
        margin-left: 10px;
        font-size: 18px;
    }

    .chart-data.cust-profile2{
        padding: 50px !important;
    }
    .chart-data.cust-profile2 h3{
        font-weight: bold;
    }
    .chart-data.cust-profile2 p{
        color: #888;
        font-size: 17px;
    }
    .chart-data.cust-profile2 .form-control{
        margin-top: 10px;
        padding-left: 15px;
        height: 55px;
        border-radius: 50px;
        border: 0;
    }
    .pd-l-0{
        padding-left: 0;
    }
    .chart-data.cust-profile2 div.form-group{
        margin-bottom: 40px;
    }
    .chart-data.cust-profile2 .col-xs-12:last-of-type div.form-group{
        margin-bottom: 0;
    }

/*-----------------------------------------------------------------------------------------------------*/
    .food-types{
        padding-bottom: 0 !important;
        padding-right: 0 !important;
    }
    .chart.chart5{
        padding-bottom: 0 !important;
    }
    .chart.chart5 .col-md-12{
        padding-right: 0;
    }
    .chart.chart5 .learn{
        position: absolute;
        right: 0;
        bottom: 0;
        padding: 15px 30px;
        background: #161414;
        color: #FFF;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        font-size: 18px;
    }
    .chart.chart5 .dashed{
        height: 100%;
        text-align: center;
        position: absolute;
    }
    .chart.chart5 .dashed h2{
        margin-top: 60px;
        font-weight: bold;
        margin-bottom: 0;
    }
    .chart.chart5 .dashed p{
        margin-top: 0;
        color: #999;
        font-weight: bold;
    }
    .chart2.food_types2{
        margin-top: 30px;
    }
    .chart2.food_types2 .row.rowest{
        padding: 30px;
    }
    .swiper-container {
        width: 100%;
        margin-left: 0;
        height: 200px;
    }
    .food_types2 .swiper-slide{
        width: 70px !important; 
        height: 140px;
        margin-right: 40px;
        border-radius: 50px;
        background-color: #F6F6F6;
        color: #000;
        text-align: center;
        cursor: pointer;
        transition: all ease-in-out .25s;
    }
    .food_types2 .swiper-slide.swiper-slide-active,
    .food_types2 .swiper-slide:hover{
        background-color: #F14441;
    }
    .swiper-button-next,
    .swiper-button-prev{
        top: 65px;
        background: #000;
        width: 40px;
        border-radius: 10px;
        height: 35px;
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.05);
    }
    .swiper-button-next:after,
    .swiper-button-prev:after{
        color: #FFF;
        font-size: 20px;
    }
    .food_types2 .swiper-slide img{
        width: 80%;
        display: block;
        margin-left: 10%;
        margin-top: 7px;
        height: 45%;
        border-radius: 50%;
        border: 1px solid #F14441;
    }
    .food_types2 .swiper-slide p{
        /*margin-top: 10px;*/
        font-size: 18px;  
    }
    .food_types2 .food-details{
        display: block;
        position: relative;
        width: 100%;
        height: 150px;
        background-size: cover;
        border-radius: 15px;
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.05);
    }
    .food_types2 .img-holder{
        padding-left: 0 !important;
    }
    .food_types2 .food-details span.price{
        position: absolute;
        left: 0;
        bottom: 0;
        color: #999;
        background-color: #FFF;
        padding: 5px 10px;
        font-size: 14px;
        border: 1px solid #CCC;
        border-bottom-left-radius: 15px;
        border-top-right-radius: 15px;
    }
    .food_types2 .img-holder h5{
        margin-top: 15px;
        margin-bottom: 0;
        font-weight: bold;
    }
    .food_types2 .img-holder p.details{
        margin-top: 0;
    }
    .food_types2 .img-holder p.details span{
        width: 20%;
        float: left;
        color: #999;
        font-size: 12px;
    }
    .food_types2 .img-holder p.details span:first-of-type{
        color: #000;
        font-weight: bold;
    }
/*-----------------------------------------------------------------------------------------------------*/
    .calendar{
        top: -20px;
        direction: rtl;
        color: #fff;
    }
    .calendar input,
    .calendar input:focus{
        background-color: #000;
        border: 0;
        color: #FFF;
        padding-left: 0 !important;
        padding-right: 40px !important;
        width: 50% !important;
    }
    .calendar input::placeholder,
    .calendar input:focus::placeholder{
        color: #FFF;
    }
    .calendar span.fa{
        color: #eee;
    }
    .chart6{
        padding-bottom: 0 !important;
    }
    .notif{
        margin-bottom: 20px;
        border-radius: 15px !important;
    }
    .notif .dot{
        background-color: #F14441;
        height: 16px;
        width: 16px;
        border-radius: 50%;
        display: inline-block;
        margin: 0;
        float: left;
        margin-right: 30px !important;
        margin-top: 10px;
    }
    .notif img{
        width: 40px;
        height: 40px;
        border: 1px solid #eee;
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.05);
        border-radius: 50%;
        margin-right: 30px;
    }
    .notif span{
        display: inline-block;
        float: left;
    }
    .notif span.name{
        font-size: 18px !important;
        font-weight: bold;
        padding-top: 5px;
        margin-right: 30px;
    }
    .notif span.desc,
    .notif span.time{
        font-size: 18px !important;
        font-weight: bold;
        padding-top: 5px;
        color: #999;
    }
    .row.notif_row{
        padding: 20px;
        position: relative;
    }
    .notif span.time{
        position: absolute;
        right: 25px;
    }
    .row .yest h4{
        padding-top: 10px;
        color: #555;
        font-weight: bold;
    }
    .row .yest .notif{
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.15) !important;
    }
    .paginatior{
        box-shadow: 0 1px 0.5rem rgba(0, 0, 0, 0.15);
        width: 80px;
        display: block;
        float: right;
        border-radius: 10px;
    }
    .paginatior .col-xs-6{
        padding: 0 5px;
        margin-top: 5px;
        margin-bottom: 5px;
        text-align: center;
        font-size: 16px;
    }
    .paginatior .col-xs-6:first-of-type{
        border-right: 3px solid #777;
        color: #999;
    }
    .paginatior .col-xs-6:last-of-type i{
        color: #F14441;
    }
    .paginatior .col-xs-6 i{
        font-size: 28px;
    }
    #data div.chart2.chart3 .chart-data span:first-of-type{
        margin-right: 0 !important;
    }
    .yester_row{
        padding: 0 !important;
    }
    /******************************* Bootstrap 3*******************************/
    #header .row .col-md-6{
        height: 100%;
    }
    .has-search{
        position: relative;
    }
    .has-search .form-control-feedback{
        left: 5px;
        top: -1px;
    }
</style>