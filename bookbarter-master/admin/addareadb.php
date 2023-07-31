<?php  
require 'dbconnect.php';
session_start();


if(isset($_GET['btn_sb']))
{
echo$city_id=$_GET['city_id'];
echo$area_name=$_GET['area_name'];
$isactive=1;
$qry1="SELECT * FROM area_table WHERE area_name LIKE '".$area_name."'";
		$rs1=mysqli_query($conn,$qry1);
		$row=mysqli_num_rows($rs1);
	if($row>0)
	{   $msgEncoded = base64_encode($m);
		header("location:addarea.php?msg=Area Already Exixts!");
	}
	else
	{
		$qry="INSERT INTO area_table(area_name,city_id,is_active) VALUES('".$area_name."','".$city_id."',$isactive)";

		$rs=mysqli_query($conn,$qry);
		header("location:addarea.php");
	}
}
