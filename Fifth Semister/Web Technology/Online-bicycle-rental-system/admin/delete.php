<?php
/* The establish the delete records from db connection for the application*/
require_once"dbconfig.php";
$n=iud("delete from bicycle_for_rent where id='".$_REQUEST['id']."'");
if($n==1)
{
	echo"<script>
		 window.location='view_bicycle.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
		 window.location='view_bicycle.php';
		 </script>";
}


?>