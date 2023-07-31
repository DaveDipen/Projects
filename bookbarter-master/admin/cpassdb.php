<?php
session_start();
		

require "dbconnect.php";
$id=$_SESSION['id'];
		echo $id;
$opass=$_POST['opass'];
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];

$qry="SELECT * FROM adminreg_table WHERE id='".$id."'";
$qry1=mysqli_query($conn,$qry);
if (mysqli_num_rows($qry1)>0) 
{
	
	
	while($row=mysqli_fetch_array($qry1))
	{
				
		$opass=$row['password'];
		

		if ($opass==$opass) 
		{
			

			if($npass==$cpass)
			{

				$qry="UPDATE adminreg_table SET password=$npass WHERE id=$id";
				$qry2=mysqli_query($conn,$qry);
				 header("location:login.php");
			}
			else
			{
				echo "not same";
			}

		
		}
	}

}


?>
