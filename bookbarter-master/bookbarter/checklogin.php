<?php

session_start();

require "dbconnect.php";
echo $uname1=$_POST['uname'];
echo $pass1=$_POST['pass'];


$count=0;
$qry = "SELECT * FROM user_register WHERE email='".$uname1."' AND pass='".$pass1."' AND is_active=1";
//$qry="SELECT * FROM `user_register` WHERE email='".$uname1."' and pass='".$pass1."'" and `is_active =1`;
$qry1=mysqli_query($conn,$qry);

	if(mysqli_num_rows($qry1)>0)
	{
		$row=mysqli_fetch_assoc($qry1);
	
		
		$uname=$row['email'];
		$pass=$row['pass'];

	
		$_SESSION['email']=$row['email'];
		$_SESSION['id']=$row['uid'];
		
		header("location:index.php");
	
	}
	else
	{
		
		if(!$_POST["email"] || !$_POST["pass"])
            {
                $msg = "User name or password is wrong or you re blocked";

                $msgEncoded = base64_encode($msg);
                header("location:login.php?msg=".$msgEncoded);
            }
	}
		

	

?>
