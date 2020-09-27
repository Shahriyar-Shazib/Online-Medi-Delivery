<?php 
session_start();
include("include\heading_after_login.php");
require_once('controlar\Sellercontrolar.php');
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Shop Owner'))
{
   header("Location: login.php");
}
?>
<body>
<div class="coverage">
<div class="delin">

<div class ="tab container">
<?php include("page_section\Seller_section\menubar.php");?>
<div style="margin-left:25px;"><b>Delivery info:</b></div>
       
    <div class=" css-11rzb4j" style=" margin-left:20px;width:220px;"></div>
     </div>
<div class="row"style="margin-left:1%;margin-right:1%;margin-top:35px;">

<table class="table table-hover table-dark "style="width:100%;font-size:13px;">
  <thead>
    <tr>
      <th scope="col">OrderId</th>
      <th scope="col">Del_userName</th>
      <th scope="col">ShopUsername</th>
      <th scope="col">Shopid</th>
      <th scope="col">shop_Name</th>
      <th scope="col">ReceiverName</th>
      <th scope="col">ReceiverAdd</th>
      <th scope="col">Reciever District</th>
      <th scope="col">Reciever phonenum</th>
      <th scope="col">pay_status</th>
      <th scope="col">del_status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   <?php
  $value=GetDeliveryInfo($_SESSION["username"]);
   foreach($value as $values){
    echo "<tr>";
    echo "<td>".$values["OrderId"]."</td>";
    echo "<td>".$values["Del_userName"]."</td>";
    echo "<td>".$values["ShopUsername"]."</td>";
    echo "<td>".$values["Shopid"]."</td>";
    echo "<td>".$values["shop_Name"]."</td>";
    echo "<td>".$values["ReceiverName"]."</td>";
    echo "<td>".$values["ReceiverAdd"]."</td>";
    echo "<td>".$values["Reciever District"]."</td>";
    echo "<td>".$values["Reciever phonenum"]."</td>";
    echo "<td>".$values["pay_status"]."</td>";
    echo "<td>".$values["del_status"]."</td>";
    echo '<td><a href="trac.php?id='.$values["OrderId"].'" class="btn btn-Danger">Trac ';
    echo "</tr>";

   }


   ?>
  </tbody>
</table>
</div>
</div>

</div>
</div>
<?php include("include\body.php");?>    
</body>
<style>
.delin{
            
            background-color: lightslategray;
            margin-right: 0px;
            margin-left: 0px;
}
.tab{
    margin-top:35px;
    margin-bottom:30px;
}
</style>
<?php
  include('include\footer.php');
?>