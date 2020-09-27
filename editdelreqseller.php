<?php 
include("include\heading_after_login.php");
require_once 'controlar\Sellercontrolar.php';
$Del_id=$_REQUEST["id"];
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Shop Owner'))
{
   header("Location: login.php");
}

$value=GetDeliveryInfoedit ($Del_id);
$result=getall_area();
?>
<div class="coverage placedel">

<div class="place_del">
<div style ="text-align:center;margin-left:-40%;margin-top:40px">
<?php include("page_section\Seller_section\menubar.php");?>
</div>

<form action="" method="post">

<table class="tab "style="margin-left:25%;margin-right:5%;margin-top:35px;">
        <tr>
           
            <td>
              <input class="Orderidb"type="hidden"name="odid" placeholder="Orderid" aria-label="cname" value="<?php echo $value["OrderId"];?>">
            </td>
            <td><?php echo $errOrderid; ?></td>
            
          </tr>
          <tr>
            <td>
              <div class="Shopownert">
              Shop Owner User Name:
              </div>
            </td>
            <td>
              <input class="Shopownerb"type="text" name ="shopusername" placeholder="Username Shop owner" aria-label="cname" value="<?php echo $value["Shop_Owner_Username"];?>"readonly >
            </td>
            
          </tr>
          <tr>
            <td>
                <div class="midt">
                Shop Id:
              </div>
            </td>
            <td>
             <input class="midb"type="text" name ="marchentid"placeholder="marchant Id" aria-label="mid"value="<?php echo $value["ShopId"];?>"readonly >
            </td>
          </tr>
          <tr>
            <td>
                <div class="saddt">
                Shop Address:
              </div>
            </td>
            <td>
             <input class="saddb"type="text" name="shopadd" placeholder="Shop Address" aria-label="mid"value="<?php echo $value["Shop_add"];?>"readonly>
            </td>
          </tr>
          <tr>
            <td>
                <div class="sdist">
                Shop District:
              </div>
            </td>
            <td>
             <input class="sdisb"type="text" name ="shopdis" placeholder="Shop District" aria-label="mid" value="<?php echo $value["Shop District"];?>"readonly>
            </td>
          </tr>
          <tr>
            <td>
              <div class="cnamet">
              Reciver Name:
              </div>
            </td>
            <td>
              <input class="cnameb"type="text" name ="rname" placeholder="Reciever Name" aria-label="cname"value="<?php echo $value["Reciver name"];?>">
            </td>
            
          </tr>
          <tr>
            <td>
                <div class="casddresst">
                Reciever Address:
              </div>
            </td>
            <td>
            <input class="casddressb"type="text"  name ="radd" placeholder="Reciever address" aria-label="cadd"value="<?php echo $value["reciever Address"];?>">
            </td>
          </tr>
          <tr>
            <td>
                <div class="cphonet">
                Reciever Phone:
              </div>
            </td>
            <td>
             <input class="cphoneb"type="text"name ="rphone" placeholder=" Reciever Phone" aria-label="cphone"value="<?php echo $value["reciever phone"];?>">
            </td>
          </tr>
          <tr>
            <td>
                <div class="delareat">
                Select Reciever Area:
              </div>
            </td>
            <td>
            <select class="custom-select my-1 mr-sm-2 delareab" id="inlineFormCustomSelectPref" name ="rdis">
                    
                    <?php  
                    foreach ($result as $del) {  
                    echo '<option value="'.$del['name'].'"selected>'.$del["name"].'</option>';
                    }
                    ?>
                
                    </select>
             <!--<input class="delareab"type="text" name ="rdis"placeholder="Select Reciever area" aria-label="delarea"value="<?php //echo $value["Reciever District"];?>">!-->
            </td>
          </tr>
           <tr>
            <td>
                <div class="cashcolt">
                Payment Type:
              </div>
            </td>
            <td>
            <select class="cashcolb" name="type" id="">
            <option value="cash">Cash</option>
            <option value="bikash">bikash</option>
            <option value="bank">Bank</option>
            </select>
             <!--<input type="text" placeholder="Cash collection Amount" aria-label="cashcol">!-->
            </td>
          </tr>
          
          <tr>
            <td colspan="2" style="text-align:center;">
           <input style ="width:180px;margin-bottom:30px;"type="submit"name ='edit' value ="Edit"class ="btn btn-primary">
          </tr>
        </table>
        </form>
	</td>
</table>				
</div>
</form>
</div>
</div>
<?php include("include\body.php");?>    
</body>
<style>
  .placedel{
    background-color: darkgray;
    text-align: center;
    width: 100%;
   
    display: block;
}
.place_del{
    background-color: lightslategray;
            margin-right: 0px;
            margin-left: 0px;
}
.cnamet{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.cnameb{
    border-radius: 15px;
    width: 250px;
}
.casddresst{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.casddressb{
    border-radius: 15px;
    width: 250px;
}
.cphonet{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.cphoneb{
    border-radius: 15px;
    width: 250px;
}
.midt{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.midb{
    border-radius: 15px;
    
    width: 250px;
}
.Orderidt{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.Orderidb{
    border-radius: 15px;
    width: 250px;
}
.cashcolt{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.cashcolb{
    border-radius: 15px;
    width: 250px;
}
.Shopownert{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.Shopownerb{
    border-radius: 15px;
    width: 250px;
}
.delareat{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.delareab{
    border-radius: 15px;
    width: 250px;
}.saddt{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.saddb{
    border-radius: 15px;
    width: 250px;
}
.sdist{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.sdisb{
    border-radius: 15px;
    width: 250px;
}
.prsl{
    border-radius: 15px;
    width: 250px;
    margin-bottom:25px;
    margin-top:25px;
}
</style>
<?php include('include\footer.php');?>