<?php
session_start();
include_once ("Config.php");
?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<script src="func.js"></script>
<script src="alert.min.js"></script>
<style>
	body{
		background-color: lightgray;
	}
	table{
		background-color: white;
	}
	.link{
		text-decoration: none;
	}
    .bgheading{
        background: #1C4E80;
    }
</style>
<form method="post">
	<table border="1" class="table1">
		<tr class="bgheading">
            <td style="width: 30%;" colspan="4">
                <h2 class="heading">Register</h2>
            </td>
        </tr>
        <tr>
        	<td align="center">
        		<table class="table3">
        			<tr>
        				<td>
        					Full Name:
        				</td>
        				<td>
        					<input type="text" name="fname" placeholder="Full Name" required class="w3-input">
        				</td>
        				<td>
        					Mobile No:
        				</td>
        				<td>
        					<input type="text" name="mobNo" placeholder="Mobile No" required class="w3-input" maxlength="10" pattern="[0-9]{10}">
        				</td>
                    </tr>
                    <tr>
        				<td>
        					Email:
        				</td>
        				<td>
        					<input type="email" name="email" placeholder="Email" required class="w3-input">
                        </td>
                        <td>
                            Organization:
                        </td>
                        <td> 
                            <input type="text" name="oname" placeholder="Organization Name" required class="w3-input">
                        </td>
                    </tr>
                    <tr>
        				<td>
        					User Name:
        				</td>
        				<td>
        					<input type="text" name="uname" placeholder="User Name" required class="w3-input">
        				</td>
        				<td>
        					Password:
        				</td>
        				<td>
        					<input type="password" name="pwd" placeholder="Password" required class="w3-input">
        				</td>
        			</tr>
        			<tr>
        				<td colspan="6" align="center">
                            <button type="submit" name="register" class="button">Register</button>
                        </td>
        			</tr>
        		</table>
        	</td>
        </tr>
	</table>	
</form>

<?php
    
if (isset($_POST['register'])) {
    
    $fname = $_POST['fname'];
    $mobno = $_POST['mobNo'];
    $email = $_POST['email'];
    $oname = $_POST['oname'];
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
  
    $record = "INSERT INTO tailor_info (Tailor_Name, Tailor_MobileNo, Tailor_Email,Tailor_userName, Tailor_Password, Tailor_Org) VALUES ('$fname','$mobno','$email','$uname','$pwd','$oname')";

    if (mysqli_query($con, $record)) {
            //echo "data inserted";
        }
        if($record){
            $_SESSION['status']="User Registered";
            $_SESSION['status_code']="success";
        }
        else{
            $_SESSION['status']="data is not inserted";
            $_SESSION['status_code']="error";
        }
        
}
unset($_SESSION["state"]);
        

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