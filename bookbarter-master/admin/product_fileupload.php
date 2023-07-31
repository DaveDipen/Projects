<?php
$target_dir= "upload/";
$target_file= $target_dir.basename($_FILES['myfile']['name']);

$uploadOk=1;

$imageType=pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["btn_sb"]))
{
	$check=getimagesize($_FILES["myfile"]["tmp_name"]);
	if ($check!==false) 
	{
		//echo "File is an image - ".$check["mime"].".";

		$uploadOk=1;
	}
	else
	{
		echo "File is not an image.";
		$uploadOk=0;
	}

	if(file_exists($target_file))
	{
		echo "File already exists!";
		$uploadOk=0;
	}
	if ($_FILES["myfile"]["size"] > 1000000) 
	{
		echo "File size too large.";
		$uploadOk=0;
	}
	if ($imageType!="jpg" && $imageType!="JPG" && $imageType!="png" && $imageType!="jpeg" && $imageType!="gif") 
	{
		echo "You can only upload JPG,PNG,JPEG or GIF image.";
		$uploadOk=0;
	}
	if ($uploadOk==0) 
	{
		echo "Sorry the file was not uploaded. Retry.";
	}
	else
	{

		if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) 
		{
			echo "File".basename($_FILES['myfile']['name']) ." has been successfully uploaded.";
		}
		else
		{
			echo "File was not uploaded due to some error.";
		}
	}


}

?>