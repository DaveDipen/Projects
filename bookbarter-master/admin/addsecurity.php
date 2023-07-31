<?php
require 'common/header.php';
require 'dbconnect.php';
session_start();
$msg="";
if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    echo "$msg";
}
?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
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
    
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Security Question</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr/>
                    <div class="col-md-12 col-sm-12 col-xs-12">
               
                        <form action="addsecuritydb.php" method="GET">
                            <div class="form-group">
                                <label>Question Name</label>
                                <input type="text" class="form-control" name="security_name">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" name="btn_sb" class="btn btn-default btn-md" value="ADD">
                            </div>
                        </form>
                    
                    </div>
            </div>
        </div>
     <!-- /. WRAPPER  -->
    <?php require "common/footer.php"; ?>