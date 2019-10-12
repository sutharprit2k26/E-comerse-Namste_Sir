<?php
session_destroy();
?>
<!DOCTYPE php>
<html lang="en">

<head>
	<title>NamasteSir</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="NamasteSir project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="super_container">

		<!-- Modal register & signup-->
		<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
			aria-hidden="true">

			<div class="modal-dialog">

				<div class="modal-content">

					<div id="loginbox" style="display:none;">
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
					<div id="signupbox" >
						<h3 class="feature_title">Sign Up</h3>
						<div style="padding-top:30px">


							<div style="display:none" id="signup-alert" class="alert alert-danger"></div>
							<form action="login_system/sendotp.php" methof="POST" id="signupform" class="form-horizontal">
								<div  class="form-group">
									<label>Mobile number: </label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"
												aria-hidden="true"></i></span>
										<input type="text" name="no" pattern="[1-9]{1}[0-9]{9}" class="form-control" value=""
											placeholder="enter valid mobile number" required/>
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
					<div class="header_button trans_200"><a data-toggle="modal" data-target="#myModal"
							style="cursor:pointer">Register or Login</a></div>
				</div>
			</nav>
		</div>

		<!-- Home -->

		<div class="home" id="home">
			<div class="home_slider_container">

				<!-- home search form -->
				<div class="home_slider_content">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<div class="container">
									<div class="row">
										<div class="col text-center ">

											<div class="home_slider_title">Hire The Top People of All Category</div>
											<div class="home_slider_subtitle">For Future Citizen and Employer</div>
											<div class="home_slider_form_container">
												<form action="employees_list.php" method="post" id="home_search_form_1"
													class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
													<div
														class="d-flex flex-row align-items-center justify-content-center">

														<input type="text" name="city" class="home_search_input"
															placeholder="Seach City">


														<select name="field" class="custom-select select-btn1" id="field"></select>
														</select>
														<p>&nbsp;</p>
														<select name="domain" class="custom-select select-btn2" id="domain">
																<option value="" selected disabled hidden><b>Select Field</b>
																</option>
															</select>

													</div>
													<button type="submit" class="home_search_button">search</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- Home Slider -->
				<div class="owl-carousel owl-theme home_slider">
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(images/bg/home_slider_0.jpg)">
						</div>
					</div>
					<div class="owl-item">
						<div class="home_slider_background" style="background-image:url(images/bg/home_slider_7.jpg)">
						</div>
					</div>
				</div>
				
			</div>

			<!-- Home Slider Nav -->

			<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
			<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
		</div>

		<!-- Features -->

		<div class="features" id="feature">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">Welcome To NamsteSir</h2>
							<div class="section_subtitle">
								<p style="color:#FFFFFF !important;">A online platform where people show case there
									talent, passion, product with
									outside citizen of city and common people so they can hire them without any hustle !
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row features_row">


					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
							<h3 class="feature_title">Search People</h3>
							<div class="feature_text">
								<p>Search people on the basis of there category talent, passion, work.</p>
							</div>
						</div>
					</div>

					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
							<h3 class="feature_title">Hire People</h3>
							<div class="feature_text">
								<p>Based on your work interest hire them with 3 click on namastesir.in.</p>
							</div>
						</div>
					</div>

					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_400">
							<div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
							<h3 class="feature_title">Get Work</h3>
							<div class="feature_text">
								<p>Employees come to your destination and work according your need.</p>
							</div>
						</div>
					</div>


					<!-- Features Item -->
					<div class="col-lg-3 feature_col">
						<div class="feature text-center trans_4container00">
							<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
							<h3 class="feature_title">Payment reward</h3>
							<div class="feature_text">
								<p>After completion of your work and satisfaction pay and review people.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Popular field -->

		<div class="courses" id="courses">
			<div class="section_background parallax-window" data-parallax="scroll"
				data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">Popular Field of People</h2>
							<div class="section_subtitle">
								<p>Most hiring field of people are shown below
									click to open list of all people register in these domain
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row courses_row">

					<!-- Course -->
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image"><img src="images/painter.jpg" alt=""></div>
							<div class="course_body">
								<h3 class="course_domain">Driver</h3>
								<div class="course_field">passion-work</div>
								<div class="course_text">
									<p></p>
								</div>
							</div>
							<div class="course_footer">
								<div
									class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>20 Driver</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Ratings</span>
									</div>
									<div class="course_price ml-auto"><a href="course.php"
											style="ext-decoration: none;">Hire</a></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Course -->
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image"><img src="images/painter.jpg" alt=""></div>
							<div class="course_body">
								<h3 class="course_domain">Painter
								</h3>
								<div class="course_field">Talent-art</div>
								<div class="course_text">
									<p>
									</p>
								</div>
							</div>
							<div class="course_footer">
								<div
									class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>45 painter</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Ratings</span>
									</div>
									<div class="course_price ml-auto"><a href="course.php">Hire</a></div>
								</div>
							</div>
						</div>
					</div>

					<!-- Course -->
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image"><img src="images/developer.jpg" alt=""></div>
							<div class="course_body">
								<h3 class="course_domain">App developer</h3>
								<div class="course_field">freelancer-youth</div>
								<div class="course_text">
									<p></p>
								</div>
							</div>
							<div class="course_footer">
								<div
									class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>20 Developer</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Ratings</span>
									</div>
									<div class="course_price ml-auto"><a href="course.php">Hire</a></div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col">
						<div class="courses_button trans_200"><a href="#">view all courses</a></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Blog -->

		<div class="blog" id="blog">
			<div class="section_background parallax-window" data-parallax="scroll" data-speed="0.8"></div>

			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<h2 class="section_title">Blog</h2>
							<div class="section_subtitle">
								<p style="color:#FFFFFF">what our employers and employees saw about us
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row courses_row">

					<!-- Blog Post -->
					<div class="col-lg-4 course_col">
						<div class="blog_post">
							<div class="blog_post_video_container">
								<video class="blog_post_video video-js"
									data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "images/blog_4.jpg"}'>
									<source src="images/mov_bbb.mp4" type="video/mp4">
									<source src="images/mov_bbb.ogg" type="video/ogg">
									Your browser does not support php5 video.
								</video>
							</div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a>Building Skills
										Outside the Classroom With New Ways</a></div>

								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on
										which path policymakers should take...</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Blog Post -->
					<div class="col-lg-4 course_col">
						<div class="blog_post">
							<div class="blog_post_image"><img src="images/blog_1.jpg" alt=""></div>
							<div class="blog_post_body">
								<div class="blog_post_title">Here’s What You
									Need to Know About Online job</div>

								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on
										which path policymakers should take...</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Blog Post -->
					<div class="col-lg-4 course_col">
						<div class="blog_post">
							<div class="blog_post_video_container">
								<video class="blog_post_video video-js"
									data-setup='{"controls": true, "autoplay": false, "preload": "auto", "poster": "images/blog_2.jpg"}'>
									<source src="images/mov_bbb.mp4" type="video/mp4">
									<source src="images/mov_bbb.ogg" type="video/ogg">
									Your browser does not support php5 video.
								</video>
							</div>
							<div class="blog_post_body">
								<div class="blog_post_title"><a>Building Skills
										Outside the Classroom With New Ways</a></div>

								<div class="blog_post_text">
									<p>Policy analysts generally agree on a need for reform, but not on
										which path policymakers should take...</p>
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
											<a href="#">
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
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
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
												<li><a href="index.php">Home</a></li>
												<li><a href="about.php">About</a></li>
												<li><a href="contact.php">Contact</a></li>
												<li><a href="#">FAQs</a></li>
											</ul>
										</div>
									</div>

								</div>

								<div class="col-lg-3 footer_col clearfix">

									<!-- Footer links -->
									<div class="footer_section footer_mobile">
										<div class="footer_title">Mobile</div>
										<div class="footer_mobile_content">
											<div class="footer_image"><a href="#"><img src="images/mobile_1.png"
														alt=""></a>
											</div>
											<div class="footer_image"><a href="#"><img src="images/mobile_2.png"
														alt=""></a>
											</div>
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
									class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
									target="_blank">Elysian company</a>
							</div>
							<div class="ml-lg-auto cr_links">
								<ul class="cr_list">
									<li><a href="#">Copyright notification</a></li>
									<li><a href="#">Terms of Use</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/homepage_field.js"></script>
	<script src="plugins/masonry/masonry.js"></script>
	<script src="plugins/video-js/video.min.js"></script>
	<!--
	<script type="text/javascript">
		function googleTranslateElementInit() {
  		new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
	</script>

	<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	-->
</body>

	</html>