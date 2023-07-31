<?php

require "dbconnect.php";
session_start();


$id=$_GET['id'];
$city_name =$_GET['city_name'];
$qry = "UPDATE city_table SET city_name='".$city_name."' WHERE id=$id";
//echo $qry;
$rs = mysqli_query($conn,$qry);
if ($rs) {
	header("location:managecity.php");

		}

?>