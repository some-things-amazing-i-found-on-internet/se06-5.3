<?php
// $logincontroll = new LoginController();
// $logincontroll->loginAction(isset($_POST['form1']),$_POST['cust_email'],$_POST['cust_password'], $error_message);
// var_dump($_SESSION['customer']);
?>
<div class="inner-wrapper">
	<div class="container-fluid no-padding">
		<div class="row no-gutters overflow-auto">
			<div class="col-md-6">
				<div class="main-banner">
					<img src="assets/img/banner/banner-1.jpg" class="img-fluid full-width main-img" alt="banner">
					<div class="overlay-2 main-padding">
						<img src="assets/img/logo-2.jpg" class="img-fluid" alt="logo">
					</div>
					<img src="assets/img/banner/burger.png" class="footer-img" alt="footer-img">
				</div>
			</div>
			<div class="col-md-6">
				<div class="section-2 user-page main-padding">
					<div class="login-sec">
						<div class="login-box">
							<form action="login" method="post">
								<h4 class="text-light-black fw-600">Sign in with your account</h4>
								<div class="row">
									<div class="col-12">
										<p class="text-light-black">Have a corporate username? <a href="add-restaurant.html">Click here</a>
										</p>
										<div class="form-group">
											<label class="text-light-white fs-14">Email</label>
											<input type="email" name="cust_email" class="form-control" placeholder="Email" required>
										</div>
										<div class="form-group">
											<label class="text-light-white fs-14">Password</label>
											<input type="password" id="password-field" name="cust_password" class="form-control" placeholder="Password" required>
											<div data-name="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></div>
										</div>
										<?php
										// if ($error_message != '') {
										//   echo "<div class='error text-center text-white' style='padding: 10px;background:#ff0018;margin-bottom:20px;'>" . $error_message . "</div>";
										// }
										?>
										<div class="form-group checkbox-reset">
											<label class="custom-checkbox mb-0">
												<input type="checkbox" name="#"> <span class="checkmark"></span> Keep me signed in</label> <a href="#">Reset password</a>
										</div>
										<!-- <div class="form-group">
											<input type="submit" name="form1" class="btn-second btn-submit full-width">
											<img src="assets/img/M.png" alt="btn logo">Sign in</input>
										</div> -->
										<button class="btn-second btn-submit full-width"> Sign in</button>
										<div class="form-group text-center"> <span>or</span>
										</div>

										<div class="form-group text-center mb-0"> <a href="register.html">Create your account</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Place all Scripts Here -->
<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Popper -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Range Slider -->
<script src="assets/js/ion.rangeSlider.min.js"></script>
<!-- Swiper Slider -->
<script src="assets/js/swiper.min.js"></script>
<!-- Nice Select -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
<!-- sticky sidebar -->
<script src="assets/js/sticksy.js"></script>
<!-- Munch Box Js -->
<script src="assets/js/quickmunch.js"></script>
<!-- /Place all Scripts Here -->
</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/quickmunch/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Oct 2021 03:22:23 GMT -->

</html>