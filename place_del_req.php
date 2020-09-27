<?php 
session_start();
include("include\heading_after_login.php");
require_once('controlar\Sellercontrolar.php');
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Shop Owner'))
{
   header("Location: login.php");
}
$value=userinfo($_SESSION["username"]);
$result=getall_area();
//foreach($value as $v)
//{
 // echo $_SESSION["username"];
//}
?>
<script>
function validateform()
{
  //debugger;
  var odid=document.getElementById('odid').value;
   var rname=document.getElementById('rname').value;
   var radd=document.getElementById('radd').value;
   var rphn=document.getElementById('rphn').value;
   if (odid== "" || rname== "" || radd==''|| rphne=='' )
   {
     alert("please insert all the values that required")
     return false;
   }
 
} 
</script>
<body>

<div class="coverage placedel">
<div class="place_del">




<?php include("page_section\Seller_section\menubar.php");?>
<div class ="center">

<form action="" method="post" onsubmit="return validateform()">

<table class="tab "style="margin-left:30%;margin-top:35px;">
        <tr>
            <td>
              <div class="Orderidt text">
              OrderId:
              </div>
            </td>
            <td>
              <input class="form-group Orderidb box"type="text" id ="odid" name="odid" placeholder="Orderid" aria-label="cname">
            </td>
            <td><p style="color:red">*<?php echo $errOrderid; ?></p></td>
            
          </tr>
          <tr>
            <td>
              <div class="Shopownert text">
              Shop Owner User Name:
              </div>
            </td>
            <td>
              <input class="form-group Shopownerb box"type="text" name ="shopusername" placeholder="Username Shop owner" aria-label="cname" value="<?php echo $value["Username"];?>"readonly >
            </td>
            
          </tr>
          <tr>
            <td>
                <div class="midt text">
                Shop Id:
              </div>
            </td>
            <td>
             <input class="form-group midb box"type="text" name ="marchentid"placeholder="marchant Id" aria-label="mid"value="<?php echo $value["ShopId"];?>"readonly >
            </td>
          </tr>
          <tr>
            <td>
                <div class="midt text">
                Shop Name:
              </div>
            </td>
            <td>
             <input class="form-group midb box"type="text" name ="marchentname"placeholder="marchant name" aria-label="mid"value="<?php echo $value["ShopName"];?>"readonly >
            </td>
          </tr>
          <tr>
            <td>
                <div class="saddt text">
                Shop Address:
              </div>
            </td>
            <td>
             <input class="form-group saddb box"type="text" name="shopadd" placeholder="Shop Address" aria-label="mid"value="<?php echo $value["Shop_add"];?>"readonly>
            </td>
          </tr>
          <tr>
            <td>
                <div class="sdist text">
                Shop District:
              </div>
            </td>
            <td>
             <input class="form-group sdisb box"type="text" name ="shopdis" placeholder="Shop District" aria-label="mid" value="<?php echo $value["ShopDistrict"];?>"readonly>
            </td>
          </tr>
          <tr>
            <td>
              <div class="cnamet text">
              Reciver Name:
              </div>
            </td>
            <td>
              <input class="form-group cnameb box"type="text" id="rname"name ="rname" placeholder="Reciever Name" aria-label="cname">
            </td>
            <td><p style="color:red">*<?php echo $errrname; ?></p></td>
          </tr>
          <tr>
            <td>
                <div class="casddresst text">
                Reciever Address:
              </div>
            </td>
            <td>
            <input class="delareab box"type="text"id ="radd" name ="radd"placeholder="Select Reciever area" aria-label="delarea">
            
            </td><td><p style="color:red">*<?php echo $errradd; ?></p></td>
          </tr>
          <tr>
            <td>
                <div class="cphonet text">
                Reciever Phone:
              </div>
            </td>
            <td>
             <input class="cphoneb box"type="text" id ="rphn"name ="rphone" placeholder=" Reciever Phone" aria-label="cphone">
            </td>
            <td><p style="color:red">*<?php echo $errrphone; ?></p></td>
          </tr>
          <tr>
            <td>
                <div class="delareat text">
                Select Reciever Area:
              </div>
            </td>
            <td>
            <select class="form-group casddressb box" id="rarea" name ="rdis">
                    
                    <?php  
                    foreach ($result as $del) {  
                    echo '<option value="'.$del['name'].'"selected>'.$del["name"].'</option>';
                    }
                    ?>
                    </select>
             
            </td>
          </tr>
           <tr>
            <td>
                <div class="cashcolt text">
                Payment Type:
              </div>
            </td>
            <td>
            <select class="cashcolb box" name="type" id="">
            <option value="cash">Cash</option>
            <option value="bikash">bikash</option>
            <option value="bank">Bank</option>
            </select>
             <!--<input type="text" placeholder="Cash collection Amount" aria-label="cashcol">!-->
            </td>
          </tr>
          
          <tr>
            <td colspan="2" style="text-align:center;">
           <input style ="margin-bottom:30px; border-radius: 15px;"type="submit"name ='submitpersel' value ="Make Your Persel"class ="btn btn-lg btn-primary ">
          </tr>
        </table>
       
        </form>
        </div>

</div>

</div>

<?php include("include\body.php");?>    
</body>
<style>
.text{
  margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    font-weight: bold;

}
.box{
  border-radius: 15px;
    width: 250px;

}
 /* .placedel{
    background-color: darkgray;
    text-align: center;
    width: 100%;
   
    display: block;
}*/
.place_del{
    background-color: lightslategray;
            margin-right: 0px;
            margin-left: 0px;
}

.prsl{
    border-radius: 15px;
    width: 250px;
    margin-bottom:25px;
    margin-top:25px;
}
</style>
<?php include('include\footer.php');?>