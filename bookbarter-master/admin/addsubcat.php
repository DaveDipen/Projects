<?php
require 'common/header.php';
require 'dbconnect.php';
session_start();


$qry="SELECT * FROM cat_table WHERE is_active=1 ORDER BY id ";
$rs=mysqli_query($conn,$qry);

$qry2="SELECT subcat_table.id,subcat_table.is_active,subcat_table.subcat_name,cat_table.cat_name,cat_table.id FROM cat_table INNER JOIN subcat_table ON cat_table.id = subcat_table.cat_id WHERE subcat_table.is_active!=2 ORDER BY subcat_table.id";
$rs2=mysqli_query($conn,$qry2);
$row2 = mysqli_fetch_assoc($rs2);

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
                     <h2>Add Sub Category</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr/>
                  <div class="col-md-12 col-sm-12 col-xs-12">
               
                       
                            <div class="form-group">
                                <label>Category Name</label>
                            </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div>

                        <form action="addsubcatdb.php" method="GET">
                                      <select name="cat_id">
                                        <?php
                                        if(mysqli_num_rows($rs) > 0)
                                           {
                                              while($row = mysqli_fetch_assoc($rs))
                                              {
                                        ?>

                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['cat_name'] ?></option>   
                                          <?php
                                           }
                                          }
                                        ?>
                                      </select>
                                    </div>
                               </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
               
                            <div class="form-group">
                                <label>Sub Category Name</label>
                                <input type="text" class="form-control" name="subcat_name">
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