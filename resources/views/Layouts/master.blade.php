<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mejunje | @yield('title')</title>
        @include('Layouts.head')
        @yield('styles')
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <div class="row rowest">
                <!-- Sidebar -->
                @include('Layouts.sidebar-menu')
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div class="col-md-9 col-lg-10" id="page-content-wrapper">
                    <div class="container-fluid">
                        <div id="header">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="welcome">
                                        <h2>Welcome back, <span class="name">@yield('name')</span>.</h2>
                                        <p>@yield('extra_title')</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group has-search">
                                            <span class="fa fa-search form-control-feedback"></span>
                                            <input type="text" class="form-control" placeholder="Search here">
                                        </div>
                                        @yield('extra_design')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="data">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->
            </div>
        </div>
        @include('Layouts.scripts')        
    </body>
</html>
