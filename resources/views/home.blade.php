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
                                <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{URL::to('/assets/images/logo.jpeg')}}" alt=""> Mejunje</a>
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
                                <h1>
                                    Mejunje Food Delivery App <br>
                                    ¡Pide lo que quieras desde tu móvil!
                                </h1>
                                <p>¿Quieres comerte algo rico y no quieres salir? Descarga nuestra app y ordena tu comida favorita de donde quieras.</p>
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
                            <div class="col-md-6 last-col">
                                <h1>Esto es "Mejunje"</h1>
                                <p class="main-p"> Escoge lo que quieras de tu rest (o) food truck favorito.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-hamburger"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Tengo ganas de...'</h3>
                                            <p>Tranquilo, tranquila, lo tenemos desde un rico mofongo de churrasco, hasta unos taquitos mexicanos picantes, o mejor aún, unas calientitas alcapurrias de jueyes . mmmmm!</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>¿Pa' aqui o pa' llevar? ¡Quiero delivery!</h3>
                                            <p> No tienes que salir de tu casa o de tu trabajo,pide que te lo llevemos, y mientras esperas, rastrea tu orden en todo momento desde el app.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Quiero de mi sitio favorito</h3>
                                            <p>Con una plataforma fácil de usar y de buscar, encuentra aquítu sitio favorito.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Pide ahora y recíbelo luego</h3>
                                            <p>Relax…! Puedes programar la hora de entrega sin tenerque esperar a último momento.</p>
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
                                <h1>¿Tienes un negocio de comida y quieres estar en el app?</h1>
                                <p class="main-p">Expande tu negocio llevándolo al siguiente nivel.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa  fa-crosshairs"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Alcance</h3>
                                            <p>Esta es la oportunidad para que tus platos estén al frente de más personas, en donde con "un par de clicks" podrán pedir su plato favorito de tu negocio.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Punto de venta</h3>
                                            <p>Una plataforma de reporte para ver tus números.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Delivery</h3>
                                            <p>Perfiles con las herramientas completas para tus empleados.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon-holder">
                                            <i class="fa fa-handshake"></i>
                                        </div>
                                        <div class="icon-data">
                                            <h3>Únete</h3>
                                            <p>- Envíanos un email a info@mejunjeapp.com y se parte de la revolución gastronómica.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 first-col">
                                <img src="{{ URL::to('/assets/images/customer-8.png') }}" alt="">
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
                        {{-- </div> --}}
                    </div>
                    <div class="clearfix"></div>
                    <div class="features blog text-center" id="blog">
                        <div class="col-md-6 first-col">
                            <img src="{{ URL::to('/assets/images/customer-2.png') }}" alt="">
                        </div>
                        <div class="col-md-5 last-col">
                            <h1>¡Descarga el app y pide que hay!</h1>
                            <p class="main-p">
                                Descarga el app desde tu Android o iPhone, disponible ya en Play Store y App Store, vive la experiencia.
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
                                       Descarga el app desde tu Android o iPhone, disponible ya en Play Store y App Store, vive la experiencia.
                                    </p>
                                </div>    
                                <div class="col-md-4">
                                    <p class="first head">Download</p>
                                    <p class="last-one"><a href="#">Android (Google Play)</a></p>
                                    <p class="last-one"><a href="#">Apple (App Store)</a></p>
                                    <p class="last-one"><a href="#">Microsoft (Microsoft Store)</a></p>
                                    <p class="last-one"><a href="#">ChromeOS (Coming Soon)</a></p>
                                </div>    
                                <div class="col-md-4">
                                    <p class="first head">Contact Us</p>
                                    <p class="last-one"><i class="fa fa-map-marker-alt"></i> Po Box 380, Hatillo, PR 00659</p>
                                    <p class="last-one"><i class="fa fa-envelope"></i> info@mejunjeapp.com</p>
                                    <p class="last-one"><i class="fa fa-phone"></i> (863) 485-4050</p>
                                </div>    
                            </div>
                            <div class="row last-row">
                                <div class="col-xs-12">
                                    <div class="col-md-9 col-xs-12 col-sm-6">
                                        <p class="designed"> &copy; {{ date('Y') }} Copyright all right reserved by <a href="https://www.facebook.com/Dev.MoDy.Nabil" title="">Ahmed Nabil</a>. </p>
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
