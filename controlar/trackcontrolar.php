<?php
session_start();
 require_once 'models\db_connect.php';
 $errmsgteac="";
 $trackid="";
 $haserror=false;
if (isset($POST["Submit"]))
{
    if (empty($POST["Submit"]))
    {
        $err_name = "Name Required";
		$hasError = true;
    }
    else 
    $trackid=$POST["Submit"];
    if(!$hasError)
    {
        $_SESSION["trackid"] = $trackid;
        header("Location: trac.php");
		
    }

    
}
function getdelinfo($id)
{
    $query="SELECT * FROM `delivery info` WHERE OrderId='$id'";
    $result=getAssocArray($query);
    
    return $result; 
}
function getdrlinfo($userid)
{
    $query="SELECT * FROM `delivery_man` WHERE Username='$userid'";
    $result=getAssocArray($query);
    
    return $result; 

}
?>