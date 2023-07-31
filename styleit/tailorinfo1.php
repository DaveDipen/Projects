<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
<?php
include_once ("Config.php");
include 'userDashboard.php';

?>
<div class="home-content">
	<form method="post">
    <table border="1" class="table1">
        <tr class="bgheading">
            <td style="width: 30%;" class="head">
                <span id="head1"><h2 class="heading">Tailor</h2></span>    
                <span id="head2" class="links"><a href="offer.php" class="link"><i class="bi-x-square size"></i></a></span>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <?php
                    $tid = $_GET['id'];
                    $result = mysqli_query($con,"SELECT * FROM tailor_info WHERE Tailor_id = '$tid'");
                    
                    while ($res = mysqli_fetch_array($result)) {

                    ?>      
                            <tr>
                                <td><h3>Contact Details</h3></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td><?php echo $res['Tailor_Name'];?></td>
                                <td>Mobile No</td>
                                <td><?php echo $res['Tailor_MobileNo'];?></td>
                                
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $res['Tailor_Email'];?></td>
                                <td>Organization</td>
                                <td><?php echo $res['Tailor_Org'];?></td>
                            </tr>
                            <tr>
                                <td>
                                    <h3><a href="viewCollection.php?id=<?php echo $tid ?>">View Collection</a></h3>
                                </td>
                            </tr>
                            <?php
                        }
                        $result = mysqli_query($con," SELECT * FROM tailor_info JOIN address_info ON address_info.Tailor_id = tailor_info.Tailor_id WHERE tailor_info.Tailor_id = '$tid'");
                        $n = 1;
                        while ($res = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><h3><?php echo "Address".$n; $n++?></h3></td>
                            </tr>
                            </tr>
                                <td>State</td>
                                <td><?php echo $res['Address_State'];?></td>
                                <td>City</td>
                                <td><?php echo $res['Address_City'];?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><?php echo $res['Address_Street'];?></td>
                                <td>Zipcode</td>
                                <td><?php echo $res['Address_Zipcode'];?></td>
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