<?php 
require "common/header.php";
require "dbconnect.php";
?>
    <div class="col-lg-4">
      &nbsp;
    </div>
    <div class="col-lg-4">
         <h2 class="text-center">Verification Form</h2>
            <form role="form" action="Verificationcode.php" method="POST">
                    <div class="form-group">
                        <label for="disabledSelect">User Name</label>
                        <input class="form-control" type="text" placeholder="EMAIL ID" name="uname" required />
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="btn_sb">Verify</button>
            </form>
  </div>
  <div class="col-lg-4">
      &nbsp;
    </div>
<?php require "common/footer.php" ?>
