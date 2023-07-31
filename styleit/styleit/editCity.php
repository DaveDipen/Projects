<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func1.js"></script>
<?php
include_once ("Config.php");
include 'adminDashboard.php';
?>
<style>
	.size{
		font-size: 48px;
	}
	.link1{
		text-decoration: none;
		font-family: 'Poppins', sans-serif;
	}
    .link{
            font-size: 14px;
            text-decoration: none;
            background-color: #0A2558; 
            border: solid #0A2558;              
            padding-bottom: 0px;
            padding-top: 26px;
            padding-right: 0px;
            padding-left: 0px;
            color: white; 
            cursor: pointer;
        }
        .links{
            padding-left: 95%;
        }
        .head span{
             width:13px;
             display: inline-block;
        }
        .link .size{
            font-size: 50px;
            align-content: center;
        }
	.button{
      background-color:#0A2558 ; 
      border: solid; 
      padding: 14px 50px; 
      color: white; 
      border-radius: 4px;
      cursor: pointer;
    }
    .button1{
      font-size: 15px;
      background-color:#0A2558 ; 
      border: solid; 
      padding: 10px 22px; 
      color: white; 
      border-radius: 4px;
      cursor: pointer;
    }
</style>

<div class="home-content">
	<form method="post" action="<?php $_PHP_SELF ?>">
		<table border="1" class="table1">
		<tr class="bgheading">
            <td style="width: 30%;">
                <span id="head1"><h2 class="heading">Edit</h2></span>    
                <span id="head2" class="links"><a href="addCity.php" class="link"><i class="bi-x-square size"></i></a></span>
            </td>
        </tr>
        <tr>
            <td>
                <table class="table3">
                	<tr>
						<td>
		        		    States 
		        		</td>
		        		<td class="td">
		        			<select name="state" class="w3-input">
                                <option selected disabled>--</option>
                                <?php

                                	$result = mysqli_query($con,"SELECT * FROM state_info");
                                	while ($res = mysqli_fetch_array($result)) {
                                		echo "<option value='".$res['State_id'] . "'>".$res['State_Name']."</option>";
                                	}
                                ?>
                            </select>
                		</td>
					</tr>
                    <?php
                        $cid = $_GET['id'];

                        $result = mysqli_query($con,"SELECT * FROM city_info JOIN state_info ON city_info.State_id = state_info.State_id WHERE City_id = '$cid' ");

                        while ($res = mysqli_fetch_array($result)) {
                            $cid = $res['City_id'];
                        ?>      
                    <tr>
                        <td>
                            City Name:
                        </td>
                        <td>
                            <input type="text" name="cname" id="cname" value="<?php echo $res['City_Name']; ?>" class="w3-input" pattern="[A-Za-z]{1,50}">
                        </td>
                    </tr>
                    <?php
                }
                    ?> 
                    <tr>
                        <td colspan="4" align="center">
                            <div class="allbutton">
                               <input type="submit" name="update" value="Update"> 
                            </div>
                        </td>
                    </tr> 
                </table>
            </td>
        </tr>
    </table>
</form>
</div>
<?php

if (isset($_POST['update'])) {
    
    $cname = $_POST['cname'];
    $state = $_POST['state'];
    $cid = $_GET['id'];

    $record = "UPDATE `city_info` SET `City_Name`='$cname',`State_id`='$state' WHERE City_id = '$cid'";

    if (mysqli_query($con, $record)) {
        
    }
    if($record){
        $_SESSION['status']="Data Inserted";
        $_SESSION['status_code']="success";
    }
    else{
        $_SESSION['status']="data is not inserted";
        $_SESSION['status_code']="error";
    }

}

?>



<script src="alert.min.js"></script>
<?php
if(isset($_SESSION['status']))
{
    ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            icon: "<?php echo $_SESSION['status_code']; ?>",
            button: "ok done!",
        });
    </script>
    <?php
        unset($_SESSION['status']);
    }
?>        