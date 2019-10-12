<?php
ob_start();
error_reporting(0);
require 'database/db.php';
$field = $_REQUEST['field'];
$domain = $_REQUEST['domain'];
$city = $_REQUEST['city'];
if($field==0){
	$sql="SELECT * FROM employees";
}
elseif($field==1){
	if($domain=='singing'){
		$d = 'talent_singing';
		$sql = "SELECT * FROM employees NATURAL JOIN `$d` WHERE employees.field = '$field' and employees.domain = '$domain'";
	}
	else{
		$d = 'talent_photogarphy';
		$sql = "SELECT * FROM employees NATURAL JOIN `$d` WHERE employees.field = '$field' and employees.domain = '$domain'";
	}		
}	
else{
	if($domain=='labour'){
		$d = 'passion_labour';
		$sql = "SELECT * FROM employees NATURAL JOIN `$d` WHERE employees.field = '$field' and employees.domain = '$domain'";
	}
	else{
		$d = 'passion_pandit';
		$sql = "SELECT * FROM employees NATURAL JOIN `$d` WHERE employees.field = '$field' and employees.domain = '$domain'";
	}	
}
$res=mysqli_query($con,$sql);
?>

<!DOCTYPE php>
<html lang="en">

<head>
	<title>Employees list</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link href="styles/employees_list.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" type="text/css" href="styles/employees_list_responsive.css">
</head>

<body>

<div class="super_container">

<!-- Modal register & signup-->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
	aria-hidden="true">

	<div class="modal-dialog">

		<div class="modal-content">

			<div id="loginbox">
				<h3 class="feature_title">Sign In</h3>
				<div style="padding-top:30px">

					<div style="display:none" id="login-alert" class="alert alert-danger"></div>

					<form action="login_system/login.php" method="POST" id="loginform" class="form-horizontal"
						role="form">
						<div  class="form-group">
						<div  class="input-group">
							<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" name="no" class="form-control" value=""
								placeholder="enter registered mobile number" />
						</div>
						</div>
						<div  class="form-group">
						<div  class="input-group">
							<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
							<input type="password" name="pass" class="form-control" value=""
								placeholder="password" />
						</div>
					</div>

						<div  class="form-group">
							<button type="submit" name="login_btn" id="btn-login" class="btn btn-info">Login
							</button>
							<div style="float:right; font-size: 100%;">
								<a href="#" style="text-decoration: none; color: hsl(12, 99%, 39%) !important; "
									onClick="$('#loginbox').hide(); $('#forgetbox').show()">Forgot password?</a>
							</div>
						</div>
					</form>
					<!-- login form end -->
					<div style="margin-bottom: 25px; color: rgb(175,33,47);" class="form-group">
						<hr />
						Don't have an account!
						<a href="#" style="text-decoration: none; color: #FFFFFF !important;"
							onClick="$('#loginbox').hide(); $('#signupbox').show()">
							<strong>Sign Up Here</strong>
						</a>

					</div>


				</div>
			</div>
			<div id="signupbox" style="display:none;">
				<h3 class="feature_title">Sign Up</h3>
				<div style="padding-top:30px">


					<div style="display:none" id="signup-alert" class="alert alert-danger"></div>
					<form action="login_system/sendotp.php" methof="POST" id="signupform" class="form-horizontal">
						<div  class="form-group">
							<label>Mobile number: </label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"
										aria-hidden="true"></i></span>
								<input type="text" name="no" class="form-control" value=""
									placeholder="enter valid mobile number" />
								<button type="submit" name="send_otp" id="btn-signup"
									class="btn btn-info ml-auto" >Send Otp !
								</button>
							</div>	
						</div>
					</form>


					<!-- signup form end -->
					<div style="margin-bottom: 25px; color: rgb(175,33,47);" class="form-group">
						<hr />
						Have an account!
						<a href="#" style="text-decoration: none; color: #FFFFFF !important;"
							onClick="$('#signupbox').hide(); $('#loginbox').show()">
							<strong>Sign In Here</strong>
						</a>
					</div>
				</div>
			</div>
			<div id="forgetbox" style="display:none;">
				<h3 class="feature_title">Forget Password</h3>
				<div style="padding-top:30px">

					<div style="display:none" id="forget-alert" class="alert alert-danger"></div>

					<div  class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input type="text" name="number" class="form-control" value=""
							placeholder="enter registered mobile number" />
					</div>

					<div  class="form-group">
						<button type="submit" name="forget_btn" id="btn-forget" class="btn btn-info"
							onClick="$('#updatebox').show(); $('#loginbox').hide(); $('#signupbox').hide(); $('#forgetbox').hide()">
							Login
						</button>
					</div>
					<!-- login form end -->
					<div style="margin-bottom: 25px; color: rgb(175,33,47);" class="form-group">
						<hr />
						Try to Sign in!
						<a href="#" style="text-decoration: none; color: #FFFFFF !important;"
							onClick="$('#loginbox').show(); $('#signupbox').hide(); $('#forgetbox').hide()">
							<strong>Sign In Here</strong>
						</a>

					</div>


				</div>
			</div>
			<div id="updatebox" style="display:none;">
				<h3 class="feature_title">Reset Password</h3>
				<div style="padding-top:30px">

					<div style="display:none" id="update-box" class="alert alert-danger"></div>


					<div  class="input-group">
						<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
						<input type="password" name="password" class="form-control" value=""
							placeholder="password" />
					</div>

					<div  class="input-group">
						<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
						<input type="password" name="password" class="form-control" value=""
							placeholder="type password again" />
					</div>

					<div  class="form-group">
						<button type="submit" name="update_btn" id="btn-update" class="btn btn-info"
							onClick="$('#loginbox').show(); $('#signupbox').hide(); $('#forgetbox').hide(); $('#updatebox').hide()">
							Update
						</button>
					</div>


				</div>
			</div>

		</div>
	</div>
</div>

<!-- Header -->

<header class="header">

	<!-- Top Bar -->
	<div class="top_bar">
		<div class="top_bar_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<ul class="top_bar_contact_list">
								<li>
									<div class="question">Have any questions?</div>
								</li>
								<li>
									<i class="fa fa-phone" aria-hidden="true"></i>
									<div>+(91) 8952834418</div>
								</li>
								<li>
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
									<div>info.deercreative@gmail.com</div>
								</li>
								<li>
									<div id="google_translate_element"></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Header Content -->
	<div class="header_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<a href="#">
								<!--div class="logo_text">Namaste<span>Sir</span></div-->
								<img src="images/logo.png" height="250px" width="250px">
							</a>
						</div>
						<nav class="main_nav_contaner ml-auto">
							<ul class="main_nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li>
									<div class="header_button trans_200"><a data-toggle="modal"
											data-target="#myModal" style="cursor:pointer">Register or Login</a>
									</div>
								</li>
							</ul>
							<!-- Hamburger -->


							<div class="hamburger menu_mm">
								<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
							</div>
						</nav>

					</div>
				</div>
			</div>
		</div>
	</div>
</header>

		<!-- Menu -->

		<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
			<div class="menu_close_container">
				<div class="menu_close">
					<div></div>
					<div></div>
				</div>
			</div>
			<nav class="menu_nav">
				<ul class="menu_mm">
					<li>
						<div id="google_translate_element"></div>
					</li>
					<li class="menu_mm"><a href="index.php">Home</a></li>
					<li class="menu_mm"><a href="about.php">About</a></li>
					<li class="menu_mm"><a href="contact.php">Contact</a></li>
				</ul>
				<div class="top_bar_login ml-auto">
					<!-- Trigger the modal with a button -->
					<div class="login_button_mobile"><a data-toggle="modal" data-target="#myModal"
							style="cursor:pointer">Register or Login</a></div>
				</div>
			</nav>
		</div>

		<!-- Home -->

		<div class="home">
			<div class="breadcrumbs_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Search</li>
									<li>Employees List</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Courses -->

		<div class="courses">
			<div class="section_background parallax-window" data-parallax="scroll"
				data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">

					<!-- Courses Main Content -->
					<div class="col-lg-12">
						<div class="courses_search_container">
							<form action="#" id="courses_search_form"
								class="courses_search_form d-flex flex-row align-items-center justify-content-start">
								<select id="courses_search_select" class="courses_search_select courses_search_input">
									<option>Budget</option>
									<option>Under 500</option>
									<option>Under 1000</option>
									<option>Above 1000</option>
								</select>
								<select id="courses_search_select" class="courses_search_select courses_search_input">
									<option>All City</option>
									<option>Jaipur</option>
									<option>Delhi</option>
									<option>Banglorou</option>
								</select>
								<button action="submit" class="courses_search_button ml-auto">Filter Now</button>
							</form>
						</div>
						<div class="courses_container">
							<div class="row courses_row">
							
							<?php
							while($row=mysqli_fetch_array($res))
							{	
													
								#<!-- Course -->
								echo '<div class="col-lg-3 course_col">
										<a href="employees_portfolio/passion/pandit_portfolio.php">';
								echo '	<div class="course">';
								echo '		<div class="course_image"><img src="data:image;base64,'.$row['image'].'" width="100%" class="img-responsive" alt="img error"></div>';
								echo '		<div class="course_body">';

								echo '			<div class="employee_name "><b>'. $row['fname'] . '</b></div>';
								echo '			<div class="employee_city">'. $row['domain'] . '</div>';
								echo '		</div>';
								echo '		<div class="course_footer">';
								echo '			<div
												class="course_footer_content d-flex flex-row align-items-center justify-content-start">';

								echo '				<div class="course_info">';
								echo '					<i class="fa fa-star" aria-hidden="true"></i>';
								echo '					<span>'. $row['exp'] .' Experience</span>';
								echo '				</div>';
								echo '				<div class="course_price ml-auto">$'. $row['price'] .'</div>';
								echo '			</div>';
								echo '		</div>';
								echo '	</div></a>';
								echo '</div>';
								

							}
							?>
					
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
	<script src="js/employees_list.js"></script>
</body>

</html>