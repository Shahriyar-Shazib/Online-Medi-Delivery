<?php 
include("include\heading_after_login.php");
require_once('controlar\admincontrolar.php'); 
$Del_id=$_REQUEST["id"];
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Admin'))
{
   header("Location: login.php");
}

$values=getdel_req_infobyid ($Del_id);

?>
<body>
<div class ="tab container">
<?php include("page_section\Admin_section\menu.php");?>
<div style="margin-left:25px;"><b>Assign Deliveryman :</b></div>
       
    <div class=" css-11rzb4j" style=" margin-left:20px;width:220px;"></div>
     </div>
<div class="row center"style="margin-left:40%;margin-right:1%;margin-top:35px;">
<div class="form-group center">
<?php
foreach($values as $value)
{
  $dis=$value["Reciever District"];
  $result=getdelmanforassign($dis);
 
  
?>
   <form action=""method="post">
   <table>
   <tr>
   <td>
   <b> order ID:</b>
   </td>
   <td>
   <input class="form-control"type="text"name="odrid"value="<?php echo $value["OrderId"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Shop Ownwe User Name :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="shop_ownwer_uname"value="<?php echo $value["Shop_Owner_Username"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Shop Name:</b>
   </td>
   <td>
   <input class="form-control"type="text"name="sname"value="<?php echo $value["Shop_name"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Shop ID:</b>
   </td>
   <td>
   <input class="form-control"type="text"name="sid"value="<?php echo $value["ShopId"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Shop Address :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="sadd"value="<?php echo $value["Shop_add"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Shop District :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="sdis"value="<?php echo $value["Shop District"];?>"readonly>
   </td>
   </tr>
   <tr >
   <td>
   <b>Reciver Name :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="rname"value="<?php echo $value["Reciver name"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Reciever Address :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="radd"value="<?php echo $value["reciever Address"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Reciever District :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="rdis"value="<?php echo $value["Reciever District"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Reciever phone :</b>
   </td>
   <td>
   <input class="form-control" type="text"name="rphone"value="<?php echo $value["reciever phone"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Payment Type:</b>
   </td>
   <td>
   <input class="form-control"type="text"name="type"value="<?php echo $value["payment type"];?>"readonly>
   </td>
   </tr>
   <td>
   <b>Delivery man:</b>
   </td>
   <td>
      <select class="form-control"style="color:red;" name='deluser'>
      <?php  
      foreach ($result as $del) {  
      echo '<option value="'.$del['Username'].'"selected>'.$del["Name"].'</option>';
      }
      ?>
   </select>
   </td>
   <tr>
   </tr>
   
<tr>
<td colspan="2">
<input style ="margin-top:40px;margin-left:60px"type="submit" name ="assindelman" value="Assign Delivery Man & Save Delivery" class ="btn btn-primary center">
</td>
</tr>
   
  
  </table>
   </form>

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