<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Inventaris </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href=<?php echo base_url('assets/images/icons/favicon.ico'); ?>/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css");?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css");?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/fonts/iconic/css/material-design-iconic-font.min.css");?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/vendor/animate/animate.css");?>>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/vendor/css-hamburgers/hamburgers.min.css");?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/vendor/animsition/css/animsition.min.css");?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/vendor/select2/select2.min.css");?>>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.css");?>>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/css/util.css");?>>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/css/main.css");?>>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url(<?php echo base_url("assets/images/bg-01.jpg");?>)">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<div class="d-flex justify-content-center">
				<div style="width: 100px; height: 100px;">
					<img src="<?php echo base_url('assets/images/logotrans.png');?>" style="width: auto; height: 100%; padding-bottom: ">
					<br>
				</div>
				</div>
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						<h3>SISTEM INVENTARIS</h3>
						<h3 style="padding-top: 10px;">SMK MUHAMMADIYAH 06</h3>
						<h3 style="padding-top: 10px;">DONOMULYO</h3>
					</span>
					<form action="<?php echo base_url('Login/input_login'); ?>" method="post" >
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>
					</form>
					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src=<?php echo base_url("assets/vendor/jquery/jquery-3.2.1.min.js");?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("assets/vendor/animsition/js/animsition.min.js");?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("assets/vendor/bootstrap/js/popper.js");?>></script>
	<script src=<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js");?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("assets/vendor/select2/select2.min.js");?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("assets/vendor/daterangepicker/moment.min.js");?>></script>
	<script src=<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.js");?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("assets/vendor/countdowntime/countdowntime.js");?>></script>
<!--===============================================================================================-->
	<script src=<?php echo base_url("assets/js/main.js");?>></script>

</body>
</html>