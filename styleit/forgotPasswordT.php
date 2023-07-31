<?php
session_start();
include_once ("Config.php");
?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<style>
	body{
		background-color: lightgray;
	}
	form{
		margin-top: 10%;
		margin-left: 5%;
		padding: 20px;
		margin: 50px;
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

	button[type="submit"]{
      background-color: #1C4E80;
  }
</style>
<form method="post">
	<table border="1">
		<tr class="bgheading">
            <td style="width: 30%;">
                <h2 class="heading">Forgot Password</h2>
            </td>
        </tr>
		<tr>
        	<td align="center">
        		<table align="center">
        			<tr>
        				<td>
        					Email:
        				</td>
        				<td>
        					<input type="text" name="mail" placeholder="mail" required class="w3-input">
        				</td>
        			</tr>	
        			<tr>	
        				<td>
        					Mobile No:
        				</td>
        				<td>
        					<input type="text" name="mono" placeholder="Mobile No" required class="w3-input">
        				</td>
        			</tr>
        			<tr>
        				<td colspan="2" align="center">
                            <button type="submit" name="find" class="button">Find Password</button>
                        </td>
        			</tr>
        		</table>
        	</td>
        </tr>
        <?php

			if (isset($_POST['find'])) {

				$mail = $_POST['mail'];
				$mono = $_POST['mono'];

				$result = mysqli_query($con, "SELECT Tailor_Password FROM tailor_info WHERE Tailor_Email = '$mail' AND Tailor_MobileNo = '$mono'");

				while ($res = mysqli_fetch_array($result)) {
					if($res){
                        $_SESSION['status']="Password: ".$res['Tailor_Password'];
                        $_SESSION['status_code']="success";
                    }
                    else{
                        $_SESSION['status']="data is not inserted";
                        $_SESSION['status_code']="error";
                    }
				}
			}
		?>
		<tr align="center">
			<td>
				<a href="tailorLogin.php" class="button link">Close</a>
			</td>
		</tr>
	</table>
</form>


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
