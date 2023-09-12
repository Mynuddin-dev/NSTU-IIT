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

		<title>Book</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/bicycleicon.png">
             <script src='https://kit.fontawesome.com/a076d05399.js'></script>

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
						<h2>Book</h2>
</div> <!-- /.theme-title -->

					<div class="clear-fix">

						<div id="contact-section">
				<div class="container">
					 <!-- /.contact-address-content -->

					 <!-- Contact Form -->
					<div class="send-message">
						<h2></h2>

<?php
/*this request from the user input by id in the db */
$tt=select("select * from bicycle_for_rent where id='".$_REQUEST['id']."'");
$po=mysqli_fetch_array($tt);

?>
<!--<iframe src="<?=$po['map_link']?>" width="1140" height="220" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
						<form    method="post">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single-input">
										<input type="text" placeholder="Name*" name="name">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single-input">
										<input type="phone" placeholder="Mobile*" name="mobile">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-input">
										<input type="email" placeholder="Your Email*" name="email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single-input"> Date
										<input type="date" placeholder="First Name*" name="date">
									</div>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-input">Hour
										<input type="text" id="hour" placeholder="Hours" name="hour">
									</div> <!-- /.single-input -->
								</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-input">Price Per Hour
										<input type="text" id="price" value="<?=$_REQUEST['price']?>" readonly placeholder="Hours" name="price">
									</div> <!-- /.single-input -->
								</div>
							</div> </br>
							<div class="row">



							<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
									<div class="single-input">Total Price
										<input type="text" value="" id="total" readonly placeholder="Hours" name="total_price">
									</div> <!-- /.single-input -->
								</div>
							</div> </br>
							 <!-- /.single-input -->


							<button  class="tran3s p-color-bg" name="book">Book</button>
						</form>

<?php
/*This get the information from the db by index into the system by user i.e a boolean value is reurned */
if(isset($_REQUEST['book']))
{
	extract($_REQUEST);
	if($rider==1)
	{

	}
	else
	{
		$rider=0;
	}
	$bicycleid= $_REQUEST['id'];
	$userid= $_SESSION['login'];
	$i=iud("INSERT INTO `booking`( `name`, `mobile`, `email`, `date`, `hour`, `price`, `rider`, `total_price`, `bicycleid`,`userid`) VALUES ('$name','$mobile','$email','$date','$hour','$price','$rider','$total_price','$bicycleid','$userid')");
	if($i==1)
	{
		$_SESSION['price']=$total_price;
		echo"<script>
		window.location='payment.php';
		</script>";
	}
	else
	{
		echo"<script>alert('Something Went Wrong Please Try Again Later');
		window.location='index.php';
		</script>";
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
		<script type="text/javascript" src="js/jquery.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->


		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
   /*it check true for the document page to load next in jquery
     * A page can't be manipulated safely until the document is "ready." jQuery detects this state of readiness for you.
     * Code included inside $( document ).ready() will only run once the page Document Object Model (DOM) is ready for JavaScript code to execute.
     * Code included inside $( window ).on( "load", function() { ... }) will run once the entire page (images or iframes), not just the DOM, is ready
     * it confirms the readiness of *
     */
$(document).ready(function() {

		function test(){
		var hour=$("#hour").val();
        var price=$("#price").val();
		var t=hour*price;

		$("#total").attr('value',t);

		}

		$("#hour").keyup(function(){
			test();
		});
		$('input[name="rider"]').click(function(){
	       test();
	     });

});
</script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
