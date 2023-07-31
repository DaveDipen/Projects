<?php
require 'common/header.php';


require 'dbconnect.php';
session_start();

?>

 
<section id="content-holder" class="container-fluid container">
<section class="row-fluid">
<div class="heading-bar">
<h2>Sign Up</h2>
<span class="h-line"></span> </div>
 
<section class="span12 first">
 

 
 
 
<div class="span12 c-form-holder first">
 
<form class="form-horizontal" action="checksignin.php" method="post">
<div class="form-group">
                <div class="form-group">
                 <label for="disabledSelect">First Name<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder="First Name" name="fname" required />
              </div>
              <div class="form-group">
                 <label for="disabledSelect">Last Name<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder="Last Name" name="lname" required />
              </div>
              <div class="form-group">
                 <label for="disabledSelect">Email-Id<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder="Email-Id" name="email" required />
              </div>
              <div class="form-group">
                  <label for="disabledSelect">Password <sup>*</sup></label>
                  <input class="form-control" type="password" placeholder="password" name="pass" required />
              </div>
              <div class="form-group">
                  <label for="disabledSelect">Gender <sup>*</sup></label>
                  <div class="form-control">
                    <input  type="radio" name="gender" value="0" required>Male
                    <input  type="radio" name="gender" value="1">Female
                  </div>
              </div>
              <div class="form-group">
                  <label for="disabledSelect">Address <sup>*</sup></label>
                  <textarea  rows="5" cols="75" name="address" required></textarea>
              </div>
               <div class="form-group">
                  <label for="disabledSelect">Contact <sup>*</sup></label>
                  <input class="form-control" type="text" placeholder="Contact Number" name="contact" required />
              </div>

             
			  <?PHP
			  


			  $sql="SELECT * FROM `city_table` WHERE `is_active`=1";
			  $res=mysqli_query($conn,$sql);
			  $row=mysqli_fetch_array($res);
			  $city=$row["city_name"];
			echo"  <div class='form-group'>
                 <label for='disabledSelect'>City <sup>*</sup></label>
                 <label class='form-control' type='text'  name='city'  value='Ahmedabad' required /><b>".$city."</b>
              </div>
			  <input type='hidden' value='ahemdabad' name='city'>";
			  
			  
			  ?>
              <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Area<sup>*</sup></label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="area" required>
                          <option value="">--select here--</option>
                            
            
	  <?php $sql="SELECT * FROM `area_table` WHERE `city_id`=14 and `is_active`=1";
			  $res=mysqli_query($conn,$sql);
			  while($row=mysqli_fetch_assoc($res))
			  {
			echo"<option>".$row["area_name"]."</option>
                            ";
			  }?>
			              </select>
                    </div>
                
      </div>
	  <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Security Question<sup>*</sup></label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="sq" required>
                          <option value="">--select here--</option>
                            
            
	  <?php $sql="SELECT * FROM `security_table` WHERE `is_active`=1";
			  $res=mysqli_query($conn,$sql);
			  while($row=mysqli_fetch_assoc($res))
			  {
			echo"<option>".$row["security_name"]."</option>
                            ";
			  }?>
			              </select>
                    </div>
                
      </div>
    
      <div class="form-group">
                 <label for="disabledSelect">Security Answer<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder="Security Answer" name="sa" required />
              </div>
              
   <!-- /.form-group -->
                
             
              <div class="control-group">
<div class="controls">
            <button name="signup" type="submit" class="btn btn-primary">Sign Up Now</button>


</div>
</div>


</div>
</div>
</form>
 
</div>
</section>
 
 

 
</section>
</section>
 
 
 
 
 
 
 
</div>
 
 
<?php
require 'common/footer.php'
?>