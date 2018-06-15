<!DOCTYPE html>
<html>
<head>
	<title>You Login Template</title>
	<!-- Site favicon -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700" rel="stylesheet">
	<!-- Icon Font -->
	<link rel="stylesheet" href="fonts/ionicons/css/ionicons.css">
	<!-- Text Font -->
	<link rel="stylesheet" href="fonts/font.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Normal style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Normal media CSS -->
	<link rel="stylesheet" href="css/media.css">
</head>
<body>

	<!-- Header start -->
	<div class="header-wrap">
		<div class="clearfix">
			<div class="logo">
				<a href="index.php"><img src="images/logo.svg" alt=""></a>
			</div>
			<div class="menu">
				<div class="dropdown">
					<a class="dropdown-toggle hamburgler" href="#" role="button" data-toggle="dropdown">
						<span class="menu-icon">
							<div class="bun top"></div>
							<div class="meat"></div>
							<div class="bun bottom"></div>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<ul>
							<li><a class="dropdown-item selected" href="index.php">Login Style 1</a></li>
							<li><a class="dropdown-item" href="index2.php">Login Style 2</a></li>
							<li><a class="dropdown-item" href="index3.php">Login Style 3</a></li>
							<li><a class="dropdown-item" href="index4.php">Login Style 4</a></li>
							<li><a class="dropdown-item" href="index5.php">Login Style 5</a></li>
							<li><a class="dropdown-item" href="index6.php">Login Style 6</a></li>
							<li><a class="dropdown-item" href="index7.php">Login Style 7</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header end -->
	<main class="cd-main">
		<section class="cd-section index visible ">
			<div class="cd-content style1">
				<div class="login-box d-md-flex align-items-center">
					<h1 class="title">Good Morning</h1>
					<h3 class="subtitle">Have a great journey ahead!</h3>
					<div class="login-form-box">
						<div class="login-form-slider">
							<!-- login slide start -->
							<div class="login-slide slide login-style1">
								<form>
									<div class="form-group">
										<label class="label">User name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="label">Password</label>
										<input type="password" class="form-control" value="1234567891">
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">Remember me</label>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" class="submit" value="Sign In">
									</div>
								</form>
								<div class="sign-up-txt">
									Don't have an account? <a href="javascript:;" class="sign-up-click">Sign Up</a>
								</div>
								<div class="forgot-txt">
									<a href="javascript:;" class="forgot-password-click">Forgot Password</a>
								</div>
								<div class="login-with">
									<h3>Login with social</h3>
									<ul class="social-login-btn">
										<li class="facebook-btn"><a href="#"><i class="ion-social-facebook"></i></a></li>
										<li class="twitter-btn"><a href="#"><i class="ion-social-twitter"></i></a></li>
										<li class="google-btn"><a href="#"><img src="images/google.svg"></a></li>
									</ul>
								</div>
							</div>
							<!-- login slide end -->
							<!-- signup slide start -->
							<div class="signup-slide slide login-style1">
								<div class="d-flex height-100-percentage">
									<div class="align-self-center width-100-percentage">
										<form>
											<div class="form-group">
												<label class="label">Name</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label class="label">Email</label>
												<input type="email" class="form-control">
											</div>
											<div class="form-group">
												<label class="label">Password</label>
												<input type="password" class="form-control">
											</div>
											<div class="form-group">
												<label class="label">Confirm Password</label>
												<input type="password" class="form-control">
											</div>
											<div class="form-group padding-top-15px">
												<input type="submit" class="submit" value="Sign Up">
											</div>
										</form>
										<div class="sign-up-txt">
											if you have an account? <a href="javascript:;" class="login-click">login</a>
										</div>
									</div>
								</div>
							</div>
							<!-- signup slide end -->
							<!-- forgot password slide start -->
							<div class="forgot-password-slide slide login-style1">
								<div class="d-flex height-100-percentage">
									<div class="align-self-center width-100-percentage">
										<form>
											<div class="form-group">
												<label class="label">Enter your email address to reset your password</label>
												<input type="email" class="form-control">
											</div>
											<div class="form-group">
												<input type="submit" class="submit" value="Submit">
											</div>
										</form>
										<div class="sign-up-txt">
											if you remember your password? <a href="javascript:;" class="login-click">login</a>
										</div>
									</div>
								</div>
							</div>
							<!-- forgot password slide end -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<div id="cd-loading-bar" data-scale="1"></div>
	<!-- JS File -->
	<script src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/velocity.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>