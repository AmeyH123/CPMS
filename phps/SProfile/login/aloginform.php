<!-- This file was earlier named as index.php -->
<?php
include 'aindex1.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/creative2.css" type="text/css">
	<!-- Footer -->
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<!-- <link rel="stylesheet" href="css/bootstrap.min0.css" type="text/css"> -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>



<body class="light-gray-bg">
	<div class="templatemo-content-widget templatemo-login-widget white-bg">
		<header class="text-center">
			<div class="square"></div>
			<h1>Administrative Login</h1>
		</header>
		<form action="alogin2.php" class="templatemo-login-form" method="POST">
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>
					<input type="text" class="form-control" placeholder="USN" name="username">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>
					<input type="password" class="form-control" placeholder="******" name="password">
				</div>
			</div>
			<div class="form-group">
				<div class="checkbox squaredTwo">
					<input type="checkbox" id="c1" name="cc" />
					<label for="c1"><span></span>Remember me</label>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" class="templatemo-blue-button width-100">Login</button>
			</div>
		</form>
	</div>
	<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
		<p>Not a registered user yet? <strong><a href="register.php" class="blue-text">Sign up now!</a></strong></p>
	</div>
	<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
		<p>Can't Access Account? <strong><a href="ForgotPassword.php" class="blue-text">Reset Password!</a></strong></p>
	</div>


	<div class="footer" style="background:black">
		<div class="container">
			<div class="row">
				<div class="col-6 col-md-2 mb-3 text-white">
					<h5>NAVIGATION</h5>
					<ul class="nav flex-column text-white">
						<li class="nav-item mb-2"><a href="../../homepage/home7.php" class="nav-link p-0 text-white">Home</a></li>
						<li class="nav-item mb-2"><a href="../login/sloginform.php" class="nav-link p-0 text-white">Student login</a></li>
						<li class="nav-item mb-2"><a href="../login/aloginform.php" class="nav-link p-0 text-white">Administrative login</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Guidance</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
					</ul>
				</div>

				<div class="col-6 col-md-2 mb-3 text-white">
					<h5>HELP</h5>
					<ul class="nav flex-column text-white">
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Alumini Support</a></li>
						<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Faculty Support</a></li>
						<li class="nav-item mb-2"><a href="../homepage/pp/index1.php" class="nav-link p-0 text-white">Companies</a></li>
						<li class="nav-item mb-2"><a href="../homepage/study/smt.php" class="nav-link p-0 text-white">Training</a></li>
						<li class="nav-item mb-2"><a href="../homepage/jw/feedback.php" class="nav-link p-0 text-white">Feedback</a></li>
					</ul>
				</div>

				<div class="col-6 col-md-2 mb-3 text-white">
					<h5>Contact us</h5>
					<p>SGGS</p>
					<p>vishnupuri, Nanded, India</p>
					<p>83019-79790/221456</p>
					<a href="mailto:hajareamey07@gmail.com">placify@gmail.com</a>

				</div>

				<div class="col-md-5 offset-md-1 mb-3 text-white">
					<form>
						<h5>Subscribe to Pro Placify</h5>
						<p>Get direct contact with Alumini...</p>
						<div class="d-flex flex-column flex-sm-row w-100 gap-2">
							<label for="newsletter1" class="visually-hidden">Email address</label>
							<input id="newsletter1" type="text" class="form-control" placeholder="Email address">
							<button class="btn btn-primary" type="button">Subscribe</button>
						</div>
					</form>
				</div>
			</div>

			<div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top text-white">
				<p>© 2023 Team Placify, Inc. All rights reserved.</p>
				<ul class="list-unstyled d-flex">
					<li class="ms-3"><a class="link-body-emphasis" href="https://www.linkedin.com/">
							<img src="images/linkedin.png" alt="mdo" width="24" height="24" class="rounded-circle">
					</li>
					<li class="ms-3"><a class="link-body-emphasis" href="https://www.twitter.com/">
							<img src="images/x.png" alt="mdo" width="24" height="24" class="rounded-circle">
						</a></li>
					<li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/">
							<img src="images/facebook.webp" alt="mdo" width="24" height="24" class="rounded-circle">
						</a></li>
				</ul>
			</div>
			</footer>
		</div>
		<!-- End of Footer Section -->


		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>





























<!--Footer-->
<!-- <div class="footer">
			<div class="container">
				<div class="col-md-3 ftr_navi ftr">
					<h3>NAVIGATION</h3>
					<ul>
						<li>
							<a href="../../homepage/home7.php">Home</a>
						</li>
						<li>
							<a href="../SProfile/sloginform.php">Student Login</a>
						</li>
						<li>
							<a href="../PProfile/index.php">Placement Login</a>
						</li>
						<li>
							<a href="../HODProfile/index.php">HOD Login</a>
						</li>
						<li>
							<a href="../PriProfile/index.php">Principal Login</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 ftr_navi ftr">
					<h3>MEMBERS</h3>
					<ul>
						<li>
							<a href="#">Feedback</a>
						</li>
						<li>
							<a href="#">Placement Support</a>
						</li>
						<li>
							<a href="#">Faculty Support</a>
						</li>
						<li>
							<a href="#">Registered Companies</a>
						</li>
						<li>
							<a href="#">Training</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 get_in_touch ftr">
					<h3>GET IN TOUCH</h3>
					<p>SGGS, Vishnupuri</p>
					<p>Nanded, India</p>
					<p>08301-979790/223365</p>
					<a href="mailto:hajareamey07@gmail.com">hajareamey07@gmail.com</a>
				</div>
				<div class="col-md-3 ftr-logo">
					<p>Copyright &copy; 2023 TEAM-PLACIFY | Developed by
				</div>
				<div class="clearfix"></div>
				</div>
				
			</div>
	</body>
</html> -->