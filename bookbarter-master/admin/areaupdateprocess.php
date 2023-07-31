<?php
require "dbconnect.php";
session_start();


if(isset($_GET['btn_sb']))
{
$id=$_GET['id'];
$area_name =$_GET['area_name'];
$city_id=$_GET['city_id'];

$qry = "UPDATE area_table SET area_name='".$area_name."' WHERE id='".$id."'";
echo $qry;
$rs = mysqli_query($conn,$qry);
if($rs) {
	
		header("location:managearea.php");

		}
}

?>