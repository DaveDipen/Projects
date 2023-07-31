<?php
require 'common/header.php';


require 'dbconnect.php';
session_start();

?>

 
<section id="content-holder" class="container-fluid container">
<section class="row-fluid">
<div class="heading-bar">
<h2>Post Book</h2>
<span class="h-line"></span> </div>
 
<section class="span12 first">
 

 
 
 
<div class="span12 c-form-holder first">
 
<form class="form-horizontal" action="checkpostbook.php" method="post" enctype="multipart/form-data" >
<div class="form-group">
                <div class="form-group">
                 <label for="disabledSelect"> Name<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder=" Name" name="name" required />
              </div>
              <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Select Book Type<sup>*</sup></label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="sbt" required>
                          <option value="">--select here--</option>
                            
            
    <?php $sql="SELECT * FROM `booktype_table` WHERE `is_active`=1";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
      echo"<option value=".$row['id'].">".$row["booktype_name"]."</option>
                            ";
        }?>
                    </select>
                    </div>
                
      </div>
              <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Select Book Condition<sup>*</sup></label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="sbc" required>
                          <option value="">--select here--</option>
                            
            
    <?php $sql="SELECT * FROM `condition_table` WHERE `is_active`=1";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
      echo"<option value=".$row['id'].">".$row["condition_name"]."</option>
                            ";
        }?>
                    </select>
                    </div>
                
              </div>
              <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Select Book Category<sup>*</sup></label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="sbcc" required>
                          <option value="">--select here--</option>
                            
            
    <?php $sql="SELECT * FROM `cat_table` WHERE `is_active`=1";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
      echo"<option value=".$row['id'].">".$row["cat_name"]."</option>
                            ";
        }?>
                    </select>
                    </div>
                
      </div>
      
              <div class="input-group">
                 <label for="disabledSelect" >Image 1<sup>*</sup></label>

            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="img1" name="myfile"  required>
                </span>
            </span>
            
            </div>


              <div class="input-group">
                 <label for="disabledSelect">Image 2<sup>*</sup></label>

            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="img2" name="myfile1" required>
                </span>
            </span>
            
             </div>

              <div class="input-group">
                 <label for="disabledSelect">Image 3<sup>*</sup></label>

            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="img3" name="myfile2" required>
                </span>
            </span>
            
        </div>
                
            <div class="input-group">
                 <label for="disabledSelect">Image 4<sup>*</sup></label>

            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="img4" name="myfile3" required>
                </span>
            </span>
            
            </div>

              <div class="form-group">
                  <label for="disabledSelect">Book Details <sup>*</sup></label required>
                  <textarea  rows="5" cols="75" name="bd"></textarea>
              </div>
      
              
   
                
             
              <div class="control-group">
<div class="controls">
            <button name="btn_sb" type="submit" class="btn btn-primary">Post Book Now</button>
<!-- /.form-group -->

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