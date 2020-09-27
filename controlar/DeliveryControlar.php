<?php
//session_start();
    require_once 'models\db_connect.php';
    function userinfo($username)
    {
            $query="SELECT `Name`, `Address`, `District`, `transport type`, `phone num`, `email` FROM `delivery_man` WHERE Username ='$username'";
            $result=getAssocArray($query);
           
            if($result){
                $result = $result[0];   
            }
           
            return $result;
    }
    function GetDeliveryInfo($unamedel)
    {
       
        //$status="processing";
        $query="SELECT  * FROM `delivery info` WHERE `Del_userName`='$unamedel'";
        $result=getAssocArray($query);
        return $result;
    }
    function GetDeliveryInfoedit($orderid)
    {
        $query="SELECT  * FROM `delivery info` WHERE `OrderId`='$orderid' ";
        $result=getAssocArray($query);
        return $result;
    }
    if(isset($_POST["submit"]))
	{
        $status=$_POST["status"];
        updatedelstatus($status,$_POST["orderid"]);
    }
    function updatedelstatus($status,$id)
    {
        $query="UPDATE `delivery info` SET `del_status` = '$status' WHERE `delivery info`.`OrderId` ='$id'";
    
        
        execute($query);
        header("Location:running_del_delman.php");
    }
    function searchdelInfo($key,$uid)
   {

    
    $query ="SELECT * FROM `delivery info` Where `Del_userName`='$uid' and `OrderId` Like '%$key%' or `Del_userName` Like '%$key%' or `ShopUsername` Like '%$key%' or `Shopid` Like '%$key%' or `shop_Name` Like '%$key%' or `ReceiverName` Like '%$key%' or `ReceiverAdd` Like '%$key%' or `Reciever District` Like '%$key%' or `Reciever phonenum` Like '%$key%'";
    $result=getAssocArray($query);
    return $result;
}
?>