<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func1.js"></script>
<?php
include_once ("Config.php");
include 'userDashboard.php';
?>
<head>
	<style>
		tr, td, th{
        padding: 2% 20px;
        font-size: 20px;
        height: 85%;
      }
	</style>
</head>
<div class="home-content">
<form method="post">
    <table border="1" class="table1">
        <tr class="bgheading">
            <td style="width: 30%;">
                <h2 class="heading">Edit Measurments</h2>
            </td>
        </tr>
        <tr>
            <td>
                <table class="table3">
                    
                        <?php

                        include_once ("Config.php");

                        $id = $_GET['id'];

                        $result = mysqli_query($con,"SELECT * FROM measurment_info WHERE M_id = '$id' ");

                        while ($res = mysqli_fetch_array($result)) {
                            
                        ?>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type="text" name="uname" value="<?php echo $res['User_Name']; ?>" class="w3-input" required>
                        </td>
                    </tr>    
                    <tr>
                        <td>Chest</td>
                        <td>
                            <input type="number" name="chest" required placeholder="40" value="<?php echo $res['M_Chest']; ?>" class='w3-input'>
                        </td>
                    </tr>
                    <tr>
                        <td>Waist</td>
                        <td>
                            <input type="text" name="waist" required placeholder="38" value="<?php echo $res['M_Waist']; ?>" class='w3-input'>
                        </td>
                    </tr>
                    <tr>
                        <td>Sleeve Length</td>
                        <td>
                            <input type="text" name="sleeve" required placeholder="25" value="<?php echo $res['M_Sleeve']; ?>" class='w3-input'>
                        </td>
                    </tr>
                    <tr>
                        <td>Shoulder</td>
                        <td>
                            <input type="text" name="shoulder" required placeholder="17.5" value="<?php echo $res['M_Shoulder']; ?>" class='w3-input'>
                        </td>
                    </tr>
                    <tr>
                        <td>Neck</td>
                        <td>
                            <input type="text" name="neck" required placeholder="15.5" value="<?php echo $res['M_Neck']; ?>" class='w3-input'>
                        </td>
                    </tr>
                    <tr>
                        <td>Length</td>
                        <td>
                            <input type="text" name="length" required placeholder="28" value="<?php echo $res['M_Length']; ?>" class='w3-input'>
                        </td>
                    </tr>  
                    <tr align="center">
                       <td colspan="2">
                            <div class="allbutton">
                            <input type="submit" name="confirm" value="Confirm">
                            </div>
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
<?php   


if (isset($_POST['confirm'])) {

    $name = $_POST['uname'];
    $chest = $_POST['chest'];
    $waist = $_POST['waist'];
    $sleeve = $_POST['sleeve'];
    $shoulder = $_POST['shoulder'];
    $neck = $_POST['neck'];
    $length = $_POST['length'];
    $mid = $_GET['id'];

    $record = "UPDATE measurment_info SET User_Name = '$name', M_Chest = '$chest', M_Waist = '$waist', M_Sleeve = '$sleeve', M_Shoulder = '$shoulder', M_Neck = '$neck', M_Length = '$length' WHERE M_id = '$mid'";

    if (mysqli_query($con, $record)) {
        //echo "Data Inserted ";
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
