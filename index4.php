<!DOCTYPE html>
<html>
<head>
	<title>You Login Template</title>
	<!-- Site favicon -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
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
							<li><a class="dropdown-item" href="index.php">Login Style 1</a></li>
							<li><a class="dropdown-item" href="index2.php">Login Style 2</a></li>
							<li><a class="dropdown-item" href="index3.php">Login Style 3</a></li>
							<li><a class="dropdown-item selected" href="index4.php">Login Style 4</a></li>
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
		<section class="cd-section index4 visible">
			<div class="cd-content style4">
				<div class="login-box">
					<div class="login-form-slider">
						<!-- login slide start -->
						<div class="login-slide slide">
							<div class="row no-gutters height-100-percentage">
								<div class="col-md-8 col-sm-12 style4-left">
									<div class="d-flex height-100-percentage padding-40px">
										<div class="align-self-center width-100-percentage">
											<h2>Login</h2>
											<form>
												<div class="form-group">
													<label class="label">Email Address</label>
													<input type="text" class="form-control" placeholder="Enter your email">
												</div>
												<div class="form-group">
													<label class="label">Password</label>
													<input type="password" class="form-control" placeholder="Enter your password">
												</div>
												<div class="forgot-txt">
													<a href="javascript:;" class="forgot-password-click">Forgot Password</a>
												</div>
												<div class="form-group">
													<input type="submit" class="submit" value="Login">
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 style4-right">
									<div class="padding-40px">
										<h4>Don't have an account?</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
										<div class="sign-up-txt">
											<a href="javascript:;" class="sign-up-click">Register Now <i class="ion-arrow-right-c"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- login slide end -->
						<!-- signup slide start -->
						<div class="signup-slide slide">
							<div class="row no-gutters height-100-percentage">
								<div class="col-md-12 col-sm-12 style4-left">
									<div class="d-flex height-100-percentage padding-40px">
										<div class="align-self-center width-100-percentage">
											<h2>Create An Account</h2>
											<form>
												<div class="row">
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label class="label">Name</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label class="label">Email</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label class="label">Password</label>
															<input type="password" class="form-control">
														</div>
													</div>
													<div class="col-md-6 col-sm-12">
														<div class="form-group">
															<label class="label">Confirm Password</label>
															<input type="password" class="form-control">
														</div>
													</div>
												</div>
												<div class="form-group">
													<input type="submit" class="submit" value="Register">
												</div>
												<div class="sign-up-txt">
													if you have an account? <a href="javascript:;" class="login-click">login</a>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- signup slide end -->
						<!-- forgot password slide start -->
						<div class="forgot-password-slide slide">
							<div class="d-flex height-100-percentage style4-left">
								<div class="align-self-center width-100-percentage padding-40px">
									<form>
										<div class="row">
											<div class="col-md-7 col-s-12">
												<label class="label">Enter your email address to reset your password</label>
												<div class="form-group user-name-field">
													<label class="label">Email</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<input type="submit" class="submit" value="Submit">
												</div>
											</div>
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
		</section>
	</main>

	<div id="cd-loading-bar" data-scale="1" class="index"></div>
	<!-- JS File -->
	<script src="js/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/velocity.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>