<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func1.js"></script>
<?php
include_once ("Config.php");
include 'userDashboard.php';
?>
<style>
	.size{
		font-size: 48px;
	}
	.link{
		text-decoration: none;
		font-family: 'Poppins', sans-serif;
        color: blue;
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

    .bgheading{
        background: #1C4E80;
      }
</style>

<div class="home-content">
	<form method="post" action="<?php $_PHP_SELF ?>">
		<table border="1" class="table1">
			<tr class="bgheading">
            <td style="width: 30%;">
                <h2 class="heading">Manage Account</h2>
            </td>
        </tr>
        <tr>
        	<td>
        		<table class="table3">
        			
        				<?php
        				$uid = $_SESSION['uid'];

        				$result = mysqli_query($con,"SELECT * FROM user_info WHERE U_id = '$uid' ");

        				while ($res = mysqli_fetch_array($result)) {
        					$uid = $res['U_id'];
        					echo "<tr>";
        					echo "<td align='center'><i class='bi-person-circle size'></i></td>";
        					echo "<td align='left'><h2>".$res['U_userName']."</h2></td>";   
        					echo "<td align='right' colspan='2'><a href='editProfileU.php?id=$uid' class='link'><i class='bi-pencil-square'></i> Edit </a></td>";    				
        				?>
        			</tr>
                    <tr>
                    	<td>
                    		Full Name:
                    	</td>
                    	<td>
                    		<input type="text" name="fname" id="fname" value="<?php echo $res['U_Name']; ?>" class="w3-input" disabled>
                    	</td>
                    	<td>
                    		Email:
                    	</td>
                    	<td>
                    		<input type="email" name="mail" id="mail" value="<?php echo $res['U_Email']; ?>" class="w3-input" disabled>
                    	</td>
                    </tr>
                    <tr>
                    	<td>
                    		Mobile No:
                    	</td>
                    	<td>
                    		<input type="number" name="fmono" id="fmono" value="<?php echo $res['U_MobileNo']; ?>" class="w3-input" disabled>
                    	</td>
                    </tr>

                    <?php
                }
                		$uid = $_SESSION['uid'];
                		$n = 1;
                		$result = mysqli_query($con,"SELECT * FROM address_info WHERE U_id = '$uid'");
                		while($res = mysqli_fetch_array($result)){

                    ?>	
                    <tr>
                    	<td><h3><?php echo "Address ".$n;?></h3></td>
                    </tr>
                    <tr>   	
                    	<td>
                    		City:
                    	</td>
                    	<td>
                    		<input type="text" name="city" id="city" value="<?php echo $res['Address_City']; ?>" class="w3-input" disabled>
                    	</td>
                    	
                    	<td>
                    		State:
                    	</td>
                    	<td>
                    		<input type="text" name="state" id="state" value="<?php echo $res['Address_State']; ?>" class="w3-input" disabled>
                    	</td>
                    </tr>
                    <tr>	
                    	<td>
                    		Zipcode:
                    	</td>
                    	<td>
                    		<input type="text" name="zip" id="zip" value="<?php echo $res['Address_Zipcode']; ?>" class="w3-input" disabled>
                    	</td>                   	
                    
                    	<td>
                    		Street:
                    	</td>
                    	<td colspan="3">
                    		 <textarea name="address" id="address" style="height: 70px" class="w3-input" disabled placeholder="Address"><?php echo $res['Address_Street']; ?></textarea>
                    	</td> 	
                    	
                    	
                    </tr>
                    <?php
                    $n += 1;
                }
               		$uid = $_SESSION['uid'];
                	$result = mysqli_query($con,"SELECT * FROM user_info WHERE U_id = '$uid' ");
                    echo "<tr>";
                    echo "<td>";
                    echo "<a href='addAddressU.php' class='link'>Add New Address</a>";
                    echo "</td>";
                    echo "</tr>";
        			while ($res = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                    	<td>
                    		Username:
                    	</td>
                    	<td>
                    		<input type="text" name="uname" id="uname" value="<?php echo $res['U_userName']; ?>" class="w3-input" disabled>
                    	</td>
                    	<td align="center" colspan="2">
                    		<a href="changePasswordU.php?id=<?php echo $uid;?>" class="link">Change Password</a>
                    	</td>
                    </tr>                    
        			<?php
                    }
        			?>
        		</table>
        	</td>
        </tr>
		</table>
	</form>
</div>

