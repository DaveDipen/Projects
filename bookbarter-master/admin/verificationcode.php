<?php
require "dbconnect.php";
$uname=$_POST['uname'];
$qry="SELECT * FROM admin";
$qry1=mysqli_query($conn,$qry);
if (mysqli_num_rows($qry1)>0) {
	# code...
	while ($row = mysqli_fetch_assoc($qry1)) {
		# code...
		if ($row['uname']==$uname) {
			# code...
			header("location:cpass.php");
		}
	}
}
?>