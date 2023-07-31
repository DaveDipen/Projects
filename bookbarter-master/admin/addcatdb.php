<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
$id=$_GET['id'];
$cat_name=$_GET['cat_name'];
$isactive=1;
$qry1="SELECT * FROM cat_table WHERE cat_name LIKE '".$cat_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{
		header("location:addcat.php?msg=Category Already Exixts!");
	}
	else
	{
		$qry="INSERT INTO cat_table(cat_name,is_active) VALUES('".$cat_name."',$isactive)";

		$rs=mysqli_query($conn,$qry);
		header("location:addcat.php");
	}
}
