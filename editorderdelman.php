<?php 
include("include\heading_after_login.php");
require_once 'controlar\DeliveryControlar.php';
$Del_id=$_REQUEST["id"];
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Delivery Man'))
{
   header("Location: login.php");
}

$values=GetDeliveryInfoedit ($Del_id);

?>
<body>
<div class ="tab container">
<?php include("page_section\Delman\menu.php");?>
<div style="margin-left:25px;"><b>Assign Deliveryman :</b></div>
       
    <div class=" css-11rzb4j" style=" margin-left:20px;width:220px;"></div>
     </div>
<div class="row center"style="margin-left:40%;margin-right:1%;margin-top:35px;">
<div class="form-group center">
<?php
foreach($values as $value)
{
 
?>
<p><b> order ID:</b> <?php echo $value["OrderId"]; ?><br></p>
   <p><b>Shop Ownwe User Name : </b><?php echo $value["ShopUsername"]; ?><br></p>
   <p><b>Shop ID:</b> <?php echo $value["Shopid"]; ?><br></p>
   <p><b>Shop Owner Name :</b> <?php echo $value["shop_Name"]; ?><br></p>
   <p><b>Reciver Name :</b> <?php echo $value["ReceiverName"];?><br></p>
   <p><b>Reciver Address :</b> <?php echo $value["ReceiverAdd"];?><br></p>
   <p><b>Delivery man Username: </b><?php echo $value["Del_userName"];?><br></p>
   <p><b>Reciever District : </b><?php echo $value["Reciever District"];?><br></p>
   <p><b>Reciever Phonenum:</b> <?php echo $value["Reciever phonenum"];?><br></p>
   <form action="" method ="post">
   <p><b>DELIVERY STATUS:</b> </P>
   <select name="status" id="status">
   
   <option value="pending">pending</option>
   <option value="processing">Processing</option>
   <option value="picked">picked</option>
   <option value="shiped">shiped</option>
   <option value="delivered">delivered</option>
   </select><br>
   <input type="hidden" name="orderid" value ="<?php echo $value["OrderId"]; ?>">
 <input type="submit" style ="margin:30px" name ="submit"value ="update">

   </form>
   
  <?php  
 

  ?>
  </select>
  


</div>

<?php  
}
?>
<div>
   
</div>

   
</div>
</div>

</div>
</div>
    
<?php
  include('include\body.php');
?>

</body>
<?php
  include('include\footer.php');
?>