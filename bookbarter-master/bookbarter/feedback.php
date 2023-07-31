<?php
require 'common/header.php';


require 'dbconnect.php';
session_start();

?>
 
 
<section id="content-holder" class="container-fluid container">
<section class="row-fluid">
<div class="heading-bar">
<h2>Feedback</h2>
<span class="h-line"></span> </div>
 
<section class="span12 first">
<?php
			$emill=$_SESSION["email"];
			$sql="SELECT * FROM `user_register` WHERE `email`='$emill'";
			 $res=mysqli_query($conn,$sql);
			  $row=mysqli_fetch_assoc($res);
				
?> 

 
 
 
<div>
 
<form class="form-horizontal" action="feedsend.php" method="post">

        
            <div class="form-group">
                 <label for="disabledSelect">Name<sup>*</sup></label>

            <?php echo"  <div class='form-group'>
                 
                 <label class='form-control' required /><b>".$row['fname']." ".$row['lname']."</b>
                 <label class='form-control' required /><b></b>
				 <input type='hidden' name='name' value='".$row['email']."'/>
			
              </div>
		";?>
          </div>
          <div class="form-group">
                 <label for="disabledSelect" >Email<sup>*</sup></label>

           <?php echo"  <div class='form-group'>
                 
                 <label class='form-control' required /><b>".$row['email']."</b>
				 <input type='hidden' name='email' value='".$row['email']."'/>
			
              </div>
		";?>
          </div>
          <!--<div class="form-group">
                 <label for="disabledSelect">Mobile Number<sup>*</sup></label>

            
          </div>-->
          <div class="form-group">
                 <label for="disabledSelect">Subject<sup>*</sup></label>

            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>
                    <div class="form-group">
                 <label for="disabledSelect">Message<sup>*</sup></label>

                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"name="mess"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
            
        <div class="control-group">
<div class="controls">
        <button type="submit" class="btn btn-primary">Submit</button>
        


</div>
</div>
        </form>
     
</div>
</section>
 
 

 
</section>
</section>
<?php
require 'common/footer.php'
?> 
 
 
 
 
 
