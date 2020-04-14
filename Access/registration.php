<!DOCTYPE html>
<html lang="en">

<head>
	<title>HotelBook</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../logo/logo1.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form id="register_form" class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						<center>
							<label style="color:Gray;">Hotel</label>
							<label style="color:LightGray;">Book
								<sub>
									<img src="../logo/logo1.png" style="width: 25px;height :25px;-ms-transform: rotate(20deg);transform: rotate(20deg);">
								</sub>
							</label>
						</center>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="reg_uname" id="reg_uname_id" onfocus="clr_err()" >
						<span class="focus-input100"></span>
						<span class="label-input100">User name</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="number" name="reg_phone" id="reg_phone_id" onfocus="clr_err()" >
						<span class="focus-input100"></span>
						<span class="label-input100">Phone number</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="reg_email" id="reg_email_id" onfocus="clr_err()" >
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="reg_pass" id="reg_pass_id" onfocus="clr_err()" >
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="reg_conpass" id="reg_conpass_id" onfocus="clr_err()">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirm Password</span>
					</div>

					<div class="text-right">
						<label id="register_err_lbl" class="err_lbl"></label>
					</div>

					<div class="container-login100-form-btn" style="margin-bottom: 20px;">
                        <button type="button" id="register_submit" class="login100-form-btn"
                            onclick="register_check()">Sign up</button>
                    </div>

					<center>
						<div class="show-progress" id="register_loading_bar"></div>
					</center>

					<div class="text-center p-t-46 p-b-20" onclick="redirect_login()" style="cursor: pointer;">
						<span class="txt2">Already have an account
							<a href="login.php">login</a>
						</span>
					</div>

				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">

				</div>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/js_register.js"></script>
	<!--===============================================================================================-->
	<script>
		(function($) {
			"use strict";

			/*==================================================================
			[ Focus Contact2 ]*/
			$('.input100').each(function() {
				$(this).on('blur', function() {
					if ($(this).val().trim() != "") {
						$(this).addClass('has-val');
					} else {
						$(this).removeClass('has-val');
					}
				})
			})
		})(jQuery);
	</script>
	<!--===============================================================================================-->

</body>

</html>

