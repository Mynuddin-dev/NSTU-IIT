<?php
/*this deletes allow user to delete a booking and get refund */
require_once"admin/dbconfig.php";
$n=iud("delete from booking where id='".$_REQUEST['id']."'");
if($n==1)
{
	echo"<script>alert('Your amount will we refund.');
		 window.location='bk.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
		 window.location='bk.php';
		 </script>";
}


?>