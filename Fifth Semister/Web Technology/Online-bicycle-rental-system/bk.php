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

		<title>View Booking</title>

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
		<a href="index.php" class="logo float-left tran4s"><img  width="100" height="100" src="images/logo/bicyclelogo1.png" alt="NSTU-bicycle logo"></a>					<!-- ========================= Theme Feature Page Menu ======================= -->

					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <?php include"nav.php";?><!-- /.navbar-collapse -->
					</nav> <!-- /.theme-feature-menu -->
				</div>
			</header> <!-- /.theme-main-header -->


			<!--
			=====================================================
				Theme Inner page Banner
			=====================================================

			=====================================================

			=====================================================
			-->
			</br>
		</br>





		<div id="blog-section">
				<div class="container">
					<div class="theme-title">
						<h2>View Bookings</h2>

					</div> <!-- /.theme-title -->

					<div class="clear-fix">
					</br>
					<div class="row">
					<table class="table table-dark">
					<tr style="font-weight:bold">
		    <td class="text-primary">S. No.</td>
                    <td>Name</td>
                    <td>mobile</td>
                    <td>Email</td>
                    <td>Date</td>
                    <td>Hour</td>
                    <td>Bicycle name</td>
                    <td>Total Price</td>
                    <td>Image</td>
                  <!--  <td>Location</td>-->
                    <td class="text-danger">Cancel</td>
					</tr>
					<?php
				/*The sql query reads details that are in the booking table and return result set for the row. */
					$n=1;

				$result=select("SELECT * FROM `booking` INNER JOIN bicycle_for_rent on booking.bicycleid=bicycle_for_rent.id
				where booking.userid='".$_SESSION['login']."' order by booking.id desc");
				while($r=mysqli_fetch_array($result))
				{
					extract($r);
				?>
                  <tr>
                    <td class="text-primary"><?=$n;?></td>
                    <td><?=ucwords($r[1])?></td>
                    <td><?=ucwords($mobile)?></td>
                    <td><?=ucwords($email)?></td>
                    <td><?=$date?></td>
                    <td><?=$hour?></td>
                    <td><?=$name?></td>
                    <td><?=$total_price?></td>
                    <td><img src="admin/images/<?=$image?>" style="height:50px"></td>
		   <!-- <td> <iframe src="<?=$map_link?>" width="130" height="80" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>-->
                     <td><a href="delete.php?id=<?=$r[0]?>"><button class="btn btn-danger">Cancel Booking</button></a></td>

                  </tr>
				  <?php
				  /*  */
				  /*  */
				  $n++;
				}
				  ?>
					</table>
						</div>

					<?php
					/* this checks if the search buttton is pressed and returns the result for the name that waas searched*/
					if(isset($_REQUEST['search']))
					{
						extract($_REQUEST);

					?>
					<?php
					 $q="SELECT * FROM `car_for_rent` WHERE car_name like '%$name%' order by id desc";
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
<h6><a href="" class="tran3s"><?=$bicycle_name?></a></h6>

<p>Price- <?=$price?> Eur Per Hour </br><a href="view.php?id=<?=$id?>" class="tran3s"><button class="btn btn-info">View Detail</button></a></p>
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

			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>


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
