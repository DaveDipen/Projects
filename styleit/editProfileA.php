<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func1.js"></script>
<?php
include_once ("Config.php");
include 'tailorDashboard.php';
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
                <span id="head2" class="links"><a href="manageAccountT.php" class="link"><i class="bi-x-square size"></i></a></span>
            </td>
        </tr>
        <tr>
        	<td>
        		<table class="table3">
        			
        			<?php
        				$tid = $_SESSION['tid'];

        				$result = mysqli_query($con,"SELECT * FROM tailor_info WHERE Tailor_id = '$tid' ");

        				while ($res = mysqli_fetch_array($result)) {
        					$tid = $res['Tailor_id'];
        					echo "<tr>";
        					echo "<td align='center'><i class='bi-person-circle size'></i></td>";
        					echo "<td align='left'><h2>".$res['Tailor_userName']."</h2></td>";     				
        				?>
        			</tr>
                    <tr>
                    	<td>
                    		Full Name:
                    	</td>
                    	<td>
                    		<input type="text" name="fname" id="fname" value="<?php echo $res['Tailor_Name']; ?>" class="w3-input">
                    	</td>
                    	<td>
                    		Email:
                    	</td>
                    	<td>
                    		<input type="email" name="mail" id="mail" value="<?php echo $res['Tailor_Email']; ?>" class="w3-input">
                    	</td>
                    </tr>
                    <tr>
                    	<td>
                    		Mobile No:
                    	</td>
                    	<td>
                    		<input type="number" name="fmono" id="fmono" value="<?php echo $res['Tailor_MobileNo']; ?>" class="w3-input">
                    	</td>
                    </tr>

                    <?php
                }
                		$tid = $_SESSION['tid'];
                		$n = 1;
                		$result = mysqli_query($con,"SELECT * FROM address_info WHERE Tailor_id = '$tid'");
                		while($res = mysqli_fetch_array($result)){
                            $aid = $res['Address_id'];
                    ?>	
                    <tr>
                    	<td><h3><?php echo "Address ".$n;?></h3></td>
                    </tr>
                    <tr>   	
                    	<td>
                    		City:
                    	</td>
                    	<td>
                    		<input type="text" name="city[]" id="city" value="<?php echo $res['Address_City']; ?>" class="w3-input">
                            <input type="hidden" name="aid[]" value="<?php echo $aid ?>">
                    	</td>
                    	<td>
                    		State:
                    	</td>
                    	<td>
                    		<input type="text" name="state[]" id="state" value="<?php echo $res['Address_State']; ?>" class="w3-input">
                    	</td>
                    </tr>
                    <tr>	
                    	<td>
                    		Zipcode:
                    	</td>
                    	<td>
                    		<input type="text" name="zip[]" id="zip" value="<?php echo $res['Address_Zipcode']; ?>" class="w3-input">
                    	</td>                   	
                    
                    	<td>
                    		Street:
                    	</td>
                    	<td colspan="3">
                    		 <textarea name="address[]" id="address" style="height: 70px" class="w3-input"placeholder="Address"><?php echo $res['Address_Street']; ?></textarea>
                    	</td> 	
                    	
                    	
                    </tr>
                    <?php
                    $n += 1;
                }
               		$tid = $_SESSION['tid'];
                	$result = mysqli_query($con,"SELECT * FROM tailor_info WHERE Tailor_id = '$tid' ");

        			while ($res = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                    	<td>
                    		Username:
                    	</td>
                    	<td>
                    		<input type="text" name="uname" id="uname" value="<?php echo $res['Tailor_userName']; ?>" class="w3-input">
                    	</td>
                    	<td align="center" colspan="2">
                    		<a href="changePasswordF.php?id=<?php echo $tid;?>" class="link1">Change Password</a>
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
    $fname = $_POST['fname'];
    $mail = $_POST['mail'];
    $fmono = $_POST['fmono'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $address = $_POST['address'];
    $uname = $_POST['uname'];
    $aid = $_POST['aid'];
    $tid = $_SESSION['tid'];

    $record = "UPDATE `tailor_info` SET `Tailor_Name`='$fname',`Tailor_MobileNo`='$fmono',`Tailor_Email`='$mail',`Tailor_userName`='$uname' WHERE Tailor_id = '$tid'";
    $i = 0;
    
    foreach ($_POST['aid'] as $index) {

        $record1 = "UPDATE `address_info` SET `Address_City`='$city[$i]',`Address_State`='$state[$i]',`Address_Street`='$address[$i]',`Address_Zipcode`='$zip[$i]' WHERE `Address_id`='$index'";
        $i++;
        if (mysqli_query($con, $record1)) {
        
        }

    }
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


