<?php
require "dbconnect.php";
session_start();


if(isset($_GET['id']))
{
$id = $_GET['id'];
$status = $_GET['status'];
if($status==1)
{
	$status=0;
}
else
{
	$status=1;
}

$qry = "UPDATE subcat_table SET is_active=$status WHERE id=$id";
$rs = mysqli_query($conn,$qry);
echo $status;
if($rs)
{
	//echo "Updated Successfully";
	header("location:managesubcat.php");
}
}
?>