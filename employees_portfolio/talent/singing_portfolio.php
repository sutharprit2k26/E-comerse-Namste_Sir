<?php
ob_start();
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Portfolio</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Unicat project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../styles/bootstrap4/bootstrap.min.css">
	<link href="../../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../../plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="../../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="../../plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="../../styles/employees_portfolio.css">
	<link rel="stylesheet" type="text/css" href="../../styles/employees_portfolio_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Modal register & signup-->
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
			aria-hidden="true">

			<div class="modal-dialog modal-lg">

				<div class="modal-content">

					<div id="loginbox" style="margin-top:40px;" class=" col-lg-6">
						<h3 class="feature_title">Sign In</h3>
						<div style="padding-top:30px">

							<div style="display:pricene" id="login-alert" class="alert alert-danger"></div>

							<form action="employees_portfolio.html" method="POST" id="loginform" class="form-horizontal"
								role="form">

								<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input id="login-mobile" type="text" class="form-control" name="login_mobile"
										value="" placeholder="enter registered mobile number" required />
								</div>

								<div style="margin-bottom: 25px" class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="login-password" type="password" class="form-control"
										name="login_password" placeholder="password" required />
								</div>



								<div class="input-group">
									<div class="checkbox">
										<label>
											<input id="login-remember" type="checkbox" name="remember" value="1" />
											Remember me
										</label>
									</div>
								</div>


								<div style="margin-top:10px" class="form-group">

									<div class="col-sm-12 controls">
										<button type="submit" name="login_btn" id="btn-login" href="../../#"
											class="btn btn-success">Login </button>
										<div style="float:right; font-size: 80%;"><a href="../../#"
												style="text-decoration: pricene; color: hsl(12, 99%, 39%) !important; "
												onClick="$('#loginbox').hide(); $('#forgetbox').show()">
												Forgot password?</a></div>
									</div>
								</div>
							</form>
							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
										Don't have an account!
										<a href="../../#" style="text-decoration: pricene; color: hsl(12, 99%, 39%) !important; "
											onClick="$('#loginbox').hide(); $('#signupbox').show()">
											Sign Up Here
										</a>
									</div>
								</div>
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
									<div class="top_bar_login ml-auto">
										<!-- Trigger the modal with a button -->
										<div class="login_button"><a href="../../index.php"
												style="cursor:pointer">Logout</a></div>
									</div>
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
									<a href="../../#">
										<!--div class="logo_text">Namaste<span>Sir</span></div-->
										<img src="../../images/logo.png" height="250px" width="250px">
									</a>
								</div>
								<nav class="main_nav_contaner ml-auto">
									<ul class="main_nav">
										<li class="active"><a href="../../index.html"><?php if(isset($_SESSION['fname'])) echo $_SESSION['fname']." "; else echo 'error'; if(isset($_SESSION['lname'])) echo $_SESSION['lname']; else echo 'error'; ?></a></li>
										
									</ul>
									<div class="search_button"><i class="fa fa-user-circle-o" style="font-size:28px;color:hsl(12, 99%, 39%);" aria-hidden="true"></i>
									</div>
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
					<li class="menu_mm"><a href="../../index.html">Home</a></li>
					<li class="menu_mm"><a href="../../about.html">About</a></li>
					<li class="menu_mm"><a href="../../contact.html">Contact</a></li>
				</ul>
				<div class="top_bar_login ml-auto">
					<!-- Trigger the modal with a button -->
					<div class="login_button_mobile"><a data-toggle="modal" data-target="#myModal"
							style="cursor:pointer">Logout</a></div>
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
									<li><a href="../../index.html">Home</a></li>
									<li>Signin</li>
									<li>Employees Portfolio</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Course -->

		<div class="course">
			<div class="section_background parallax-window" data-parallax="scroll"
				data-image-src="../../images/courses_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">

					<!-- Course -->
					<div class="col-lg-8">

						<div class="course_container">
							<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

								<!-- Course Info Item -->
								<div class="course_info_item">
									<div class="course_info_title">State:</div>
									<div class="course_info_text"><a href="../../#"><?php if(isset($_SESSION['state'])) echo $_SESSION['state']; ?></a></div>
								</div>

								<!-- Course Info Item -->
								<div class="course_info_item">
									<div class="course_info_title">City:</div>
									<div class="course_info_text"><a href="../../#"><?php if(isset($_SESSION['city'])) echo $_SESSION['city']; ?></a></div>
								</div>

								<!-- Course Info Item -->
								<div class="course_info_item">
									<div class="course_info_title">dob:</div>
									<div class="course_info_text"><a href="../../#"><?php if(isset($_SESSION['dob'])) echo $_SESSION['dob']; ?></a></div>
								</div>
								<div class="course_info_item ml-auto">
										<div class="course_info_title">Edit:</div>
										<div class="course_info_text"><a href="../../#"><img src="../../images/edit.png" /></a></div>										
									</div>

							</div>

							<!-- Course Image -->
							<div class="course_image">
								<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../images/gallery_1_large.jpg">
											<?php 
											if(isset($_SESSION['img1'])) 
											echo '<img 	>';
											else 
											echo 'not image';
											?>
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../images/gallery_2_large.jpg">
											<img src="../../images/gallery_2.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../images/gallery_3_large.jpg">
											<img src="../../images/gallery_3.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../images/gallery_4_large.jpg">
											<img src="../../images/gallery_4.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../images/gallery_5_large.jpg">
											<img src="../../images/gallery_5.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../images/gallery_6_large.jpg">
											<img src="../../images/gallery_6.jpg" alt="">
										</a>
									</li>
								</ul></div>

							<!-- Course Tabs -->
							<div class="course_tabs_container">
								<div class="tabs d-flex flex-row align-items-center justify-content-start">
									<div class="tab active">reviews</div>
									<div class="tab">curriculum</div>
									<div class="tab">description</div>
								</div>
								<div class="tab_panels">

									<!-- Reviews -->

									<div class="tab_panel  active">
										<div class="tab_panel_title">Employee Review</div>

										<!-- Rating -->
										<div class="review_rating_container">
											<div class="review_rating">
												<div class="review_rating_num">4.5</div>
												<div class="review_rating_stars">
													<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i>
													</div>
												</div>
												<div class="review_rating_text">(28 Ratings)</div>
											</div>
											<div class="review_rating_bars">
												<ul>
													<li><span>5 Star</span>
														<div class="review_rating_bar">
															<div style="width:90%;"></div>
														</div>
													</li>
													<li><span>4 Star</span>
														<div class="review_rating_bar">
															<div style="width:75%;"></div>
														</div>
													</li>
													<li><span>3 Star</span>
														<div class="review_rating_bar">
															<div style="width:32%;"></div>
														</div>
													</li>
													<li><span>2 Star</span>
														<div class="review_rating_bar">
															<div style="width:10%;"></div>
														</div>
													</li>
													<li><span>1 Star</span>
														<div class="review_rating_bar">
															<div style="width:3%;"></div>
														</div>
													</li>
												</ul>
											</div>
										</div>

										
									</div>


									<!-- Curriculum -->
									<div class="tab_panel tab_panel_2">
										<div class="tab_panel_content">
											<div class="tab_panel_title">Software Training</div>
											<div class="tab_panel_content">
												
											</div>
										</div>
									</div>
									<!-- Description -->
									<div class="tab_panel tab_panel_3">
										<div class="tab_panel_title">Software Training</div>
										<div class="tab_panel_content">
											
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Course Sidebar -->
					<div class="col-lg-4">
						<div class="sidebar">

							<!-- Feature -->
							<div class="sidebar_section">
								<div class="sidebar_section_title">Employee Feature</div>
								<div class="sidebar_feature">
									<div class="course_price">Rs <?php if(isset($_SESSION['price'])) echo $_SESSION['price']; ?>/hour</div>

									<!-- Features -->
									<div class="feature_list">

										<!-- Feature -->
										<div class="feature d-flex flex-row align-items-center justify-content-start">
											<div class="feature_title"><i class="fa fa-clock-o"
													aria-hidden="true"></i><span>Number:</span></div>
											<div class="feature_text ml-auto"><?php if(isset($_SESSION['price'])) echo $_SESSION['price']; ?></div>
										</div>

										<!-- Feature -->
										<div class="feature d-flex flex-row align-items-center justify-content-start">
											<div class="feature_title"><i class="fa fa-file-text-o"
													aria-hidden="true"></i><span>Email:</span></div>
											<div class="feature_text ml-auto"><?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?></div>
										</div>

										<!-- Feature -->
										<div class="feature d-flex flex-row align-items-center justify-content-start">
											<div class="feature_title"><i class="fa fa-question-circle-o"
													aria-hidden="true"></i><span>Dob:</span></div>
											<div class="feature_text ml-auto"><?php if(isset($_SESSION['dob'])) echo $_SESSION['dob']; ?></div>
										</div>

										<!-- Feature -->
										<div class="feature d-flex flex-row align-items-center justify-content-start">
											<div class="feature_title"><i class="fa fa-list-alt"
													aria-hidden="true"></i><span>Sex:</span></div>
											<div class="feature_text ml-auto"><?php if(isset($_SESSION['sex'])) echo $_SESSION['sex']; ?></div>
										</div>

									</div>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
			<div class="container">
				<div class="row footer_row">
					<div class="col">
						<div class="footer_content">
							<div class="row">

								<div class="col-lg-3 footer_col">

									<!-- Footer About -->
									<div class="footer_section footer_about">
										<div class="footer_logo_container">
											<a href="../../#">
												<div class="footer_logo_text">Namaste<span>Sir</span></div>
											</a>
										</div>
										<div class="footer_about_text">
											<p>World leading online job finding website
												at your city.
											</p>
										</div>
										<div class="footer_social">
											<ul>
												<li><a href="../../#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												</li>
												<li><a href="../../#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
												</li>
												<li><a href="../../#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
												</li>
												<li><a href="../../#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
												</li>
											</ul>
										</div>
									</div>

								</div>

								<div class="col-lg-3 footer_col">

									<!-- Footer Contact -->
									<div class="footer_section footer_contact">
										<div class="footer_title">Contact Us</div>
										<div class="footer_contact_info">
											<ul>
												<li>Email: nitin@namastesir.com</li>
												<li>Phone: +(91) 8952834418</li>
												<li>Poornima hostel gurushikhar sitpura jaipur</li>
											</ul>
										</div>
									</div>

								</div>

								<div class="col-lg-3 footer_col">

									<!-- Footer links -->
									<div class="footer_section footer_links">
										<div class="footer_title">Contact Us</div>
										<div class="footer_links_container">
											<ul>
												<li><a href="../../index.html">Home</a></li>
												<li><a href="../../about.html">About</a></li>
												<li><a href="../../contact.html">Contact</a></li>
												<li><a href="../../#">FAQs</a></li>
											</ul>
										</div>
									</div>

								</div>

								<div class="col-lg-3 footer_col clearfix">

									<!-- Footer links -->
									<div class="footer_section footer_mobile">
										<div class="footer_title">Mobile</div>
										<div class="footer_mobile_content">
											<div class="footer_image"><a href="../../#"><img src="../../images/mobile_1.png"
														alt=""></a></div>
											<div class="footer_image"><a href="../../#"><img src="../../images/mobile_2.png"
														alt=""></a></div>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="row copyright_row">
					<div class="col">
						<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
							<div class="cr_text">
								Copyright &copy; 2019 All rights reserved | This website is develop by <i
									class="fa fa-heart-o" aria-hidden="true"></i> by <a href="../../https://colorlib.com"
									target="_blank">Elysian company</a>
							</div>
							<div class="ml-lg-auto cr_links">
								<ul class="cr_list">
									<li><a href="../../#">Copyright pricetification</a></li>
									<li><a href="../../#">Terms of Use</a></li>
									<li><a href="../../#">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="../../js/jquery-3.2.1.min.js"></script>
	<script src="../../styles/bootstrap4/popper.js"></script>
	<script src="../../styles/bootstrap4/bootstrap.min.js"></script>
	<script src="../../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="../../plugins/easing/easing.js"></script>
	<script src="../../plugins/parallax-js-master/parallax.min.js"></script>
	<script src="../../plugins/colorbox/jquery.colorbox-min.js"></script>
	<script src="../../js/employees_portfolio.js"></script>
</body>

</html>