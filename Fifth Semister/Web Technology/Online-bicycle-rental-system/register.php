<?php
require_once"admin/dbconfig.php";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>register</title>

		<!-- Favicon -->
			<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/bicycleicon.png">
             <script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		<div class="main-page-wrapper">

			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<header class="theme-main-header" style="background-color:#000000">
				<div class="container-fluid" >
		<a href="index.php" class="logo float-left tran4s"><img  width="100" height="100" src="images/logo/bicyclelogo1.png" alt="NSTU-bicycle logo"></a>
					<!-- ========================= Theme Feature Page Menu ======================= -->
					   <?php include"nav.php";?><!-- /.navbar-collapse -->
					 <!-- /.theme-feature-menu -->
				</div>
			</header> <!-- /.theme-main-header -->


			<!--
			=====================================================
				Theme Inner page Banner
			=====================================================
			-->

			<!--
			=====================================================
				Blog Page Details
			=====================================================
			-->
			</br>
		</br>
	


		<div id="blog-section">
				<div class="container">
					<div class="theme-title">
						<h2 class="text-success">Register</h2>
</div> <!-- /.theme-title -->

					<div class="clear-fix">

						<div id="contact-section">
				<div class="container">
					 <!-- /.contact-address-content -->



					<!-- Contact Form -->
					<div class="send-message">
						<h2></h2>
<div class="col-lg-4"></div>
<div class="col-lg-4 border mx-auto border-success">
						<form    method="post" >
							    <div class="row">
							    <div class="single-input">
								<input type="text" placeholder="Name" name="name">
								</div>
								</div>
								<div class="row">
							    <div class="single-input">
								<input type="text" placeholder="Email" name="email">
								</div>
								</div>
								<div class="row">
							    <div class="single-input">
								<input type="text" placeholder="Mobile" name="mobile">
								</div>
								</div>

								<div class="row">
							    <div class="single-input">
								<input type="password" placeholder="Password" name="password">
								</div>
							    </div>
							</br>

							 <!-- /.single-input -->


							<button  class="tran3s p-color-bg mx-auto btn-success" name="register">Register</button>
						</form>

					already have an account?	<a href="login.php"> Login</a>

						</div>

<?php
if(isset($_REQUEST['register']))
{
 /* it inserts info into register when button is clicked */
	extract($_REQUEST);
	$p=select("select * from register where email='".$email."'");
	$l=mysqli_num_rows($p);
	if($l>=1)
	{
		echo"<script>alert('Email already exist..');
		window.location='register.php';
		</script>";
	}
	else
	{
	$i=iud("INSERT INTO `register`( `name`,`email`, `mobile`, `password`) VALUES
	('$name','$email','$mobile','$password')");
	if($i==1)
	{
		//$_SESSION['price']=$total_price;
		echo"<script>
		window.location='login.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Something Went Wrong Please Try Again Later');
		window.location='register.php';
		</script>";
	}
	}
}
?>
						<!-- Contact Form Validation Markup -->
						<!-- Contact alert -->
						<div class="alert-wrapper" id="alert-success">
							<div id="success">
								<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
								<div class="wrapper">
					               	<p>Your message was sent successfully.</p>
					             </div>
					        </div>
					    </div> <!-- End of .alert_wrapper -->
					    <div class="alert-wrapper" id="alert-error">
					        <div id="error">
					           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
					           	<div class="wrapper">
					               	<p>Sorry!Something Went Wrong.</p>
					            </div>
					        </div>
					    </div> <!-- End of .alert_wrapper -->
					</div> <!-- /.send-message -->
				</div> <!-- /.container -->
			</div>  <!-- /.col- -->
<!--
			-->
			</div>
			</div>


			<!--
			=====================================================
				Footer
			=====================================================
			-->
			 <?php include"footer.php";?>




			<!-- =============================================
				Loading Transition
			============================================== -->




	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>




		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->

		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
		<!-- Calendar js -->
		<script type="text/javascript" src="vendor/monthly-master/js/monthly.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
