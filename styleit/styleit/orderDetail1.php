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
    </style>
</head>

<div class="home-content">
<form method="post">
    <table border="1" class="table1">
        <tr class="bgheading">
            <td style="width: 30%;" class="head">
                <span id="head1"><h2 class="heading">Order</h2></span>    
                <span id="head2" class="links"><a href="pendingOrder.php" class="link"><i class="bi-x-square size"></i></a></span>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                
                    <?php
                    
                    $result = mysqli_query($con,"SELECT * FROM order_info JOIN user_info ON order_info.U_id = user_info.U_id JOIN tailor_info ON order_info.Tailor_id = tailor_info.Tailor_id JOIN collection_info ON order_info.Collection_id = collection_info.Collection_id  JOIN measurment_info ON measurment_info.M_id = order_info.M_id WHERE order_info.Order_id = '$id'");
                    
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
                            	<td>Order Cost</td>
                            	<td><?php echo $res['Order_Cost'];?></td>
                            	<td>Order Date</td>
                            	<td><?php echo $res['Order_Date'];?></td>
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