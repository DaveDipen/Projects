<?php
ob_start();
session_start();
//$fname= $_SESSION['fname'];
define("UPLOAD_DIR", "/wamp/www/bookbarter/bookbaeter/common/temp/img/");
//error_reporting(E_ERROR);
//include"connection.php";

		

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
	 
	 
	 
	 
	 
	 
if (!empty($_FILES["myFile"])) 
{
    echo $myFile = $_FILES["myFile"];

    // ensure a safe filename
   echo $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
	$imgtype=$_FILES["myFile"]["type"];
	 $ext= GetImageExtension($imgtype);
	
	 
		
		
		
		
		
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . $ext;
    }

	
    // preserve file from temporary directory
    $success = move_uploaded_file($myFile["tmp_name"],
        UPLOAD_DIR . $name);
		 //$path=UPLOAD_DIR.$name;
		
		 $path=$name;
   
	
		
		
		
		
		
		
	
	
	

    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);
}

