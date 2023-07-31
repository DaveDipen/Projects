<?php 
require "dbconnect.php";
session_start();


if(isset($_GET['uid']))
{
	$uid=$_GET['uid'];
	$status=$_GET['status'];
	if($status==1)
	{
		$status=0;
	}
	else
	{
		$status=1;
	}

	$qry="UPDATE user_register SET is_active=$status WHERE uid=$uid";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:manageuser.php");
	}
}

?>