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
 
<form class="form-horizontal" action="chechsighin.php" method="post">
<div class="form-group">
                <div class="form-group">
                 <label for="disabledSelect"> Name<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder=" Name" name="fname" required />
              </div>
              <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Select Book Type<sup>*</sup></label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="booktype_id">
                            <option>Who is your best friend?</option>
                            <option>Who is your Favorite Roll model? </option>
                            <option>What is your favorite Dish?</option>
                            <option>What is your favorite place in the world?</option>
                            
                        </select>
                    </div>
              </div>
              <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Select condition<sup>*</sup></label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="condition_id">
                            <option>Who is your best friend?</option>
                            <option>Who is your Favorite Roll model? </option>
                            <option>What is your favorite Dish?</option>
                            <option>What is your favorite place in the world?</option>
                            
                        </select>
                    </div>
               </div>
      
              <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Select Catogary <sup>*</sup></label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control" name="cat_id">
                            <option>Who is your best friend?</option>
                            <option>Who is your Favorite Roll model? </option>
                            <option>What is your favorite Dish?</option>
                            <option>What is your favorite place in the world?</option>
                            
                        </select>
                    </div>
              </div>
      
              <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="img1">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
            </div>


              <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="img2">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
             </div>

              <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="img3">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
                
            <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="img4">
                </span>
            </span>
            
            </div>

              <div class="form-group">
                  <label for="disabledSelect">Book Details <sup>*</sup></label>
                  <textarea  rows="5" cols="75" name="address"></textarea>
              </div>
      <div class="form-group">
                 <label for="disabledSelect">Security Answer<sup>*</sup></label>
                 <input class="form-control" type="text" placeholder="Security Answer" name="sa" required />
              </div>
              
   
                
             
              <div class="control-group">
<div class="controls">
            <button name="Post book" type="submit" class="btn btn-primary">Post Book Now</button>
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