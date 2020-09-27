<?php 
include("include\heading_after_login.php");
require_once('controlar\admincontrolar.php');
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Admin'))
{
   header("Location: login.php");
}
if(isset($_GET['parem']) && $_GET['parem']=="delete"){
  $id=$_GET['id'];
  deleteormselleranduser($id);
}
?>
<body>
<div class="coverage">
<div class="delin">

<div class ="tab container">
<?php include("page_section\Admin_section\menu.php");?>
<div class ="center "style="margin-left:40%;">
<input type="text"placeholder="search"id ="search"onkeyup="searchseller(this)"> 
</div>
<div style="margin-left:25px;"><b>SellerInfo:</b></div>
       
    <div class=" css-11rzb4j" style=" margin-left:20px;width:220px;"></div>
     </div>
<div class="row"style="margin-left:1%;margin-right:1%;margin-top:35px;">
<div id ="seller">
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
   $value= GetsellerInfo();
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
</div>
</div>
</div>

</div>
</div>
<?php include("include\body.php");?>    
</body>
<script>
  function searchseller(input){
  var searchkey= input.value ;
 //window.alert(searchkey);
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
      debugger;
      document.getElementById("seller").innerHTML =this.responseText;
      //document.alert(this.responseText);
    }
  };
  xhttp.open("GET","searchad.php?key="+searchkey+"&page=sellerinfoad",true);
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