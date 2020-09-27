<?php
 require_once('models\db_connect.php');
 $Orderid="";
 $rname="";
 $radd="";
 $rdistrict="";
 $cashamount="";
 $rphone="";
 $errOrderid="";
 $errrname="";
 $errradd="";
 $errrdistrict="";
 $errcashamount="";
 $errrphone="";
 $hasError =false;
 if (isset($_POST["submitpersel"]))
 {
    if(empty($_POST["odid"])){
        $errOrderid = "please Enter orderid";
        $hasError = true;
    }
    else{
       $o= authenticate_orderid_delinfo($_POST["odid"]);
       if (empty($o['OrderId']))
			{
				$t=authenticate_orderid_frm_delreq($_POST["odid"]);
				if(empty(($t['OrderId'])))
				{
					$orderid=$_POST["odid"];
				}
				else{
				$errOrderid = "invalid Orderid";
				$hasError = true;
				}
			}
			else {
			$errOrderid = "Orderid has already taken ";
			$hasError = true;
			}
    }
    if(empty($_POST["rname"])){
        $errrname = "Reciever Name Required";
        $hasError = true;
    }else{
        $rname=$_POST["rname"];
    }
    if(empty($_POST["radd"])){
        $errradd = "Reciever Address Required";
        $hasError = true;
    }else{
        $radd=$_POST["radd"];
    }
    if(empty($_POST["rphone"])){
        $errrphone = "Reciever Phonenumber Required";
        $hasError = true;
    }else{
        $rphone=$_POST["rphone"];
    }
    if(empty($_POST["rdis"])){
        $errrdistrict = "Reciever Phonenumber Required";
        $hasError = true;
    }else{
        $rdistrict=$_POST["rdis"];
    }
    if(!$hasError)
    {
        placedelreq($orderid,$_POST['shopusername'],$_POST["marchentname"],$_POST['marchentid'],$_POST['shopadd'],$_POST['shopdis'],$rname,$radd,$rdistrict,$rphone,$_POST['type']);
    }
 }
 if (isset($_POST["edit"]))
 {
     editdelrew($_POST["odid"],$_POST["rname"],$_POST["radd"],$_POST["rdis"],$_POST["rphone"],$_POST['type']);
 }
 function placedelreq($orderid,$shopownerusername,$shopname,$shopid,$shopadd,$shopdis,$rname,$radd,$rdis,$rphone,$ptype)
 {
    $query = "INSERT INTO delivery_req VALUES ('$orderid','$shopownerusername','$shopname','$shopid','$shopadd','$shopdis','$rname','$radd','$rdis','$rphone','$ptype')";
    execute($query);
    header("Location: pendingdelreqseller.php");
 }
 function editdelrew($orderid,$rname,$radd,$rdis,$rphone,$ptype)
 {
     $query="UPDATE `delivery_req` SET `Reciver name`='$rname',`reciever Address`='$radd',`Reciever District`='$rdis',`reciever phone`='$rphone',`payment type`='$ptype' WHERE `OrderId`='$orderid'";
     execute($query);
     header("Location: pendingdelreqseller.php");
    
 }
 function authenticate_orderid_delinfo($id)
{
	$query="SELECT `OrderId` from `delivery info` where `OrderId`='$id'";
    $result = getAssocArray($query);
   
	
	if($result){
		$result = $result[0];   
	}
	return $result;
}
function authenticate_orderid_frm_delreq($id)
{
	$query="SELECT `OrderId` from `delivery_req` where OrderId='$id'";
	$result = getAssocArray($query);
	if($result){
		$result = $result[0];   
	}
	return $result;
}
 function userinfo($username)
 {
     $query="SELECT  * FROM `shopowner` WHERE username ='$username'";
     $result=getAssocArray($query);
    
     if($result){
         $result = $result[0];   
     }
    
     return $result;
 
 }
 function GetDeliveryReq($username)
 {
     $query="SELECT  * FROM `delivery_req` WHERE  Shop_Owner_Username ='$username'";
     $result=getAssocArray($query);
    
     return $result;
 }
 function GetDeliveryInfo($username)
 {
    $query="SELECT  * FROM `delivery info` WHERE ShopUsername ='$username'";
    $result=getAssocArray($query);
    
     return $result; 
 }
 function GetDeliveryInfoedit($Del_id)
 {
    $query="SELECT  * FROM `delivery_req` WHERE  OrderId ='$Del_id'";
    $result=getAssocArray($query);
    if($result){
		$result = $result[0];   
	}
     return $result; 
    
 }
 function getall_area()
	{
		$query ="SELECT * FROM `citys` ";
		$result = getAssocArray($query);
		return $result;

	}
 
?>