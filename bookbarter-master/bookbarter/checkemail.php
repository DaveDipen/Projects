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
<h2>Email Cheak</h2>
<span class="h-line"></span> </div>
 
<section class="span12 first">
 

 
 
 
<div class="span12 c-form-holder first">
 
<form class="form-horizontal" action="forgot.php" method="post">

                    
                
      
                  <div class="form-group">
                 <label for="disabledSelect">Email-Id<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder="Email-Id" name="email" required />
              </div>
              
   <!-- /.form-group -->
                
             
              <div class="control-group">
<div class="controls">
            <input type="submit" value="Next >" class="btn btn-primary" />


</div>
</form>
   
</div>
</section>
 
 

 
</section>
</section>
 
 
 <?php
 require 'common/footer.php';
 ?>
 
 
 
