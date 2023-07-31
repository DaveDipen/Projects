<?php
ob_start();
session_start();
require "dbconnect.php";
define("UPLOAD_DIR", "/bookbarter/bookbarter/bookbarter/uploads/");
//error_reporting(E_ERROR);

echo $bname=$_POST["name"];
$aa="SELECT `name` FROM `postbook_table` WHERE `name` LIKE `name`='$bname'";
$aaa=mysqli_query($conn,$aa);
$aaaa=mysqli_num_rows($aaa);
echo $aaaa;
if($aaaa > 0)
{
	header("location:postbook.php?exixt");
}
		

    function GetImageExtension($imagetype)

     {

       if(empty($imagetype)) return false;

       switch($imagetype)


       {

           

           case 'image/jpeg': return '.jpg';
          
			case 'image/jpg': return '.jpg';

           case 'image/png': return '.png';

           default: return $b;

       }
     }
	 
	 
	 
	 
	 
	 
if (!empty($_FILES["myFile"]) || !empty($_FILES["myFile1"]) || !empty($_FILES["myFile2"]) ||!empty($_FILES["myFile3"])) {
     $myFile = $_FILES["myFile"];
    $myFile1 = $_FILES["myFile1"];
     $myFile2 = $_FILES["myFile2"];
     $myFile3 = $_FILES["myFile3"];

    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
    $name1 = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile1["name"]);
   $name2 = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile2["name"]);
    $name3 = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile3["name"]);

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    $parts1 = pathinfo($name1);
    $parts2 = pathinfo($name2);
    $parts3 = pathinfo($name3);
	$imgtype=$_FILES["myFile"]["type"];
	$imgtype1=$_FILES["myFile1"]["type"];
	$imgtype2=$_FILES["myFile2"]["type"];
	$imgtype3=$_FILES["myFile3"]["type"];
	 $ext= GetImageExtension($imgtype);
	 $ext1= GetImageExtension($imgtype1);
	 $ext2= GetImageExtension($imgtype2);
	 $ext3= GetImageExtension($imgtype3);
	 
		
		
		
		
		
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . $ext;
    }
	while (file_exists(UPLOAD_DIR . $name1)) {
        $i++;
        $name1 = $parts1["filename"] . "-" . $i . $ext1;
    }
	while (file_exists(UPLOAD_DIR . $name2)) {
        $i++;
        $name2 = $parts2["filename"] . "-" . $i . $ext2;
    }
	while (file_exists(UPLOAD_DIR . $name3)) {
        $i++;
        $name3 = $parts3["filename"] . "-" . $i . $ext3;
    }

	
    // preserve file from temporary directory
		$success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
		$success1 = move_uploaded_file($myFile1["tmp_name"],
        UPLOAD_DIR . $name1); 
		$success2 = move_uploaded_file($myFile2["tmp_name"],
        UPLOAD_DIR . $name2);
		$success3 = move_uploaded_file($myFile3["tmp_name"],
        UPLOAD_DIR . $name3);
		 //$path=UPLOAD_DIR.$name;
		
		 $path=$name;
		 $path1=$name1;
		 $path2=$name2;
		 $path3=$name3;
   
	
		
		
		
		
		
		if ((isset($path) || isset($path1) || isset($path2) || isset($path3)) && (isset($_POST["Postbook"]))) 
		{
			echo $email=$_SESSION['email'];
			$qry1="SELECT `uid` FROM `user_register` WHERE `email`='$email'";
			$res1=mysqli_query($conn,$qry1);
			$row=mysqli_fetch_assoc($res1);
			$u=$row['uid'];
			$path;
			$path1;
			$path2;
			$path3;
			$bookname=$_POST["name"];
			$sbtt=$_POST["sbt"];
			$qry2="SELECT `id` FROM `booktype_table` WHERE `booktype_name`='$sbtt'";
			$res2=mysqli_query($conn,$qry2);
			$row1=mysqli_fetch_assoc($res2);
			$bid=$row1['id'];
			
			$sbcc=$_POST["sbc"];
			$qry3="SELECT `id` FROM `condition_table` WHERE `condition_name`='$sbcc'";
			$res3=mysqli_query($conn,$qry3);
			$row3=mysqli_fetch_assoc($res3);
			$cid=$row3['id'];
			
			$sbccc=$_POST["sbcc"];
			$qry4="SELECT `id` FROM `cat_table` WHERE `cat_name`='$sbccc'";
			$res4=mysqli_query($conn,$qry4);
			$row4=mysqli_fetch_assoc($res4);
			$catid=$row4['id'];
			
			$bdd=$_POST["bd"];
		
			$qry="INSERT INTO `postbook_table`(`uid`, `name`, `booktype_id`, `condition_id`, `cat_id`, `img1`, `img2`, `img3`, `img4`, `book_dec`, `is_active`) VALUES ('$u','$bookname','$bid','$cid','$catid','$path','$path1','$path2','$path3','$bdd','0')";
			$res=mysqli_query($conn,$qry);
			
		
		
		}
		if($res)
		{
			header("location:index.php?success");
		}
		
		
		else{
			echo"<h1>Something is Wrong Please Try Again...<a href='addnewnotice.php'>Click Here</a></h1>";
		}
		


	
	

    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);
}

