<?php

session_start();
require "dbconnect.php";
$uname1=$_POST['uname'];
$pass1=$_POST['pass'];
$count=0;
$qry="SELECT * FROM `adminreg_table` WHERE uname='".$uname1."' and password='".$pass1."'";
$qry1=mysqli_query($conn,$qry);

while($row=mysqli_fetch_array($qry1))
	{
		
		$uname=$row['uname'];
		$pass=$row['password'];

		if ($uname1==$uname && $pass1==$pass) 
		{
			$count=1;
			$uname=$row['uname'];
			$id=$row['id'];

		
		}
	}
if ($count==1)
 	{
	
		$_SESSION['uname']=$uname;
		$_SESSION['id']=$id;
		echo $_SESSION['uname'];
		header("location:dashboard.php");
	}
else
	{

		
		header("location:index.php");
		

	}

?>
