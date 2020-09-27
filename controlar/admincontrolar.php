<?php

    require_once 'models\db_connect.php';
    
    function userinfo($username)
    {
        $query="SELECT `Username`, `Name`, `Address`, `District`, `Phone Number`, `Email` FROM `admin` WHERE username ='$username'";
        $result=getAssocArray($query);
       
        if($result){
            $result = $result[0];   
        }
       
        return $result;
    
    }
    function Signupreq()
    {
        $query="SELECT  * FROM `signup_req`";
        $result=getAssocArray($query);
       
        return $result;
    }
    function GetDeliveryReq()
    {
        $query="SELECT  * FROM `delivery_req`";
        $result=getAssocArray($query);
       
        return $result;
    }
    function GetDeliveryInfo()
    {
        $query="SELECT  * FROM `delivery info`";
        $result=getAssocArray($query);
       
        return $result;
    }
    function GetDeliveryManInfo()
    {
        $query="SELECT  * FROM `delivery_man`";
        $result=getAssocArray($query);
       
        return $result;
    }
    function GetsellerInfoseller($id)
    {
        $query="SELECT  * FROM `signup_req` Where Username='$id'";
        $result=getAssocArray($query);
        if($result)
        {
            $result=$result['0'];
       }
        return $result;
    }
    function GetsellerInfo()
    {
        $query="SELECT  * FROM `shopowner`";
        $result=getAssocArray($query);
        
       
        return $result;
    }
    function GetsignupInfo($username) 
    {
        $query="SELECT  * FROM `signup_req` where Username='$username'";
        //echo $query;
        $result=getAssocArray($query);
        foreach($result as $r)
        {
            //echo  $r["type"];
            if ($r["type"]=='Delivery Man')
            {
                insertdelman($r["Username"],$r["Name"],$r["Address"],$r["District"],$r["Phonenum"],$r["email"],$r["type of vachile"]);
                insertuser($r["Username"],$r["password"],$r["type"]);
                deletefromuserreq($r["Username"]);  
               //mailuser();

            }
        }

    }
    /*function mailuser()
    {
            $msg = "First line of text\nSecond line of text";
            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);
            $headers="From: shazib.shahriyar@outlook.com";
            // send email
            mail("shazib.shahriyar@gmail.com","My subject",$msg,$headers); 
    }**/
    function insertuser($uname,$pass,$Type)
    {
        $query="INSERT INTO `user` VALUES ('$uname','$pass','$Type')";
        execute($query);
    }
    
    function insertdelman($uname,$name,$add,$dis,$phone,$email,$typeoftrans)
    {
        $query="INSERT INTO `delivery_man` VALUES ('$uname','$name','$add','$dis','$typeoftrans','$phone','$email')";
        execute($query);
    }
    function deletefromuserreq($username)
    {
        $query="DELETE FROM `signup_req` WHERE Username='$username'";
        execute($query);
        header("Location: signupreqadmin.php");
    }
    function deletefromdeliveryreq($orderid)
    {
        $query="DELETE FROM `delivery_req` WHERE OrderId='$orderid'";
        execute($query);
        header("Location:Del_info_req_Admin.php");
    }
    function deleteormselleranduser($uname)
    {
        $query="DELETE FROM `shopowner` WHERE `Username`='$uname'";
        execute($query);
        deletefromuser($uname);
        header("Location:Sellerinfoad.php");
    }
    function deleteormdelmananduser($uname)
    {
        $query="DELETE FROM `delivery_man` WHERE `Username`='$uname'";
        execute($query);
        deletefromuser($uname);
        header("Location:Del_man_info_admin.php");
    }
    function deletefromuser($uname)
    {
        $query="DELETE FROM `user` WHERE `Username`='$uname'";
        execute($query);

    }
    function getdel_req_infobyid ($id)
    {
        $query ="SELECT  * FROM `delivery_req` Where OrderId='$id'";
       // echo $query;
        $result =getAssocArray($query);
       
       return $result;
    }
    function getdelmanforassign($district)
    {
        $query="SELECT  * FROM `delivery_man` where District='$district'";
        $result=getAssocArray($query);
       // echo $query;   
        //echo $result; 
        return $result;
    }
   function searchdelman($key)
   {
       $query ="SELECT * FROM delivery_man Where Username Like '%$key%' or `Name` Like '%$key%' or `Address` Like '%$key%' or `District` Like '%$key%' or `transport type` Like '%$key%' or `phone num` Like '%$key%' or `email` Like '%$key%' ";
      $result=getAssocArray($query);
       //echo $query;
       return $result;
   }
  function searchdelInfo($key)
   {
    $query ="SELECT * FROM `delivery info` Where `OrderId` Like '%$key%' or `Del_userName` Like '%$key%' or `ShopUsername` Like '%$key%' or `Shopid` Like '%$key%' or `shop_Name` Like '%$key%' or `ReceiverName` Like '%$key%' or `ReceiverAdd` Like '%$key%' or `Reciever District` Like '%$key%' or `Reciever phonenum` Like '%$key%'";
    $result=getAssocArray($query);
    return $result;
}
function searchsellerInfo($key)
{
 $query ="SELECT * FROM `shopowner` Where `Username` Like '%$key%' or `Name` Like '%$key%' or `Address` Like '%$key%' or `District` Like '%$key%' or `ShopName` Like '%$key%' or `ShopId` Like '%$key%' or `Shop_add` Like '%$key%' or `ShopDistrict` Like '%$key%' or `Phone_num` Like '%$key%'or `Email` Like '%$key%'";
 $result=getAssocArray($query);
 return $result;
}
if (isset($_POST["assindelman"]))
{
    addintoDeliverytable($_POST["odrid"],$_POST["deluser"],$_POST["shop_ownwer_uname"],$_POST["sid"],$_POST["sname"],$_POST["rname"],$_POST["radd"],$_POST["rdis"],$_POST["rphone"],$_POST["type"],'pending' );
    del_from_delreq($_POST["odrid"]);
    header("Location:Del_info_req_Admin.php");
}
function addintoDeliverytable($odid,$deluname,$sOwnername,$sid,$sname,$rname,$radd,$rdis,$rphone,$type,$status)
{
    $query="INSERT INTO `delivery info` values ('$odid','$deluname','$sOwnername','$sid','$sname','$rname','$radd','$rdis','$rphone','$type','$status')";
    execute($query);
   // echo $query;
}
function del_from_delreq($delid)
{
    $query="DELETE FROM `delivery_req` WHERE OrderId='$delid'";
    execute($query);
   // echo $query;
}
$shopid="";
$Errshopid="";
$hasError=false;
if (isset($_POST["addshopid"]))
{
  
 if(empty($_POST['sid']))
    {
        $Errshopid="shopid Required";
        $hasError=true;
    }
    else 
    {
       $s= checkshopid($_POST['sid']);
       if(empty($s['ShopId']))
       {

           $shopid=$_POST['sid'];
       }
       else 
       {
        $hasError=true;
        $Errshopid="shop id already taken";
       }
       
    }
    
if (!$hasError)
{
    $q=insertShopowner($_POST["uname"],$_POST["name"],$_POST["add"],$_POST["dis"],$_POST["phn"],$_POST["mail"],$_POST["sname"],$_POST["sadd"],$_POST["sdis"],$shopid);
    mailuser($_POST["uname"],$_POST['pass'],$_POST["mail"]);
    header("Location:signupreqadmin.php");
}

}
function insertShopowner($uname,$name,$add,$dis,$phone,$email,$shopname,$shopadd,$sdis,$shopid)
    {
        $query="INSERT INTO `shopowner` VALUES ('$uname','$name','$add','$dis','$shopname','$shopid','$shopadd','$sdis','$phone','$email')";
       
        execute($query);
       // mailuser();
        insertuser($_POST['uname'],$_POST['pass'],$_POST['status']);
        deletefromuserreq($_POST["uname"]);
    }
function checkshopid($id)
{
    $query="SELECT * from shopowner Where ShopId='$id'";
    $result=getAssocArray($query);
    if($result)
    {
        $result=$result[0];
    }
    return $result;

}
function getall_area()
	{
		$query ="SELECT * FROM `citys` ";
		$result = getAssocArray($query);
		return $result;

    }
   function mailuser($username,$pass,$email)
   {
       $to="shazib.shahriyar@gmail.com";
       $cc=$email;
       $email_subject ="Signup status";
       $email_body="Successfully signup to our system your id $username and password $pass";
       mail($to, $email_subject,$email_body);
         mail($cc, $email_subject,$email_body);

   }
   ?>