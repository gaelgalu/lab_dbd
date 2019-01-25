	
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/logo.png" alt=""></a>
							</div>
				            <div class="main-menubar d-flex align-items-center">
			                	<nav class="hide">
									@if (Route::has('login'))
					                    @auth
					                        <a href="{{ url('/') }}">Home</a>
					                        <a href="{{ url('/userReserves') }}">Reservas</a>
					                        <a href="/cart/purchases">
                                            	{{ __('Carro de compras') }}
                                        	</a>
					                        <a href="{{ url('/logout')}}"> Logout </a>
					               	    @else
					               	    	<a href="{{ url('/') }}">Home</a>
					               	    	<a href="/cart/purchases">
                                            	{{ __('Carro de compras') }}
                                        	</a>
					           	            <a href="{{ route('login') }}">Login</a>
					           	            	@if (Route::has('register'))
					       	                    	<a href="{{ route('register') }}">	Register</a>
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
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
				<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
					<div class="active-banner-carousel">
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Planifica tu viaje <br>
								con los mejores vuelos
							</h1>
							<a href="searchflight" class="head-btn btn text-uppercase">Buscar vuelos</a>
						</div>
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Disfruta tu viaje <br>
								en los mejores hoteles
							</h1>
							<a href="searchhotel" class="head-btn btn text-uppercase">Buscar hoteles</a>
						</div>
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Disfruta de nuestros <br>
								mejores paquetes
							</h1>
							<a href="/packages" class="head-btn btn text-uppercase">Buscar paquetes</a>
						</div>
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Lorem <br>
								ipsum
							</h1>
							<a href="#" class="head-btn btn text-uppercase">Buscar vehículos</a>
						</div>
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Lorem <br>
								ipsum
							</h1>
							<a href="#" class="head-btn btn text-uppercase">Buscar traslados</a>
						</div>
						<div class="banner-content col-lg-12 col-md-12">
							<h1>
								Disfruta de las <br>
								mejores actividades
							</h1>
							<a href="{{ route('searchactivities') }}" class="head-btn btn text-uppercase">Buscar actividades</a>
						</div>
					</div>
					<div class= "left-arrow">
						<div class="carousel-trigger">
							<div class="prev-trigger"><span class="lnr lnr-arrow-left"></span></span></div>
						</div>
					</div>
					<div class= "right-arrow">
						<div class="carousel-trigger">
							<div class="next-trigger" ;><span class="lnr lnr-arrow-right"></span></span></div>
						</div>
					</div>
				</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start service Area
			<section class="service-area section-gap" id="facilities">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Superb Facilities</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 single-service">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/f1.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Resort Holiday package</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-4 col-md-4 single-service"">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/f2.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Resort Holiday package</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-4 col-md-4 single-service"">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/f3.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Resort Holiday package</h3>
						      </div>
						    </a>
						  </div>
						</div>
					</div>
				</div>
			</section>
			<!-- End service Area -->

			<!-- Start about Area
			<section class="about-area">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right">
							<h1>A very Lovely Welcome <br>
							to our Hotel</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
							</p>
							<button class="btn btn-black">Make Package of your own</button>
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->

			<!-- Start facilities Area 
			<section class="facilities-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Superb Facilities</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-rocket"></span>
							<h4>Easy Flight Search</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-magic-wand"></span>
							<h4>Get Hotel Offers</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-gift"></span>
							<h4>Holiday Packages</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-rocket"></span>
							<h4>Easy Flight Search</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-magic-wand"></span>
							<h4>Get Hotel Offers</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-gift"></span>
							<h4>Holiday Packages</h4>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
							</p>
						</div>


					</div>
				</div>
			</section>
			<!-- End facilities Area -->

			<!-- Start gallery Area
			<section class="gallery-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g1.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Resort Holiday package</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g2.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Resort Holiday package</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g3.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Resort Holiday package</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g4.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Resort Holiday package</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g5.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Resort Holiday package</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g6.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Resort Holiday package</h3>
						      </div>
						    </a>
						  </div>
						</div>
					</div>
				</div>
			</section>
			<!-- End gallery Area -->


			<!-- Start booking Area 
			<section class="booking-area" id="book">
				<div class="container">
					<div class="row">
						<div class="booking-wrap col-lg-12">
							<div class="row d-flex justify-content-center">
								<div class="col-md-10 pb-80 header-text">
									<h1>Book a Room</h1>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
									</p>
								</div>
							</div>
					  		<form class="booking-form" id="booking" action="booking.php">
								 <div class="row">
								    <div class="col-lg-6 col-md-12">
								    	<div class="row">
									    	<div class="col-lg-6">
												<input type="text" name="fname" class="single-in form-control" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="">
												<input id="datepicker" name="arrival" class="single-in form-control"  onblur="this.placeholder = 'Arrival'" type="text" placeholder="Arrival" required>
												<select name="room-type" class="app-select form-control" required>
													<option data-display="Room Type">Room Type</option>
													<option value="1">Room type 1</option>
													<option value="2">Room type 2</option>
													<option value="3">Room type 3</option>
												</select>
												<select name="adults" class="app-select form-control" required>
													<option data-display="Adults">Adults</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
												</select>
									    	</div>
									    	<div class="col-lg-6">
									    		<input type="text" name="lname" class="single-in form-control" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="">
									    		<input id="datepicker2" name="departure" class="single-in form-control"  onblur="this.placeholder = 'Departure'" type="text" placeholder="Departure" required>
									    		<select name="no-room" class="app-select form-control" required>
													<option data-display="Number Of Rooms">Number Of Rooms</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
												</select>
												<select name="clild" class="app-select form-control">
													<option data-display="Childs">Childs</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
												</select>
									    	</div>
								    	</div>
								    </div>
								    <div class="col-lg-6 col-md-12">
								      	<textarea class="single-in form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
								    </div>
										<div class="col-lg-12 d-flex justify-content-center send-btn">
										<button class="primary-btn mt-20 text-uppercase ">book room<span class="lnr lnr-arrow-right"></span></button>
									</div>

									<div class="alert-msg"></div>
								  </div>
					  		</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End booking Area -->


			<!-- Start contact-info Area -->
			<section class="contact-info-area section-gap">
				<div class="container">
					<div class="row">
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Visit Our Office</h4>
							 <p>
							 	56/8, bir uttam qazi nuruzzaman
							 	road, west panthapath, kalabagan,
							 	Dhanmondi, Dhaka - 1205
							 </p>
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Let’s call us</h4>
							 <p>
								Phone 01: 012-6532-568-9746 <br>
								Phone 02: 012-6532-568-9748 <br>
								FAX: 02-6532-568-746
							 </p>
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Let’s Email Us</h4>
							 <p>
								hello@colorlib.com <br>
								mainhelpinfo@colorlib.com <br>
								infohelp@colorlib.com
							 </p>
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Customer Support</h4>
							 <p>
							 	support@colorlib.com <br>
								emergencysupp@colorlib.com <br>
								extremesupp@colorlib.com
							 </p>
						</div>
					</div>
				</div>
			</section>
			<!-- End contact-info Area -->

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

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
