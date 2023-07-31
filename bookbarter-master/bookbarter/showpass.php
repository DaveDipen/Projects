<?php
require 'common/header.php';


require 'dbconnect.php';
session_start();

?>
<body>
 
<div class="wrapper">
 
<section id="content-holder" class="container-fluid container">
<section class="row-fluid">
<div class="heading-bar">
<h2>Forgot Now</h2>
<span class="h-line"></span> </div>
 
<section class="span12 first">
 

 
 
 
<div class="span12 c-form-holder first">
 
<form class="form-horizontal" action=".php" method="post">

            <?php $email=$_POST["email"];
					$sq= $_POST["sq"];	
				 $sa= $_POST["sa"];
				 $sql="SELECT * FROM `user_register` WHERE `email`='$email' and `sq`='$sq' and `sa`='$sa'";
				 $res=mysqli_query($conn,$sql);
				 $row=mysqli_fetch_assoc($res);
				 ?>        
      <div class="form-group">
                 <label for="disabledSelect">Your Password<sup>*</sup></label>
                
				 <label class='form-control'/><b><?php echo $row["pass"]; ?></b>
              </div>
              
   <!-- /.form-group -->
                
             
              <div class="control-group">
<div class="controls">
            <a href="login.php" type="submit" class="btn btn-primary" >Log in Back</a>


</div></form>
   
</div>
</section>
 
 

 
</section>
</section>
 
 
 <?php
 require 'common/footer.php';
 ?>
 
 
 
