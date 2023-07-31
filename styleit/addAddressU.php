<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func.js"></script>
<script src="alert.min.js"></script>
<?php
include_once ("Config.php");
include 'userDashboard.php';
?>
<style>
    .size{
        font-size: 48px;
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
                <h2 class="heading">Add Address</h2>
                <span id="head2" class="links"><a href="manageAccountU.php" class="link"><i class="bi-x-square size"></i></a></span>
            </td>
        </tr>
        <tr>
            <td>
                <table class="table3">
                    <tr>
                        <td>
                            State:
                        </td>
                        <td>
                            <select name="state" class="w3-input" onchange="stateValue(this.value);">
                                <option selected disabled>--</option>
                                <?php
                                $result = mysqli_query($con,"SELECT * FROM state_info");

                                while ($res = mysqli_fetch_array($result)) {
                                    echo "<option value='".$res['State_id'] . "'>".$res['State_Name']."</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            City:
                        </td>
                        <td>
                            <select name="city" class="w3-input" id="city">
                                <option selected disabled>--</option> 
                            </select>
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            Zipcode:
                        </td>
                        <td>
                            <input type="text" name="zip" id="zip" class="w3-input" required placeholder="Zipcode">
                        </td>                       
                    
                        <td>
                            Address:
                        </td>
                        <td colspan="3">
                             <textarea name="address" id="address" style="height: 70px" class="w3-input" placeholder="Address" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center">
                            <div class="allbutton">
                               <input type="submit" name="add" value="Add"> 
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


if (isset($_POST['add'])) {

    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $address = $_POST['address'];
    $uid = $_SESSION['uid'];
    $states = mysqli_query($con,"SELECT * FROM state_info");
    while($res = mysqli_fetch_array($states)){
        if ($state == $res['State_id']) {
            $_SESSION['state'] = $res['State_Name'];
        }
    }
    $stateName = $_SESSION['state'];

    $record = "INSERT INTO `address_info`(`U_id`, `Address_City`, `Address_State`, `Address_Street`, `Address_Zipcode`) VALUES ('$uid','$city','$stateName','$address','$zip')";
    


    
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

