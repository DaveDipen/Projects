<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
$id=$_GET['id'];
$booktype_name=$_GET['booktype_name'];
$isactive=1;
$qry1="SELECT * FROM booktype_table WHERE booktype_name LIKE '".$booktype_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{
		header("location:addbooktype.php?msg=Book Type Already Exixts!");
	}
	else
	{
		$qry="INSERT INTO booktype_table(booktype_name,is_active) VALUES('".$booktype_name."',$isactive)";

		$rs=mysqli_query($conn,$qry);
		header("location:addbooktype.php");
	}
}
