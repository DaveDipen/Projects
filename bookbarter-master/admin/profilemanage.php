<?php
require "common/header.php";
require 'dbconnect.php';
session_start();

 $uname=$_SESSION['uname'];




?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Book barter</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
          <?php
  require "common/navigation.php";
?> 
			<?php $sql="SELECT * FROM `adminreg_table` WHERE `uname`='$uname'";
				  $res=mysqli_query($conn,$sql);
				  $row1=mysqli_fetch_assoc($res);?>
                  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Profile</h2>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="col-lg-4">
                      <img src="img/find_user.png" class="user-image img-responsive"/>
                    </div>
                   
                  <div class="col-lg-8">
         
            <form role="form" action="profileupdate.php" method="post">
                    <div class="form-group">
                        <label for="disabledSelect">First Name</label>
                        <input class="form-control" type="text" placeholder="First Name" name="fn" value="<?php echo $row1["fname"];?>">
                    </div>
                    <div class="form-group">
                        <label for="disabledSelect">Last name </label>
               <input class="form-control" type="text" placeholder="Last Name" name="ln" value="<?php echo $row1["lname"];?>">

                    </div>
                     <div class="form-group">
                        <label for="disabledSelect">Email</label>
                        <input class="form-control" type="email" placeholder="Email" name="email" value=<?php echo $row1["email"];?>>
                    </div>
                     <div class="form-group">
                        <label for="disabledSelect">Gender</label>
                       <?php
						
						if($row1["gender"]==0)
						{
							echo"<input  type='radio' name='radio' value='Male' checked>Male
								 <input  type='radio' name='radio' value='Female' >Female";
							
						}
						else
						{
							echo "<input  type='radio' name='radio' value='Male' >Male
								 <input  type='radio' name='radio' value='Female' checked>Female";
							
						}
						?>
                    </div>
                    <div class="form-group">
                        <label for="disabledSelect">Mobile No</label>
                        <input class="form-control" type="text" placeholder="Mobile No" name="mo" value=<?php echo $row1["contact"];?>>
                    </div>
                    
              <div class="form-group">
                 <label for="disabledSelect">Password</label>
                 <input class="form-control" type="text"  name="pass"  value="<?php echo $row1["password"];?>" required />
              </div>
			  <input type="hidden" name="una" value="<?php echo $uname; ?>"/>
              <div class="form-group">
                    
            
      
                    
                   
                    
                   <div class="control-group">
<div class="controls">
            <button type="submit" class="btn btn-primary" name="update">Save changes</button>


</div>
</div>
            </form>
  </div>
                  
     <!-- /. WRAPPER  -->
    <?php require "common/footer.php"; ?>