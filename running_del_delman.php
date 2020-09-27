<?php 
session_start();
include("include\heading_after_login.php");
require_once('controlar\DeliveryControlar.php');
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Delivery Man'))
{
   header("Location: login.php");
}
?>
<body>
<div class="coverage">
<div class="delin">
<div><input type="hidden"id ="uname"value="<?php echo $_SESSION["username"]?>"></div>
<div class ="tab container">
<?php include("page_section\Delman\menu.php");?>
<div class ="center "style="margin-left:40%;">
<input type="text" placeholder="search" id ="search"onkeyup="searchdelinfo(this)"></div>
<div style="margin-left:25px;"><b>Running Delivery:</b></div>
       
    <div class=" css-11rzb4j" style=" margin-left:20px;width:220px;"></div>
     </div>
<div class="row"style="margin-left:1%;margin-right:1%;margin-top:35px;">
 <div id = "delinfo">
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
  
    $value=GetDeliveryInfo($_SESSION["username"]);
   // echo $value;
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
</div>
</div>
</div>

</div>
</div>
<?php include("include\body.php");?>    
</body>
<script>
  function searchdelinfo(input){
    debugger;
  var searchkey= input.value ;
  var userid= document.getElementById("uname").value;
// window.alert(userid);
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
 
      document.getElementById("delinfo").innerHTML =this.responseText;
      //document.alert(this.responseText);
    }
  };
  xhttp.open("GET","searchdalman.php?key="+searchkey+"&uid="+userid+"&page=delmaninfodel",true);
  xhttp.send();
}
</script>
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