<?php
require_once("controlar\admincontrolar.php");
$key=$_REQUEST["key"];

$page=$_REQUEST["page"];



//echo $value;
if($page == 'delmaninfoad')
{
 
?>
        <table class="table table-hover table-dark "style="width:100%;font-size:20px">
        <thead>
          <tr>
            <th scope="col">UserName</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">District</th>
            <th scope="col">PhoneNum</th>
            <th scope="col">Email</th>
            <th scope="col">Transport Type</th>
            <th></th>
                <th></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        <?php
         $value=searchdelman($key);
        foreach($value as $values){
         
          echo "<tr>";
          echo "<td>".$values["Username"]."</td>";
          echo "<td>".$values["Name"]."</td>";
          echo "<td>".$values["Address"]."</td>";
          echo "<td>".$values["District"]."</td>";
          echo "<td>".$values["phone num"]."</td>";
          echo "<td>".$values["email"]."</td>";
          echo "<td>".$values["transport type"]."</td>";
          echo "<td></td>";
          echo '<td><a href="Del_man_info_admin.php?parem=delete&amp;id='.$values["Username"].'" class="btn btn-danger">Delete</td>';

          echo "</tr>";

        }

        ?>
        </tbody>
      </table>
<?php 
}
if($page == 'delinfoad')
{
?>
    <table class="table table-hover table-dark "style="width:100%;font-size:15px;">
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
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   <?php
  $value=searchdelInfo($key);
  //echo $value;
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
    echo "</tr>";

   }

   ?>
  </tbody>
</table>
<?php 
}
if($page == 'sellerinfoad')
{
?>
<table class="table table-hover table-dark "style="width:100%;font-size:15px">
  <thead>
    <tr>
      <th scope="col">UserName</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">District</th>
      <th scope="col">PhoneNum</th>
      <th scope="col">Email</th>
      <th scope="col">ShopName </th>
      <th scope="col">ShopId</th>
      <th scope="col">Shop_add</th>
      <th scope="col">ShopDistrict</th>
    
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   <?php
   $value= searchsellerInfo($key);
   foreach($value as $values){
    echo "<tr>";
    echo "<td>".$values["Username"]."</td>";
    echo "<td>".$values["Name"]."</td>";
    echo "<td>".$values["Address"]."</td>";
    echo "<td>".$values["District"]."</td>";
    echo "<td>".$values["Phone_num"]."</td>";
    echo "<td>".$values["Email"]."</td>";
    echo "<td>".$values["ShopName"]."</td>";
    echo "<td>".$values["ShopId"]."</td>";
    echo "<td>".$values["Shop_add"]."</td>";
    echo "<td>".$values["ShopDistrict"]."</td>";
 
    echo '<td><a href="sellerinfoad.php?parem=delete&amp;id='.$values["Username"].'" class="btn btn-danger">Delete</td>';

    echo "</tr>";

   }

   ?>
  </tbody>
</table>
<?php
}
?>