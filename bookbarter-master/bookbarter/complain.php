<?php
require 'common/header.php';

require 'dbconnect.php';
session_start();

?>
 
 
<section id="content-holder" class="container-fluid container">
<section class="row-fluid">
<div class="heading-bar">
<h2>Log In</h2>
<span class="h-line"></span> </div>
 
<section class="span12 first">
 

 
 
 
<div class="span12 c-form-holder first">
 
<form class="form-horizontal" action="signup.html" method="post">
<div class="form-group">
                 <label for="disabledSelect">User Name</label>
                 <input class="form-control" type="text" placeholder="EMAIL ID" name="uname" required />
              </div>
              <div class="form-group">
                  <label for="disabledSelect">Password </label>
                  <input class="form-control" type="password" placeholder="PASSWORD" name="pass" required />
              </div>
              <p><a href="Forgot.html">Forgot your password?</a> </p>
<div class="control-group">
<div class="controls">
				<button type="submit" class="btn btn-primary">Login</button>
				<a href="signup.html" type="submit" class="btn btn-primary" >Sign Up</a>


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
 
 
 
 
 
