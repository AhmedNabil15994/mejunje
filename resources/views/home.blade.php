<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mejunje | Home</title>
        @include('Layouts.head')
        @yield('styles')
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div class="" id="page-content-wrapper">
                <div class="container-fluid home">
                    <div class="background2"></div>
                    <div class="background"></div>
                    <nav class="navbar fixed-top navbar-expand-lg">
                        <div class="container">
                            <div class="col-md-6">
                                <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{URL::to('/assets/images/logo.jpeg')}}" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-togglers"></span>
                                    <span class="navbar-togglers"></span>
                                    <span class="navbar-togglers"></span>
                                </button>
                            </div>

                            <div class="col-md-6">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link first-li" data-animate="details" href="#">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-animate="features" href="#">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-animate="blog" href="#">How It Works</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-animate="footer" href="#">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>      
                    </nav>
                    <div class="details" id="details">
                        {{-- <div class="container"> --}}
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <h1>Awesome App For Your Modern Lifestyle</h1>
                                <p>increase Productivity with a simple to-do app.app for managing your personal budgets</p>
                                <button>Download App</button>
                                <button>Discover More</button>
                            </div>
                            <div class="col-md-8">
                                <img src="{{ URL::to('/assets/images/customer-1.png') }}" alt="">
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="container-fluid home2">
                    <div class="features text-center" id="features">
                        {{-- <div class="container"> --}}
                            <div class="col-md-5 first-col">
                                <img src="{{ URL::to('/assets/images/rest-7.png') }}" alt="">
                            </div>
                            <div class="col-md-6 last-col">
                                <h1>Our Cool Features</h1>
                                <p class="main-p">increase Productivity with a simple to-do app.app for managing your personal budgets</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-air-freshener"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Ai Intelligence</h3>
                                            <p>It is a long established fact that a reader will be distracted by looking at its layout.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-mobile"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Application Development</h3>
                                            <p>It is a long established fact that a reader will be distracted by looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-newspaper"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>UI UX Design</h3>
                                            <p>It is a long established fact that a reader will be distracted by looking at its layout.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-code"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Web Development</h3>
                                            <p>It is a long established fact that a reader will be distracted by looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        {{-- </div> --}}
                    </div>
                    <div class="clearfix"></div>
                    <div class="features text-center" id="features2">
                        {{-- <div class="container"> --}}
                            <div class="col-md-1"></div>
                            <div class="col-md-5 last-col">
                                <h1>Our Cool Features</h1>
                                <p class="main-p">increase Productivity with a simple to-do app.app for managing your personal budgets</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-air-freshener"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Ai Intelligence</h3>
                                            <p>It is a long established fact that a reader will be distracted by looking at its layout.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-mobile"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Application Development</h3>
                                            <p>It is a long established fact that a reader will be distracted by looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-newspaper"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>UI UX Design</h3>
                                            <p>It is a long established fact that a reader will be distracted by looking at its layout.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-code"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Web Development</h3>
                                            <p>It is a long established fact that a reader will be distracted by looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 first-col">
                                <img src="{{ URL::to('/assets/images/customer-8.png') }}" alt="">
                            </div>
                        {{-- </div> --}}
                    </div>
                    <div class="clearfix"></div>
                    <div class="features blog text-center" id="blog">
                        <div class="col-md-6 first-col">
                            <img src="{{ URL::to('/assets/images/customer-2.png') }}" alt="">
                        </div>
                        <div class="col-md-5 last-col">
                            <h1>Easy To Search Your Items by This App</h1>
                            <p class="main-p">
                                increase Productivity with a simple to-do app.app for managing your personal budgets
                                increase Productivity with a simple to-do app.app for managing your personal budgets
                                increase Productivity with a simple to-do app.app for managing your personal budgets
                                increase Productivity with a simple to-do app.app for managing your personal budgets
                                increase Productivity with a simple to-do app.app for managing your personal budgets.
                            </p>
                            <div class="row download">
                                <button> 
                                    <i class="fab fa-google-play"></i>  
                                    <div class="button-data">
                                        <b>Get it on</b> <span>Play Store</span>
                                    </div>
                                </button>
                                <button> 
                                    <i class="fab fa-app-store"></i> 
                                    <div class="button-data">
                                        <b>Get it on</b> <span>App Store</span>
                                    </div> 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <footer id="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                    <p class="first">Mejunje</p>
                                    <p class="last-one">
                                        increase Productivity with a simple to-do app.app for managing your personal budgets increase Productivity with a simple to-do app.app for managing your personal budgets increase Productivity with a simple to-do app.app for managing your personal budgets increase Productivity with a simple to-do app.app for managing your personal budgets increase Productivity with a simple to-do app.app for managing your personal budgets.
                                    </p>
                                </div>    
                                <div class="col-md-2">
                                    <p class="first head">Support</p>
                                    <p class="last-one"><a href="#">FAQ</a></p>
                                    <p class="last-one"><a href="#">Contact us</a></p>
                                    <p class="last-one"><a href="#">Term Service</a></p>
                                    <p class="last-one"><a href="#">Live Chat</a></p>
                                </div>    
                                <div class="col-md-3">
                                    <p class="first head">Download</p>
                                    <p class="last-one"><a href="#">Android (Google Play)</a></p>
                                    <p class="last-one"><a href="#">Apple (App Store)</a></p>
                                    <p class="last-one"><a href="#">Microsoft (Microsoft Store)</a></p>
                                    <p class="last-one"><a href="#">ChromeOS (Coming Soon)</a></p>
                                </div>    
                                <div class="col-md-3">
                                    <p class="first head">Contact Us</p>
                                    <p class="last-one"><i class="fa fa-map-marker-alt"></i> 01 Overille Road Apt.786,California USA</p>
                                    <p class="last-one"><i class="fa fa-envelope"></i> admin@mejunje.com</p>
                                    <p class="last-one"><i class="fa fa-phone"></i> +123123123</p>
                                </div>    
                            </div>
                            <div class="row last-row">
                                <div class="col-xs-12">
                                    <div class="col-md-9 col-xs-12 col-sm-6">
                                        <p class="designed"> &copy; {{ date('Y') }} Copyright all right reserved by Ahmed Nabil. </p>
                                    </div>
                                    <div class="col-md-3 col-xs-12 col-sm-6 text-right">
                                        <div class="footer-icon"><i class="fab fa-facebook"></i></div>
                                        <div class="footer-icon"><i class="fab fa-twitter"></i></div>
                                        <div class="footer-icon"><i class="fab fa-youtube"></i></div>
                                        <div class="footer-icon"><i class="fab fa-instagram"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        @include('Layouts.scripts')        
    </body>
</html>
