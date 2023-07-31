<?php

require "dbconnect.php";
session_start();


$id=$_GET['id'];
$booktype_name =$_GET['booktype_name'];
$qry = "UPDATE booktype_table SET booktype_name='".$booktype_name."' WHERE id=$id";
//echo $qry;
$rs = mysqli_query($conn,$qry);
if ($rs) {
	header("location:managebooktype.php");

		}

?>