<?php 
include("include\heading_after_login.php");
require_once('controlar\admincontrolar.php');
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Admin'))
{
   header("Location: login.php");
}
$id=$_REQUEST['id'];
//echo $id;
$value=GetsellerInfoseller($id);



?>
<div class="coverage">
<div class="delin">

<div class ="tab container">
<?php include("page_section\Admin_section\menu.php");?>
<div style="margin-left:25px;"><b>Edit Seller request:</b></div>
       
    <div class=" css-11rzb4j" style=" margin-left:20px;width:220px;"></div>
     </div>
<div class="row"style="margin-left:40%;margin-right:1%;margin-top:35px;">
<form action="" method ="post">
<table>
   <tr>
   <td>
   <b> User Name:</b>
   </td>
   <td>
   <input class="form-control"type="text"name="uname"value="<?php echo $value["Username"];?>"readonly>
   </td>
   <td>
   <input class="form-control"type="hidden"name="pass"value="<?php echo $value["password"];?>"readonly>
   <input class="form-control"type="hidden"name="status"value="<?php echo $value["type"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Name :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="name"value="<?php echo $value["Name"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Address :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="add"value="<?php echo $value["Address"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>District:</b>
   </td>
   <td>
   <input class="form-control"type="text"name="dis"value="<?php echo $value["District"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Phone num :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="phn"value="<?php echo $value["Phonenum"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Email :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="mail"value="<?php echo $value["email"];?>"readonly>
   </td>
   </tr>
   <tr >
   <td>
   <b>Shop Name :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="sname"value="<?php echo $value["Shopname"];?>"readonly>
   </td>
   </tr>
   <tr>
   <td>
   <b>Shop Address :</b>
   </td>
   <td>
   <input class="form-control"type="text"name="sadd"value="<?php echo $value["Shop address"];?>"readonly>
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
   <tr>
   <td>
   <b>Shop Id :</b>
   </td>
   <td>     
   <input style="color:red;" class="form-control" type="text"name="sid">
   </td>
   <td><?php echo $Errshopid;?></td>
   </tr>
   
<tr>
<td colspan="2">
<input style ="margin-top:40px;margin-left:60px;margin-bottom:40px;"type="submit" name ="addshopid" value="save" class ="btn btn-primary center">
</td>
</tr>
   
  
  </table>
   </form>
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