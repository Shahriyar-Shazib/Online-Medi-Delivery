<?php 
include("include\heading_after_login.php");
require_once('controlar\admincontrolar.php');
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Admin'))
{
  header("Location: login.php");
}
if(isset($_GET['parem']) && $_GET['parem']=="delete"){
  $id=$_GET['id'];
  deletefromuserreq($id);
}
if(isset($_GET['parem']) && $_GET['parem']=="accept"){
  $id=$_GET['id'];
  ($id);
}
?>
<body>
<div class="coverage">
<div class="delin">

<div class ="tab container">
<?php include("page_section\Admin_section\menu.php");?>
<div style="margin-left:25px;"><b>Signup request:</b></div>
       
    <div class=" css-11rzb4j" style=" margin-left:20px;width:220px;"></div>
     </div>
<div class="row"style="margin-left:1%;margin-right:1%;margin-top:35px;">
<!--<form action ="" method="post">!-->
    <table class="table table-hover table-dark "style="width:100% ; font-size:12px">
  <thead>
    <tr>
      <th scope="col">UserName</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">District</th>
      <th scope="col">PhoneNum</th>
      <th scope="col">Email</th>
      <th scope="col">Type</th>
      <th scope="col">ShopName</th>
      <th scope="col">ShopAddress</th>
      <th scope="col">ShopArea</th>
      <th scope="col">Type Of Transport</th>
      <th scope="col">shopID</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
   <?php
   $value=Signupreq();
   foreach($value as $values){

    echo "<tr>";
    echo "<td>".$values["Username"]."</td>";
    echo "<td>".$values["Name"]."</td>";
    echo "<td>".$values["Address"]."</td>";
    echo "<td>".$values["District"]."</td>";
    echo "<td>".$values["Phonenum"]."</td>";
    echo "<td>".$values["email"]."</td>";
    echo "<td>".$values["type"]."</td>";
    echo "<td>".$values["Shopname"]."</td>";
    echo "<td>".$values["Shop address"]."</td>";
    echo "<td>".$values["Shop District"]."</td>";
    echo "<td>".$values["type of vachile"]."</td>";
  
    if ($values["type"]=="Delivery Man"){
        echo "<td></td>";
      
        echo '<td><a href="signupreqadmin.php?parem=accept&amp;id='.$values["Username"].'" class="btn btn-success">accept</a> <a href="signupreqadmin.php?parem=delete&amp;id='.$values["Username"].'"class="btn btn-danger">Delete</a></td>';
      echo '';
      echo "</tr>";
    }
    else{

  echo '<td><a href="editseller_reqad.php?parem=accept&amp;id='.$values["Username"].'" class="btn btn-success">Edit</a> <a href="signupreqadmin.php?parem=delete&amp;id='.$values["Username"].'"class="btn btn-danger">Delete</a></td>';
    echo '';
    echo "</tr>";
    }
    
  
   }

   ?>
  
  </tbody>
  
</table>
<!--</form>!-->
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