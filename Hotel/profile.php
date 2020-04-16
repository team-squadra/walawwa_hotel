<?php
    session_start();
	if(!isset($_SESSION['status'])){
		header('Location: ../Access/login.php');
	} 
	else if($_SESSION['status'] !='hotel')
	{
		header('Location: ../index.php');
    }
    else{

	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>HotelBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../logo/logo1.png" />
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/animate.css">
    <!--==============================================================================================-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/aos.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/flaticon.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/style.css">
    <!--===============================================================================================-->
</head>

<body>

    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
            <h1 id="colorlib-logo"><a href="index.php">
                    <center>
                        <label style="color:Gray;">Hotel</label><br>
                        <label style="color:LightGray;">Book
                            <sub>
                                <img src="../logo/logo1.png"
                                    style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
                            </sub>
                        </label>
                    </center>
                </a></h1>
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="photography.php">Photography</a></li>
                    <li><a href="travel.php">Travel</a></li>
                    <li><a href="fashion.php">Fashion</a></li>
                    <li class="colorlib-active"><a href="profile.php">Profile</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="colorlib-footer" style="display: none;">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
            </div>
        </aside> <!-- END COLORLIB-ASIDE -->
        <div id="colorlib-main">
            <div class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(images/bg_4.jpg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="js-fullheight d-flex justify-content-center align-items-center">
                    <div class="col-md-8 text text-center">
                        <div class="img mb-4" style="background-image: url(images/bg1.jpg);"></div>
                        <div class="desc">
                            <h1 class="mb-4">
                                <?php
                                if(isset($_SESSION["name"])){
                                    echo $_SESSION["name"] ;
                                }
                                else{
                                    echo "Hotel Username";
                                }
                                ?>
                            </h1>
                            <?php
                            include 'Controllers/php/php_profileDataLoader.php';
                                echo '
                                <p class="mb-4">'.$hotel_id.'</p>
                                <p class="mb-4">'.$hotel_name.'</p>
                                <p class="mb-4">'.$hotel_email.'</p>
                                <p class="mb-4">'.$hotel_phone_number.'</p>
                                <p class="mb-4">'.$hotel_location.'</p>
                                <p class="mb-4">'.$hotel_description.'</p>
                                <p class="mb-4">'.$hotel_hotelImage.'</p>
                                <p class="mb-4">'.$hotel_pool.'</p>
                                <p class="mb-4">'.$hotel_parking.'</p>
                                <p class="mb-4">'.$hotel_spa.'</p>
                                <p class="mb-4">'.$hotel_bar.'</p>
                                <p class="mb-4">'.$hotel_wifi.'</p>
                                ';
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END COLORLIB-MAIN -->
    </div><!-- END COLORLIB-PAGE -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>