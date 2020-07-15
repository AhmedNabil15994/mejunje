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
            <!-- Sidebar -->
            @include('Layouts.sidebar-menu')
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div class="" id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="btn btn-default" id="menu-toggle">
                        <span class="navbar-togglers"></span>
                        <span class="navbar-togglers"></span>
                        <span class="navbar-togglers"></span>
                    </button>                        
                </nav>
                <div class="container-fluid">
                    <div id="header">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="welcome">
                                    <h2>Welcome back, <span class="name">@yield('name')</span>.</h2>
                                    <p class="extra_title">@yield('extra_title')<span class="item-counts"></span></p>
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
        @include('Layouts.scripts')        
    </body>
</html>
