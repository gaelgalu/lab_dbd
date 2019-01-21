<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Latravel</title>
    <title>{{ config('app.name', 'Latravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">






   <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="Colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Latravel</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="../../css/linearicons.css">
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/nice-select.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/main.css">


<!-- Start Header Area -->
    





</head>
<body>

    






    <div id="app">

        <header class="default-header">
            <div class="container">
                <div class="header-wrap">
                    <div class="header-top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="/"><img src="img/logo.png" alt=""></a>
                        </div>
                        <div class="main-menubar d-flex align-items-center">
                            <nav>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Login</a>
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}">  Register</a>
                                            @endif
                                        @endauth
                                @endif
                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                        </div>
                    </div>
                </div>
            </div>

        </header>





        
        

        <main class="py-4">
            @yield('content')
        </main>


        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-md-6 col-sm-12">
                        <div class="single-footer-widget">
                            <h6>About Us</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-12">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">

                                    <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                    <div class="d-flex flex-row">

                                        <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                            <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>

                                        <!-- <div class="col-lg-4 col-md-4">
                                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                        </div>  -->
                                    </div>
                                    <div class="info"></div>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="col-lg-3  col-md-6 col-sm-12">
                        <div class="single-footer-widget mail-chimp">
                            <h6 class="mb-20">Instragram Feed</h6>
                            <ul class="instafeed d-flex flex-wrap">
                                <li><img src="img/i1.jpg" alt=""></li>
                                <li><img src="img/i2.jpg" alt=""></li>
                                <li><img src="img/i3.jpg" alt=""></li>
                                <li><img src="img/i4.jpg" alt=""></li>
                                <li><img src="img/i5.jpg" alt=""></li>
                                <li><img src="img/i6.jpg" alt=""></li>
                                <li><img src="img/i7.jpg" alt=""></li>
                                <li><img src="img/i8.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-footer-widget">
                            <h6>Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                    <p class="footer-text m-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
                    </p>
                </div>
                -->
            </div>
        </footer>
        <!-- End footer Area -->
        <script src="../../../public/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../../../public/js/jquery.nice-select.min.js"></script>
    <script src="../../../public/js/jquery.sticky.js"></script>
    <script src="../../../public/js/main.js"></script>





    </div>
</body>
</html>
