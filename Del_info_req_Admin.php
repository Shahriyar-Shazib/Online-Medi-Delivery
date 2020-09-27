<?php 
include("include\heading_after_login.php");
require_once('controlar\admincontrolar.php');
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Admin'))
{
   header("Location: login.php");
}

if(isset($_GET['parem']) && $_GET['parem']=="delete"){
  $id=$_GET['id'];
  deletefromdeliveryreq($id);
}
?>
<body>
<div class="coverage">
<div class="delin">

<div class ="tab container">
<?php include("page_section\Admin_section\menu.php");?>
<div style="margin-left:25px;"><b>Delivery Request:</b></div>
       
    <div class=" css-11rzb4j" style=" margin-left:20px;width:220px;"></div>
     </div>
<div class="row"style="margin-left:1%;margin-right:1%;margin-top:35px;">

    <table class="table table-hover table-dark "style="width:100%;Font-size:15px">
  <thead>
    <tr>
    <th scope="col">OrderId</th>
      <th scope="col">Shop_Owner_Username</th>
      <th scope="col">ShopId</th>
      <th scope="col">Shop_add</th>
      <th scope="col">Shop District</th>
      <th scope="col">Reciver name</th>
      <th scope="col">reciever Address</th>
      <th scope="col">Reciever District</th>
      <th scope="col">reciever phone</th>
      <th scope="col">payment type</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   <?php
   $value=GetDeliveryReq();
   foreach($value as $values){
    echo "<tr>";
    echo "<td>".$values["OrderId"]."</td>";
    echo "<td>".$values["Shop_Owner_Username"]."</td>";
    echo "<td>".$values["ShopId"]."</td>";
    echo "<td>".$values["Shop_add"]."</td>";
    echo "<td>".$values["Shop District"]."</td>";
    echo "<td>".$values["Reciver name"]."</td>";
    echo "<td>".$values["reciever Address"]."</td>";
    echo "<td>".$values["Reciever District"]."</td>";
    echo "<td>".$values["reciever phone"]."</td>";
    echo "<td>".$values["payment type"]."</td>";
   
    echo '<td><a href="editdelreqad.php?id='.$values["OrderId"].'" class="btn btn-success">Edit </a> <a href="Del_info_req_Admin.php?parem=delete&amp;id='.$values["OrderId"].'"class="btn btn-danger">Delete</a></td>';
    
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