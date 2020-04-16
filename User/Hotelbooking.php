<!doctype html>
<html class="no-js"  lang="en">
	<?php
	session_start();
	
	
	if(!isset($_SESSION['status'])){
		//not logged in
		header('Location: login.php');
	} 
	
	else if($_SESSION['status'] =='admin')
	{
		header('Location: Admin/index.php');
	}
	?>

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>HotelBook</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="../logo/logo1.png"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="css/booking.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="css/responsive.css" />

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/review/style.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
									Hotel<span>Book
									<sub>
										<img src="../logo/logo1.png"
											style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
									</sub>
									</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->

								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#home">Home</a></li>
										<li class="smooth-menu"><a href="#gallery">Destination</a></li>
										<li class="smooth-menu"><a href="#pack">Hotels </a></li>
										<li class="smooth-menu"><a href="#spo">Special Offers</a></li>
										<li class="smooth-menu"><a href="#blog">blog</a></li>
										<li class="smooth-menu"><a href="#subs">Make a Review</a></li>
										<li class="smooth-menu"><a href="#">My bookings</a></li>
										<li>
											<!-- <a href="php/logout.php"> -->
											<a class="book-btn" href="../Access/logout.php">LogOut</a>
		                                   <!-- </a> -->
										</li><!--/.project-btn--> 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->
		
		<!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Explore the Beauty of the Beautiful SriLanka 

									</h2>
									<div class="about-btn">
										<button  class="about-view">
											explore now
										</button>
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						My Bookings
					</h2>
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">
						<?php include 'Controllers/get_hotels.php';
						foreach($responseData AS $response) {

							$name = $response['name'];
							$email = $response['email'];
							$phone_number = $response['phone_number'];
							$parking = $response['parking'];
							$spa = $response['spa'];
							$bar = $response['bar'];
							$pool = $response['pool'];
							$hotelImage = $response['hotelImage'];
						
							if(empty($email)){
								// header("Location:../login.html");
								echo "No responce from server";
							}
							else{
								echo'
								<div class="col-md-4 col-sm-6">
									<div class="single-package-item">
										<img src="data:image/png;base64,' . $hotelImage . '" alt="package-place">
										<div class="single-package-item-txt">
											<h3>'.$name.'</h3>
											<div class="packages-para">
												<p>
													<span>
													<i class="fas fa-parking"></i>  Parking '.$parking.'
													</span>
													<i class="fas fa-spa"></i> Spa '.$spa.'
												</p>
												<p>
													<span>
														<i class="fas fa-glass-cheers"></i> Bar '.$bar.'
													</span>
													<i class="fas fa-swimming-pool"></i> Pool '.$pool.'
												</p>
											</div><!--/.packages-para-->
											<div class="about-btn">
												<button  class="about-view packages-btn">
													book now
												</button>
											</div><!--/.about-btn-->
										</div><!--/.single-package-item-txt-->
									</div><!--/.single-package-item-->  
								</div><!--/.col--> 
								';
								}
						}
						?>

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->


		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
				<div class="footer-content">
					<div class="row">

						<div class="col-sm-3">
							<div class="single-footer-item">
								<div class="footer-logo">
									<a href="index.html">
										Hotel<span>Book
										<sub>
											<img src="../logo/logo1.png"
												style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
										</sub>
										</span>
									</a>
									<p>
										best hotel agency
									</p>
								</div>
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>link</h2>
								<div class="single-footer-txt">
									<p><a href="#home">home</a></p>
									<p><a href="#gallery">destination</a></p>
									<p><a href="#pack">Hotels</a></p>
									<p><a href="#spo">special offers</a></p>
									<p><a href="#blog">blog</a></p>
									<p><a href="#subs">Make a Review</a></p>

								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>popular destination</h2>
								<div class="single-footer-txt">
									<p>Colombo</p>
									<p>Yala</p>
									<p>Dambulla</p>
									<p>Bandarawela</p>
									<p>Kaluthara</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item text-center">
								<h2 class="text-left">contacts</h2>
								<div class="single-footer-txt text-left">
									<p>+94 11 265 98744 </p>
									<p>info@bookme.com</p>
									<p>294, Galle Road, Bambalapitiya, Colombo 04</p>
									<p>Colombo,Sri Lanka</p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

					</div><!--/.row-->

				</div><!--/.footer-content-->
				<hr>
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fab fa-facebook-f"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fab fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fab fa-instagram"></i></a></li>
		        	</ul>
		        	<p>&copy; 2020 <a href="#">Team Squadra</a>. All Right Reserved®</p>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->

		<script src="js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="js/custom.js"></script>

		<!-- fa fa icons -->
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	</body>

</html>