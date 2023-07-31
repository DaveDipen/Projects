<?php
session_start();
?>

<html>
<head>
	<title>StyleIt</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<style>
		body{
			height: 100%;
			margin:0;
            padding:0;
            font-family: sans-serif;
            text-align: center;   
            font-size: 22px;  
            background-color: #1C4E80;    
            background-repeat: no-repeat;
            background-size: 100% 100%;    
		}
		form {
			padding: 75px;
		}

		input[type="text"], input[type="password"]{
         width: 70%;
         padding: 6px;
         box-sizing: border-box;
         border: 1px solid black;
		}
		input[type="submit"]{
			background-color: #1C4E80; 
			border: solid; 
			padding: 14px 50px; 
			color: white; 
			border-radius: 4px;
		}
		input[type="checkbox"]{
              width: 15px;
              height: 15px;
		}

        tr, td {
          padding: 28px 40px;
          font-size: 22px;  
        }

        form i {
            margin-left: -30px;
            cursor: pointer;
        }
	</style>
</head>
<body>
<div class="Login">
 	<form method="post" >
 		<table border="1" align="center">
 		    <div class="Title">
 				<tr style="background-color: white;">
 					<td colspan="2" align="center">
 					   <h4>StyleIt</h4>
 					</td>
 				</tr>
 		</div>
 			<div class="row">
 					<tr style="background-color: white;">
 					<td colspan="2">
 						Username: 
 						<input type="text" name="uname" required placeholder="Username" value="<?php if(isset($_COOKIE['Username'])){ echo $_COOKIE['Username']; } ?>" />
                    </td>
 					</tr>
 					<tr style="background-color: white;">
 						<td colspan="2">
 							Password: 
 						<input type="password" name="pwd" required placeholder="Password" id="password" value="<?php if(isset($_COOKIE['Password'])){ echo $_COOKIE['Password']; } ?>" /><i class="bi-eye-slash-fill" id="togglePassword"></i>
 						</td>
 					</tr>
 			</div>
 			<div class="rmbr">
 				<tr align="center" style="background-color: white;">
 					<td>		
 						<input type="checkbox" name="remember"> Remember me
                    </td>
 					<td>	    
 			         	<a href="forgotPassword.php">Forgot Password</a>
 			        </td>
 			    </tr>
 			</div>
            <div class="rmbr">
                <tr align="center" style="background-color: white;">
                    <td colspan="2">
                        <a href="registerUser.php">Register</a>
                    </td>
                </tr>
            </div>
 			    <tr style="background-color: white;"> 
 			        <td colspan="2" align="center">    
 			            <div class="sub">
 				            <input type="submit" name="login" value="Login">                     
 			            </div>
 					</td>
 				</tr>
 			</table>
 	</div>
 </form>
</body>
</html>

<?php
include_once("Config.php");

if (isset($_POST['login'])) {
    
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $user = mysqli_query($con, "SELECT * FROM user_info");

    while ($res = mysqli_fetch_array($user)) {
        if ($uname == $res['U_userName'] && $pwd == $res['U_Password']) {
            $uid = $res['U_id'];
            $_SESSION['uid'] = $uid;
            $_SESSION['user'] = $uname; 
            if(isset($_SESSION["user"])) {
                header("Location:userDashboard.php");
            }
        }
    }
    if (isset($_POST['remember'])) {
        setcookie("Username",$_POST['uname'],time()+(60*60*24*60));
        setcookie("Password",$_POST['pwd'],time()+(60*60*24*60));
    }
}

?>


<script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
</script>