<?php

require "dbconnect.php";
session_start();


$uid = $_GET['uid'];

$qry = "UPDATE user_register SET is_active=2 WHERE uid=$uid";
echo $qry;
$rs = mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated Successfully";
	header("location:manageuser.php");
}


?>