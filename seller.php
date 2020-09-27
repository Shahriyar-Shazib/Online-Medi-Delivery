<?php
    session_start();
     include('include\heading_after_login.php');
     require_once('controlar\Sellercontrolar.php');
     if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Shop Owner'))
     {
        header("Location: login.php");
     }

    ?>
    <body>
    <div class="coverage">
        <div class ="menubtn " >
        <div class =" row " style="margin-top:25px">
        <div class="container">
        <?php include("page_section\Seller_section\menubar.php")?>
        </div>
            
            <div class ="user-info "style="text-align:center;width:200%">
                <div class=" del-info"  style="margin-left:0%;padding-left:0px">
                    <b>User Info</b>
                    
                </div>
                <div class=" css-11rzb4j" style="width:150px;margin-left:45%;margin-bottom:20px"></div>

                <div class="info"style="font-size:20px; margin-bottom:35px; margin-left:40%;">
                   <table style="font-size:15px;" >
                
                    <?php
                    $value=userinfo($_SESSION["username"]);
                    //echo $value['Name'];
                    echo "<tr>";
                    echo "<td><b>Name:</b></td>";
                    echo "<td>".$value['Name']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b>Email:</b></td>";
                    echo "<td>".$value['Email']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b>Phone Number:</b></td>";
                    echo "<td>".$value['Phone_num']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b>Address:</b></td>";
                    echo "<td>".$value['Address']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b>District:</b></td>";
                    echo "<td>".$value['District']."</td>";
                    echo "</tr>";  
                    echo "<tr>";
                    echo "<td><b>Shope Name:</b></td>";
                    echo "<td>".$value['ShopName']."</td>";
                    echo "</tr>"; 
                    echo "<tr>";
                    echo "<td><b>Shope Id:</b></td>";
                    echo "<td>".$value['ShopId']."</td>";
                    echo "</tr>"; 
                    echo "<tr>";
                    echo "<td><b>Shope Address:</b></td>";
                    echo "<td>".$value['Shop_add']."</td>";
                    echo "</tr>"; 
                    echo "<tr>";
                    echo "<td><b>Shope District:</b></td>";
                    echo "<td>".$value['ShopDistrict']."</td>";
                    echo "</tr>"; 
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
     include('include\body.php');
    ?>
    </body>
    <style>
        .menubtn{
            
            background-color: lightslategray;
            margin-right: 0px;
            margin-left: 0px;
    
        }
        .del-info{
            font-size: 15px;
           
            padding: 15px;
        }
    </style>
    <?php
     include('include\footer.php');
    ?>