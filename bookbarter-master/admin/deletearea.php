<?php

require "dbconnect.php";
session_start();


$id = $_GET['id'];

$qry = "UPDATE area_table SET is_active=2 WHERE id=$id";

$rs = mysqli_query($conn,$qry);

if($rs)
{
	//echo "Updated Successfully";
	header("location:managearea.php");
}


?>