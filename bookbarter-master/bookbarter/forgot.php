<?php
require 'common/header.php';


require 'dbconnect.php';


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
 
<form class="form-horizontal" action="showpass.php" method="post">
<?php $security=$_POST["email"];?>
                    <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Security Question<sup>*</sup></label>
                    <?PHP
			  


			  $sql="SELECT * FROM `user_register` where `email`='$security'";
			  $res=mysqli_query($conn,$sql);
			  $row=mysqli_fetch_array($res);
			  $s=$row["sq"];
			echo"  <div class='form-group'>
                 
                 <label class='form-control' required /><b>".$s."</b>
				 <input type='hidden' name='email' value='".$security."'/>
				 <input type='hidden' name='sq' value='".$s."'/>
              </div>
		";
			  
			  
			  ?>
                
      </div>
      <div class="form-group">
                 <label for="disabledSelect">Security Answer<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder="Security Answer" name="sa" required />
              </div>
              
   <!-- /.form-group -->
                
             
              <div class="control-group">
<div class="controls">
            <input type="submit" class="btn btn-primary" value="show Now"/>


</div></form>
   
</div>
</section>
 
 

 
</section>
</section>
 
 
 <?php
 require 'common/footer.php';
 ?>
 
 
 
