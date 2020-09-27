<?php
require_once("controlar\DeliveryControlar.php");
$key=$_REQUEST["key"];

$page=$_REQUEST["page"];
$uid=$_REQUEST["uid"];


//echo $value;
if($page == 'delmaninfodel')
{
?>
<table class="table table-hover table-dark "style="width:100%;font-size:15px">
  <thead>
    <tr>
      <th scope="col">OrderId</th>
      <th scope="col">Del_userName</th>
      <th scope="col">ShopUsername</th>
      <th scope="col">Shopid</th>
      <th scope="col">shop_Owner_Name</th>
      <th scope="col">ReceiverName</th>
      <th scope="col">ReceiverAdd</th>
      <th scope="col">Reciever District</th>
      <th scope="col">Reciever phonenum</th>
      <th scope="col">pay_status</th>
      <th scope="col">del_status</th>
      <th></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   <?php
    $value=searchdelInfo($key,$uid);
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
     echo '<td><a href="editorderdelman.php?id='.$values["OrderId"].'" class="btn btn-danger">Edit</td>';
     echo "</tr>";

   }

   ?>
  </tbody>
</table>
<?php
}
?>