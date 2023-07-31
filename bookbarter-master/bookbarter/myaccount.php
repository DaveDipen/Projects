<?php
require 'common/header.php';


require 'dbconnect.php';
session_start();


  $email=$_SESSION['email'];
?>
<?php $sql="SELECT * FROM `user_register` WHERE `email`='$email'";
          $res=mysqli_query($conn,$sql);
          $row=mysqli_fetch_assoc($res);
          $uuuid=$row['uid'];?>
 
<section id="content-holder" class="container-fluid container">
<section class="row-fluid">
<div class="heading-bar">
  <div align="right">

   <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle mr-lg-2' href='#' id='alertsDropdown' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
              <i class='fa fa-fw fa-bell'></i>
               <?php

                 $s="SELECT * FROM `exchange_table` WHERE `uuid`='$uuuid'";
                 $ss=mysqli_query($conn,$s);
                 $rrr=mysqli_num_rows($ss);
                 $ro=mysqli_fetch_assoc($ss);
                 echo"
              <span class='d-lg-none'>Inbox
                <span class='badge badge-pill badge-warning'>".$rrr." New</span>
              </span>
          
            </a>

            <div class='dropdown-menu' aria-labelledby='alertsDropdown'>
              <h6 class='dropdown-header'>New Alerts:</h6>
              <div class='dropdown-divider'></div>";

                

                 while($ro=mysqli_fetch_assoc($ss))
                 {
                  echo"
              <a class='dropdown-item' href='#'>
                <span class='text-success'>
                  <strong>
                    <i class='fa fa-long-arrow-up'></i>
                    Status Update</strong>
                </span>
                
                <div class='dropdown-message small'>'".$ro['exchange_msg']."'</div>
                <div class='dropdown-message small'>Contact Here :".$ro['contect_u']."</div>

              </a>

              <div class='dropdown-divider'></div>";
}
      ?>
    
              <a class='dropdown-item small' href='#'>
                View all alerts
              </a>
            </div>
          </li>
</div>
<h2>My Account</h2>

<span class="h-line"></span> </div>

<section class="span12 first">
 

 
      
 
 
<div class="span12 c-form-holder first">
 
<form class="form-horizontal" action="cheakupdate.php" method="post">
<div class="form-group">
                <div class="form-group">
                 <label for="disabledSelect">First Name<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder="Last Name" name="fname" required value="<?php echo $row["fname"];?>"/>
              </div>
              <div class="form-group">
                 <label for="disabledSelect">Last Name<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder="Last Name" name="lname" required value="<?php echo $row["lname"];?>"/>
              </div>
              <div class="form-group">
                 <label for="disabledSelect">Email-Id<sup>*</sup></label>
                 <input class="form-control" type="email" placeholder="Last Name" name="email" required value="<?php echo $row["email"];?>"/>
              </div>
              <div class="form-group">
                  <label for="disabledSelect">Password <sup>*</sup></label>
                  <input class="form-control" type="password" placeholder="password" name="pass" required value="<?php echo $row["pass"];?>" />
              </div>
              <div class="form-group">
                  <label for="disabledSelect">Gender <sup>*</sup></label>
                  <?php
            
            if($row["gender"]==0)
            {
              echo"<input  type='radio' name='radio' value='Male' checked>Male
                 <input  type='radio' name='radio' value='Female' >Female";
              
            }
            else
            {
              echo "<input  type='radio' name='radio' value='Male' >Male
                 <input  type='radio' name='radio' value='Female' checked>Female";
              
            }
            ?></div>
            
              <div class="form-group">
                  <label for="disabledSelect">Address <sup>*</sup></label>
                  <textarea  rows="5" cols="75" name="address" value=""><?php echo $row["address"];?></textarea>
              </div>
              <div class="form-group">
                  <label for="disabledSelect">Contact <sup>*</sup></label>
                  <input class="form-control" type="text" placeholder="Contact Number" name="contact" required value="<?php echo $row["contact"];?>"/>
              </div>

             
        <?PHP
        


        $sql="SELECT * FROM `city_table` WHERE `is_active`=1";
        $res=mysqli_query($conn,$sql);
        $row1=mysqli_fetch_array($res);
        $city=$row1["city_name"];
      echo"  <div class='form-group'>
                 <label for='disabledSelect'>City <sup>*</sup></label>
                 <label class='form-control' type='text'  name='city'  value='Ahmedabad' required /><b>".$city."</b>
              </div>
        <input type='hidden' value='ahemdabad' name='city'>";
        
        
        ?>
              <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Area<sup>*</sup></label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="area" required value="<?php echo $row["area"];?>">
                           <option value=""><?php echo $row["area"];?></option>
                          <option value="">--select here--</option>
                            
            
    <?php $sql2="SELECT * FROM `area_table` WHERE `city_id`=14 and `is_active`=1";
        $res2=mysqli_query($conn,$sql2);
        while($row2=mysqli_fetch_assoc($res2))
        {
      echo"<option>".$row2["area_name"]."</option>
                            ";
        }?>
                    </select>
                    </div>
                
      </div>
    <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Security Question<sup>*</sup></label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="sq" required value="<?php echo $row["sq"];?>">
                          <option value=""><?php echo $row["sq"];?></option>
                           <option value="">--select here--</option> 
            
    <?php $sql3="SELECT * FROM `security_table` WHERE `is_active`=1";
        $res3=mysqli_query($conn,$sql3);
        while($row3=mysqli_fetch_assoc($res3))
        {
      echo"<option>".$row3["security_name"]."</option>
                            ";
        }?>
                    </select>
                    </div>
                
      </div>
    
      <div class="form-group">
                 <label for="disabledSelect">Security Answer<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder="Security Answer" name="sa" required value="<?php echo $row["sa"];?>"/>
              </div>
              
   <!-- /.form-group -->
                
             <input type="hidden" name="id" value="<?php echo $row['uid'];?>"
              <div class="control-group">
<div class="controls">
            <button name="signup" type="submit" class="btn btn-primary">Save changes</button>


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