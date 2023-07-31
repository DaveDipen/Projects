<?php

require "dbconnect.php";
session_start();


$id=$_GET['id'];
$cat_name =$_GET['cat_name'];
$qry = "UPDATE cat_table SET cat_name='".$cat_name."' WHERE id=$id";
//echo $qry;
$rs = mysqli_query($conn,$qry);
if ($rs) {
	header("location:managecat.php");

		}

?>