<?php

require "dbconnect.php";
session_start();


$id=$_GET['id'];
$security_name =$_GET['security_name'];
$qry = "UPDATE security_table SET security_name='".$security_name."' WHERE id=$id";
//echo $qry;
$rs = mysqli_query($conn,$qry);
if ($rs) {
	header("location:managesecurity.php");

		}

?>