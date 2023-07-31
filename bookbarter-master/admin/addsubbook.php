<?php
require 'common/header.php';
require 'dbconnect.php';

session_start();


$qry="SELECT * FROM booktype_table WHERE is_active=1 ORDER BY id ";
$rs=mysqli_query($conn,$qry);

$qry2="SELECT subbook_table.id,subbook_table.is_active,subbook_table.book_name,booktype_table.booktype_name,booktype_table.id FROM booktype_table INNER JOIN subbook_table ON booktype_table.id = subbook_table.booktype_id WHERE subbook_table.is_active!=2 ORDER BY subbook_table.id";
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
                     <h2>Add Book</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr/>
                  <div class="col-md-12 col-sm-12 col-xs-12">
               
                       
                            <div class="form-group">
                                <label>Book Type Name</label>
                            </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div>

                        <form action="addsubbookdb.php" method="GET">
                                      <select name="booktype_id">
                                        <?php
                                        if(mysqli_num_rows($rs) > 0)
                                           {
                                              while($row = mysqli_fetch_assoc($rs))
                                              {
                                        ?>

                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['booktype_name'] ?></option>   
                                          <?php
                                           }
                                          }
                                        ?>
                                      </select>
                                    </div>
                               </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
               
                            <div class="form-group">
                                <label>Book Name</label>
                                <input type="text" class="form-control" name="book_name">
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