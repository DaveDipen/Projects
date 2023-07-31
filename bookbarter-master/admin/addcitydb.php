<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
$id=$_GET['id'];
$city_name=$_GET['city_name'];
$isactive=1;
//select qry
$qry1="SELECT * FROM city_table WHERE city_name LIKE '".$city_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{
		header("location:addcity.php?msg=City Already Exixts!");
	}
	else
	{
		$qry="INSERT INTO city_table(city_name,is_active) VALUES('".$city_name."',$isactive)";

		$rs=mysqli_query($conn,$qry);
		header("location:addcity.php");
	}
}
