<?php
require_once"dbconfig.php";
//require_once"validation.php";
##################################################

###########################################################
	if(isset($_REQUEST['login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	 $query="select * from admin where email='$email' and password='$password'";
	
	
	
	if($valid)
	{
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		$_SESSION['adminid']=$id;
		$_SESSION['name']=$name;
		//$_SESSION['image']=$image;
		$_SESSION['adminlogin']="yes";
		
		echo"<script>alert('Login success');
		 window.location='index.php';
		 </script>";
	}
	else
	{
		echo"email or password is incorrect";
	}
	}
		
	}

#############################################
//if(isset($_REQUEST['lab']))
//{
//	extract($_REQUEST);
//	 $t="INSERT INTO `lab`( `lab_name`) VALUES ('$lab_name')";
//	 $n=iud($t);
//	if($n==1)
//	{
//		echo"<script>alert('Added');
//		 window.location='view_lab.php';
//		 </script>";
//	}else
//	{
//		echo"<script>alert('Something Wrong');
//		 window.location='view_lab.php';
//		 </script>";
//	}
//}
	
//#############################################
//if(@$_REQUEST['deletelab']=='yes')
//{
//$id=$_REQUEST['id'];
//$n=iud("delete from  `lab`  WHERE id='$id'");
//if($n==1)
//{
//	echo"<script>alert('Delete Successful');
//		 window.location='view_lab.php';
//		 </script>";
//}
//else
//{
//	echo"<script>alert('Something Wrong');
//		 window.location='view_lab.php';
//		 </script>";
//}
//}	
//#############################################
//if(isset($_REQUEST['updatelab']))
//{
//extract($_REQUEST);
//$n=iud("UPDATE `lab` SET `lab_name`='$lab_name' WHERE id='$id'");
//if($n==1)
//{
//	echo"<script>alert('Update Successful');
//		 window.location='view_lab.php';
//		 </script>";
//}
//else
//{
//	echo"<script>alert('Something Wrong');
//		 window.location='view_lab.php';
//		 </script>";
//}
//}	
//
//###########################################################################
//if(isset($_REQUEST['saveadver']))
//{
//	extract($_REQUEST);
//		
//		$error=$_FILES["myfile"]["error"];
//
//$name=$_FILES["myfile"]["name"];
//$type=$_FILES["myfile"]["type"];
//$size=$_FILES["myfile"]["size"];
//$tmp_name=$_FILES["myfile"]["tmp_name"];
//
//	move_uploaded_file($tmp_name,"images/$name");
//	
//	 $t="INSERT INTO `advertisement`( `title`, `description`,`image`,`side`) VALUES ('$title','$description','$name','$side')";
//	 $n=iud($t);
//	if($n==1)
//	{
//		echo"<script>alert('Added');
//		 window.location='view_advertisement.php';
//		 </script>";
//	}else
//	{
//		echo"<script>alert('Something Wrong');
//		 window.location='view_advertisement.php';
//		 </script>";
//	}
//}
//###########################################################################
//if(@$_REQUEST['deleteadver']=='yes')
//{
//$id=$_REQUEST['id'];
//$n=iud("Delete from  `advertisement`  WHERE ad_id='$id'");
//if($n==1)
//{
//	echo"<script>alert('Delete Successful');
//		 window.location='view_advertisement.php';
//		 </script>";
//}
//else
//{
//	echo"<script>alert('Something Wrong');
//		 window.location='view_advertisement.php';
//		 </script>";
//}
//}	
//###########################################################################
//if(isset($_REQUEST['updateadver']))
//{
//extract($_REQUEST);
//	$error=$_FILES["myfile"]["error"];
//
//$name=$_FILES["myfile"]["name"];
//$type=$_FILES["myfile"]["type"];
//$size=$_FILES["myfile"]["size"];
//$tmp_name=$_FILES["myfile"]["tmp_name"];
//
//	move_uploaded_file($tmp_name,"images/$name");
//	
// $ut="UPDATE `advertisement` SET `title`='$title', `description`='$description',`image`='$name' WHERE ad_id='$id'";
//
//$n=iud($ut);
//if($n==1)
//{
//	echo"<script>alert('Update Successful');
//		 window.location='view_advertisement.php';
//		 </script>";
//}
//else
//{
//	echo"<script>alert('Something Wrong');
//		 window.location='view_advertisement.php';
//		 </script>";
//}
//}	
//###########################################################################
//if(isset($_REQUEST['updatenews']))
//{
//	extract($_REQUEST);
//	 echo $t1="UPDATE `newsevent` SET `type`='$type',`title`='$title', `description`='$description' WHERE id='$id'";
//	
//	 
//	 $n=iud($t1);
//	if($n==1)
//	{
//		echo"<script>alert('Update_success');
//		 window.location='view_news.php';
//		 </script>";
//	}else
//	{
//		echo"<script>alert('Something Wrong');
//		 window.location='view_news.php';
//		 </script>";
//	}
//}
//###########################################################################
//if(isset($_REQUEST['savenews']))
//{
//	extract($_REQUEST);
//	 echo $t1="INSERT INTO `newsevent`( `type`, `title`, `description` ) VALUES  ('$type','$title','$description')";
//	
//	 
//	 $n=iud($t1);
//	if($n==1)
//	{
//		echo"<script>alert('Added');
//		 window.location='view_news.php';
//		 </script>";
//	}else
//	{
//		echo"<script>alert('Something Wrong');
//		 window.location='view_news.php';
//		 </script>";
//	}
//}
//###########################################################################
//if(@$_REQUEST['deletenews']=='yes')
//{
//$id=$_REQUEST['id'];
//$n=iud("Delete from `newsevent`  WHERE id='$id'");
//if($n==1)
//{
//	echo"<script>alert('Delete Successful');
//		 window.location='view_news.php';
//		 </script>";
//}
//else
//{
//	echo"<script>alert('Something Wrong');
//		 window.location='view_news.php';
//		 </script>";
//}
//}	
//##################_lab\\\#########################################################
//if(isset($_REQUEST['save_lab']))
//	{
//		
//		extract($_REQUEST);
//		
//		/*$error=$_FILES["myfile"]["error"];
//
//$name=$_FILES["myfile"]["name"];
//$type=$_FILES["myfile"]["type"];
//$size=$_FILES["myfile"]["size"];
//$tmp_name=$_FILES["myfile"]["tmp_name"];
//
//	move_uploaded_file($tmp_name,"images/$name");*/
//	
//		echo $query="INSERT INTO `lab_instrument`(`lab_id`, `Instrument`,`quantity`, `status`) VALUES  ('$lab_id', '$instrument','$quantity','$status')";
//		
//	$n=iud($query);
//	 if($n==1)
//	 {
//		
//		echo"<script>alert(' uploaded successfully');
//		 window.location='view_instrument.php';
//		 </script>";
//		
//		 }
//		 else
//		 {
//			 echo"<script>alert(' Something Wrong');
//		 window.location='view_instrument.php';
//		 </script>";
//		 }
//	
//	}
//	
//##########################################################################
//if(isset($_REQUEST['edit_lab']))
//	{
//		
//		extract($_REQUEST);
//		
//		/*$error=$_FILES["myfile"]["error"];
//
//$name=$_FILES["myfile"]["name"];
//$type=$_FILES["myfile"]["type"];
//$size=$_FILES["myfile"]["size"];
//$tmp_name=$_FILES["myfile"]["tmp_name"];
//
//	move_uploaded_file($tmp_name,"images/$name");*/
//	
//		echo $query="update  `lab_instrument` set `lab_id`='$lab_id', `Instrument`='$instrument',`quantity`='$quantity', `status`= '$status' where id='$id'";
//		
//	$n=iud($query);
//	 if($n==1)
//	 {
//		
//		echo"<script>alert(' uploaded successfully');
//		 window.location='view_instrument.php';
//		 </script>";
//		
//		 }
//		 else
//		 {
//			 echo"<script>alert(' Something Wrong');
//		 window.location='view_instrument.php';
//		 </script>";
//		 }
//	
//	}
//	

##########################################################################

//	if(@$_REQUEST['deletepannel']=='yes')
//{
//$id=$_REQUEST['id'];
//$n=iud("Delete from room_detail where id='$id'");
//if($n==1)
//{
//	echo"<script>alert('Delete Successful');
//		 window.location='view_room.php';
//		 </script>";
//}
//else
//{
//	echo"<script>alert('Something Wrong');
//		 window.location='view_room.php';
//		 </script>";
//}
//}
//	
//	
//##########################################################################
//if(isset($_REQUEST['update_service_pannel']))
//	{
//		
//		extract($_REQUEST);
//		
//		$error=$_FILES["myfile"]["error"];
//
//$name=$_FILES["myfile"]["name"];
//$type=$_FILES["myfile"]["type"];
//$size=$_FILES["myfile"]["size"];
//$tmp_name=$_FILES["myfile"]["tmp_name"];
//
//	move_uploaded_file($tmp_name,"images/$name");
//	
//		 $query="UPDATE `servicepannel` SET  `service_id`='$service', `title`='$title', `image`='$name', `description`='$description'  where id='$id'";
//	$n=iud($query);
//	 if($n==1)
//	 {
//		
//		echo"<script>alert(' uploaded successfully');
//		 window.location='view_service_pannel.php';
//		 </script>";
//		
//		 }
//		 else
//		 {
//			 echo"<script>alert(' Something Wrong');
//		 window.location='view_service_pannel.php';
//		 </script>";
//		 }
//	
//	}
//	
//##########################################################################
//if(isset($_REQUEST['register']))
//	{
//		
//		extract($_REQUEST);
//		
//		//$error=$_FILES["myfile"]["error"];
//
////$name=$_FILES["myfile"]["name"];
////$type=$_FILES["myfile"]["type"];
////$size=$_FILES["myfile"]["size"];
////$tmp_name=$_FILES["myfile"]["tmp_name"];
//
//	//move_uploaded_file($tmp_name,"images/$name");
//	
//		 $query="INSERT INTO `admin`( `name`, `email`, `mobile`, `password`) VALUES('$name','$email','$mobile','$password')";
//	$n=iud($query);
//	 if($n==1)
//	 {
//		
//		echo"<script>alert(' registration successfully');
//		 window.location='login.php';
//		 </script>";
//		
//		 }
//		 else
//		 {
//			 echo"<script>alert(' Something Wrong');
//		 window.location='login.php';
//		 </script>";
//		 }
//	
//	}
##########################################################################
//if(@$_REQUEST['deleteproduct']=='yes')
//{
//$id=$_REQUEST['id'];
//$n=iud("UPDATE `product` SET `status`='0' WHERE product_id='$id'");
//if($n==1)
//{
//	echo"<script>alert('Delete Successful');
//		 window.location='view_product.php';
//		 </script>";
//}
//else
//{
//	echo"<script>alert('Something Wrong');
//		 window.location='view_product.php';
//		 </script>";
//}
//}
//##########################################################################
//	if(isset($_REQUEST['update_product']))
//	{
//		
//		extract($_REQUEST);
//		
//		$error=$_FILES["myfile"]["error"];
//
//$name=$_FILES["myfile"]["name"];
//$type=$_FILES["myfile"]["type"];
//$size=$_FILES["myfile"]["size"];
//$tmp_name=$_FILES["myfile"]["tmp_name"];
//
//	move_uploaded_file($tmp_name,"images/$name");
//	
//		 $query="UPDATE  `product` SET `title`='$title', `image`='$name', `description`='$description', `market_price`='$market_price', `organic_price`='$organic_price' where product_id='$id'";
//	      $n=iud($query);
//	 if($n==1)
//	 {
//		
//		echo"<script>alert(' Updated successfully');
//		 window.location='view_product.php';
//		 </script>";
//		
//		 }
//		 else
//		 {
//			 echo"<script>alert(' Something Wrong');
//		 window.location='view_product.php';
//		 </script>";
//		 }
//	
//	}
	   
	
	
	










?>