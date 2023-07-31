<?php
require 'common/header.php';


require 'dbconnect.php';
session_start();



?>
 
 
<section id="content-holder" class="container-fluid container">
<section class="row-fluid">
<div class="heading-bar">
<h2>Log In/Sign Up</h2>
<span class="h-line"></span> </div>
 
<section class="span12 first">
 

 
 
 
<div class="span12 c-form-holder first">
 
<form class="form-horizontal" action="checklogin.php" method="post">
<div class="form-group" class="control-group">
                 <label class="control-label" for="disabledSelect">User Name<sup>*</sup></label>
                 <div class="controls">
                 <input class="form-control" type="text" placeholder="EMAIL ID" name="uname" required />
               </div>
              </div>
              <div class="form-group" class="control-group">
                  <label class="control-label" for="disabledSelect">Password <sup>*</sup></label>
                  <div class="controls">
                  <input class="form-control" type="password" placeholder="PASSWORD" name="pass" required />
                </div>
              </div>
              <p><a href="checkemail.php">Forgot your password?</a> </p>
<div class="control-group">
<div class="controls">
				<button type="submit" class="btn btn-primary">Login</button>
				<a href="signup.php" type="submit" class="btn btn-primary" >Sign Up</a>
        <div>
       <?php  $msg = base64_decode($_GET['msg']);
            if(isset($_GET['msg'])){

                if($msg!=""){
                    echo $msg;
                }
            }
        ?>
    
  </div>

</div>
</div>
</form>
 
</div>
</section>
 
 

 
</section>
</section>
 
 
 
 
 
 
<?php
require 'common/footer.php';
?>