<?php

require "dbconnect.php";
session_start();


$id=$_GET['id'];
$condition_name =$_GET['condition_name'];
$qry = "UPDATE condition_table SET condition_name='".$condition_name."' WHERE id=$id";
//echo $qry;
$rs = mysqli_query($conn,$qry);
if ($rs) {
	header("location:managecondition.php");

		}

?>