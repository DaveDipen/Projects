<?php
require 'common/header.php';
require 'dbconnect.php';

session_start();

$msg="";
if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    echo "$msg";
}

$qry="SELECT * FROM city_table WHERE is_active=1 ORDER BY id ";
$rs=mysqli_query($conn,$qry);

$qry2="SELECT area_table.id,area_table.is_active,area_table.area_name,city_table.city_name,city_table.id FROM city_table INNER JOIN area_table ON city_table.id = area_table.city_id WHERE area_table.is_active!=2 ORDER BY area_table.id";
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
                     <h2>Add Area</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr/>
                  <div class="col-md-12 col-sm-12 col-xs-12">
               
                       
                            <div class="form-group">
                                <label>City Name</label>
                            </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div>


                        <form action="addareadb.php" method="GET">
                                      <select name="city_id">
                                        <?php
                                        if(mysqli_num_rows($rs) > 0)
                                           {
                                              while($row = mysqli_fetch_assoc($rs))
                                              {
                                        ?>

                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['city_name'] ?></option>   
                                          <?php
                                           }
                                          }
                                        ?>
                                      </select>
                                    </div>
                               </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
               
                            <div class="form-group">
                                <label>Area Name</label>
                                <input type="text" class="form-control" name="area_name">
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