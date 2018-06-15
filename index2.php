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
							<li><a class="dropdown-item" href="index.php">Login Style 1</a></li>
							<li><a class="dropdown-item selected" href="index2.php">Login Style 2</a></li>
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
		<section class="cd-section index2 visible">
			<div class="cd-content style2">
				<div class="login-box">
					<div class="login-form-slider">
						<!-- login slide start -->
						<div class="login-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3>Sign In</h3>
									<form>
										<div class="form-group user-name-field">
											<input type="text" class="form-control" placeholder="User name">
											<div class="field-icon"><i class="ion-person"></i></div>
										</div>
										<div class="form-group margin-bottom-30px forgot-password-field">
											<input type="password" class="form-control" placeholder="Password">
											<div class="field-icon"><i class="ion-locked"></i></div>
											<a href="javascript:;" class="forgot-password-click">Forgot?</a>
										</div>
										<div class="form-group sign-in-btn">
											<input type="submit" class="submit" value="Sign In">
										</div>
									</form>
									<div class="sign-up-txt">
										Don't have an account? <a href="javascript:;" class="sign-up-click">Signup</a>
									</div>
								</div>
							</div>
						</div>
						<!-- login slide end -->
						<!-- signup slide start -->
						<div class="signup-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3>Sign Up</h3>
									<form>
										<div class="form-group user-name-field">
											<input type="text" class="form-control" placeholder="Name">
											<div class="field-icon"><i class="ion-person"></i></div>
										</div>
										<div class="form-group user-name-field">
											<input type="text" class="form-control" placeholder="Email">
											<div class="field-icon"><i class="ion-ios-email"></i></div>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password">
											<div class="field-icon"><i class="ion-locked"></i></div>
										</div>
										<div class="form-group margin-bottom-30px">
											<input type="password" class="form-control" placeholder="Confirm Password">
											<div class="field-icon"><i class="ion-locked"></i></div>
										</div>
										<div class="form-group sign-in-btn">
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
						<div class="forgot-password-slide slide">
							<div class="d-flex height-100-percentage">
								<div class="align-self-center width-100-percentage">
									<h3>Forgot Password</h3>
									<form>
										<label class="label">Enter your email address to reset your password</label>
										<div class="form-group user-name-field">
											<input type="text" class="form-control" placeholder="Email">
											<div class="field-icon"><i class="ion-ios-email"></i></div>
										</div>
										<div class="form-group sign-in-btn">
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