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

		<title>Search</title>

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



			<!--
			=============================================
				Theme Header
			==============================================
			-->
			<header class="theme-main-header" style="background-color:#000000">
				<div class="container-fluid" >
		<a href="index.php" class="logo float-left tran4s"><img  width="100" height="100" src="images/logo/bicyclelogo1.png" alt="NSTU-bicycle logo"></a>
					<!-- ========================= Theme Feature Page Menu ======================= -->
					   <?php include"nav.php";?>
				</div>
			</header> 
			</br>
		</br>
	




		<div id="blog-section">
				<div class="container">
					<div class="theme-title">
						<h2>Search</h2>
					</div> <!-- /.theme-title -->



					<div class="clear-fix">
					</br>
					<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<form class="form-inline input-group" method="post">
					<input type="text" class="form-control mr-sm-2" name="name" placeholder="Bicycle Name">
					<input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Search" name="search">

					</form>
					</div>
						</div>

					<?php
					if(isset($_REQUEST['search']))
					{
						extract($_REQUEST);


					?>
					<?php
					 $q="SELECT * FROM `bicycle_for_rent` WHERE name like '%$name%' order by id desc";
					$t=select($q);
					while($y=mysqli_fetch_array($t))
					{extract($y);

					?>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="single-news-item">
								<div class="img"><img src="admin/images/<?=$image?>"  style="height:200px;weight:250px" alt="Image">
									<a href="view.php?id=<?=$id?>" class="opacity tran4s"><i class="fa fa-link" aria-hidden="true"></i></a>
								</div> <!-- /.img -->

								<div class="post">
<h6><a href="blog-details.php" class="tran3s"><?=$name?></a></h6>

<p>Price- € <?=$price?> Per Hour </br><a href="view.php?id=<?=$id?>" class="tran3s"><button class="btn btn-info">View Detail</button></a></p>
								</div> <!-- /.post -->
							</div> <!-- /.single-news-item -->
						</div> <!-- /.col- -->
<?php
					}
					}
?><!--
					 -->
			</div>
			</div>


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
