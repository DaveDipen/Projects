<?php

session_start();
require "dbconnect.php";
$email1=$_POST['email'];
$pass1=$_POST['pass'];
$count=0;
$qry="SELECT * FROM `adminreg_table` WHERE email='".$email1."' and password='".$pass1."'"  ;
$qry1=mysqli_query($conn,$qry);

while($row=mysqli_fetch_array($qry1))
	{
		
		$email=$row['email'];
		$pass=$row['password'];

		if ($email1==$email && $pass1==$pass) 
		{
			$count=1;
			$email=$row['email'];
			$id=$row['id'];

		
		}
	}
if ($count==1)
 	{
	
		$_SESSION['email']=$email;
		$_SESSION['id']=$id;
		echo $_SESSION['email'];
		header("location:index.php");
	}
else
	{

		
		header("location:login.php");
		

	}

?>
