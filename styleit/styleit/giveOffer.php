<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="func1.js"></script>
<?php
include_once ("Config.php");
include 'tailorDashboard.php';

$id = $_GET['id'];
?>

<head>
    <style>
        tr, td, th{
        padding: 2% 20px;
        font-size: 20px;
        height: 85%;
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

        .bgheading{
        background: #1C4E80;
      }
    </style>
</head>

<div class="home-content">
<form method="post">
    <table border="1" class="table1">
        <tr class="bgheading">
            <td style="width: 30%;" class="head">
                <span id="head1"><h2 class="heading">Offer</h2></span>    
                <span id="head2" class="links"><a href="offerT.php" class="link"><i class="bi-x-square size"></i></a></span>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                
                    <?php
                    
                    $result = mysqli_query($con,"SELECT * FROM design_info INNER JOIN user_info ON design_info.U_id = user_info.U_id JOIN measurment_info on measurment_info.M_id = design_info.M_id WHERE Design_id='$id' ");
                    

                    while ($res = mysqli_fetch_array($result)) {
                        
                            $_GLOBALS['uid'] = $res['U_id'];
                            $_GLOBALS['mid'] = $res['M_id'];
                            ?>
                            <tr>
                                <td>Name</td>
                                <td><?php echo $res['U_Name'];?></td>
                                <td>Chest</td>
                                <td><?php echo $res['M_Chest'];?></td>
                            </tr>
                            <tr>
                                <td>Material Name</td>
                                <td><?php echo $res['Material_Name'];?></td>
                                <td>Waist</td>
                                <td><?php echo $res['M_Waist'];?></td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td style="background-color: <?php echo $res['Material_Color'];?>;"></td>
                                <td>Sleeve</td>
                                <td><?php echo $res['M_Sleeve'];?></td>
                            </tr>
                            <tr>
                                <td>Pattern</td>
                                <td><?php echo $res['Pattern_Type'];?></td>
                                <td>Shoulder</td>
                                <td><?php echo $res['M_Shoulder'];?></td>
                            </tr>
                            <tr>
                                <td>Collar</td>
                                <td><?php echo $res['Collar_Type'];?></td>
                                <td>Neck</td>
                                <td><?php echo $res['M_Neck'];?></td>
                            </tr>
                            <tr>
                                <td>Sleeve</td>
                                <td><?php echo $res['Sleeve_Type'];?></td>
                                <td>Length</td>
                                <td><?php echo $res['M_Length'];?></td>
                            </tr>
                            <tr>
                                <td>Offer</td>
                                <td>
                                    <input type="text" name="price" placeholder="Price" pattern="[0-9]{1,10}" class="w3-input" data-error="Please Enter Valid Price" required>
                                </td>
                            </tr>  
                            <tr>
                                <td colspan="2" align="center">
                                    <div class="allbutton">
                                        <input type="submit" name="offer" value="Offer">                     
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

if (isset($_POST['offer'])) {

    $price = $_POST['price'];
    $tid = $_SESSION['tid'];
    $did = $id;
    $uid = $_GLOBALS['uid'];
    $mid = $_GLOBALS['mid'];

    $record = "INSERT INTO offer_info(U_id,Tailor_id,Design_id,Offer_Price,Offer_Answer,M_id) VALUES ('$uid','$tid','$did','$price','Pending','$mid')";

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
