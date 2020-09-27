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
<div style="margin-left:25px;"><b> Pending Delivery info:</b></div>
       
    <div class=" css-11rzb4j" style=" margin-left:20px;width:220px;"></div>
     </div>
<div class="row"style="margin-left:1%;margin-right:1%;margin-top:35px;">

<table class="table table-hover table-dark "style="width:100%;font-size:13px;">
  <thead>
    <tr>
      <th scope="col">OrderId</th>
      <th scope="col">Shop Owner Username</th>
      <th scope="col">shop id</th>
      <th scope="col">Shop Address</th>
      <th scope="col">Shop district</th>
      <th scope="col">ReceiverName</th>
      <th scope="col">ReceiverAdd</th>
      <th scope="col">Reciever District</th>
      <th scope="col">Reciever phonenum</th>
      <th scope="col">pay_Type</th>
      
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   <?php
  $value=GetDeliveryReq($_SESSION["username"]);
  foreach($value as $v)
  {
    echo "<tr>";
    echo "<td>".$v["OrderId"]."</td>";
    echo "<td>".$v["Shop_Owner_Username"]."</td>";
    echo "<td>".$v["ShopId"]."</td>";
    echo "<td>".$v["Shop_add"]."</td>";
    echo "<td>".$v["Shop District"]."</td>";
    echo "<td>".$v["Reciver name"]."</td>";
    echo "<td>".$v["reciever Address"]."</td>";
    echo "<td>".$v["Reciever District"]."</td>";
    echo "<td>".$v["reciever phone"]."</td>";
    echo "<td>".$v["payment type"]."</td>";
    
    echo '<td><a href="editdelreqseller.php?id='.$v["OrderId"].'" class="btn btn-Danger">Edit ';
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