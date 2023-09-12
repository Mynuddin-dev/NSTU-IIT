<?php
require_once"admin/dbconfig.php";
if(isset($_SESSION['login']))
{

}
else
{
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>NSTU-Bicycle Rental</title>

		<!-- Favicon -->
			<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/bicycleicon.png">


		<!-- Main style sheet -->
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
			<header class="theme-main-header" style="background-color:#000000">
				<div class="container-fluid" >
					<a href="index.php" class="logo float-left tran4s"><img src="images/logo/logo.gif" alt="NSTU-bicycle logo"></a>

					<!-- ========================= Theme Feature Page Menu ======================= -->
					   <?php include"nav.php";?><!-- /.navbar-collapse -->
					<!-- /.theme-feature-menu -->
				</div>
			</header> <!-- /.theme-main-header -->
			<!--

			-->
			</br>
		</br>

		<div id="blog-section">
				<div class="container">
					<div class="theme-title">
						<h2> LATEST </h2>
						<p>You are welcome to our NSTU-Bicycle Rental system  it is our delight to have you. you can easily book for one of our bicycle
						    by clicking on the bicycle image on the screen which would take you to our booking page.Then you can proceed to book.
						Thank you for choosing us over the numerous others.. remember NSTU-Bicycle Rental is your best bet. user satisfaction is our priority.</p>
					</div> <!-- /.theme-title -->

					<div class="clear-fix ">
					<?php
					/* select all the details from the db in the bicycle_for_rent table, reads and return the details to the index page*/
					$t=select("SELECT * FROM `bicycle_for_rent` ");
					while($y=mysqli_fetch_array($t))
					{extract($y);

					?>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<d iv class="single-news-item">
								<div class="img"><img src="admin/images/<?=$image?>"  style="height:200px;weight:250px" alt="Image">
									<a href="view.php?id=<?=$id?>" class="opacity tran4s"><i class="fa fa-link" aria-hidden="true"></i></a>
								</div> <!-- /.img -->

								<div class="post">
<h6><a href="blog-details.php" class="tran3s"><?=ucwords($name)?></a></h6>

<p>Price- Tk <?=$price?>  Per Hour </br><a href="view.php?id=<?=$id?>" class="tran3s"><button class="btn btn-info">View Detail</button></a></p>
								</div> <!-- /.post -->
							</div> <!-- /.single-news-item -->
						</div> <!-- /.col- -->
<?php
					}
?><!--
						 -->
			</div>

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
