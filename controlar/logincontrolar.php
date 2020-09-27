<?php
// Start the session
session_start();

	require_once('models\db_connect.php') ;
	$name="";
	$username="";
	$err_name="";
	$err_username="";
	$password="";
	$err_password="";
	$cpassword="";
	$err_cpassword="";
	$email="";
	$phonenum="";
	$err_email="";
	$err_phone="";
	$address="";
	$err_add="";
	$District="";
	$status="";
	$err_district="";
	$err_status="";
	$shopname="";
	$err_shopename="";
	$shopadd="";
	$shopdis="";
	$err_shopadd="";
	$err_shopdis="";
	$vhicle="";
	$err_vhicle="";
	$newpass="";
	$err_newpass="";
	$hasError=false;
	if(isset($_POST["signup"]))
	{
		if(empty($_POST["name"])){
			$err_name = "Name Required";
			$hasError = true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			
			$err_username = "Username Required";
			$hasError = true;
		}else{
			$s=authenticateunameuser($_POST["uname"]);
			if (empty($s['Username']))
			{
				$t=authenticateunamereq($_POST["uname"]);
				if(empty(($t['Username'])))
				{
					$username=$_POST["uname"];
				}
				else{
				$err_username = "invalid user name";
				$hasError = true;
				}
			}
			else {
			$err_username = "invalid user name";
			$hasError = true;
			}
		}
		if(empty($_POST["email"])){
			$err_email = "email Required";
			$hasError = true;
		}else{
			$email=$_POST["email"];
		}
		if(empty($_POST["phonenum"])){
			$err_phone = "phonenum Required";
			$hasError = true;
		}else{
			$phonenum=$_POST["phonenum"];
		}
		if(empty($_POST["addr"])){
			$err_add= "address Required";
			$hasError = true;
		}else{
			$address=$_POST["addr"];
		}
		if(empty($_POST["district"])){
			$err_district= "district Required";
			$hasError = true;
		}else{
			$District=$_POST["district"];
		}
		if(empty($_POST["password"])){
			$err_password= "password Required";
			$hasError = true;
		}else{
			$password=$_POST["password"];
		}
		if(empty($_POST["cpass"])){
			$err_cpassword= "empty confirm password";
			$hasError = true;
		}else{
			if ($_POST["cpass"]==$_POST["password"])
			{
				$cpassword=$_POST["cpass"];
			}
			else 
			$err_cpassword= "password dosenot match";
		}
		if(empty($_POST["type"])){
			$err_status= "status required Required";
			$hasError = true;
		}else{
			if($_POST["type"]=="Delivery Man")
			{
				if(empty($_POST["vachile"])){
					$err_vhicle= "vachile Required";
					$hasError = true;
				}else{
					$vhicle=$_POST["vachile"];
				}
				$status=$_POST["type"];
			}
			else//($_POST["type"]=="Shop Owner")
			{
				if(empty($_POST["sname"])){
					$err_shopename= "shop name Required";
					$hasError = true;
				}else{
					$shopname=$_POST["sname"];
				}
				if(empty($_POST["sadd"])){
					$err_shopadd= "shop address Required";
					$hasError = true;
				}else{
					$shopadd=$_POST["sadd"];
				}
				if(empty($_POST["sarea"])){
					$err_shopdis= "shop area Required";
					$hasError = true;
				}else{
					$shopdis=$_POST["sarea"];
				}
				$status=$_POST["type"];
			}
		}
		//Wrtie other validations here
		if(!$hasError){
			
			insertUser($username,$name,$address,$District,$phonenum,$email,$status,$shopname,$shopadd,$shopdis,$vhicle,$password);
		}
		
	}
	if(isset($_POST["loginuser"])){
		if(empty($_POST["Username"])){
			$err_username= "Username required";
			$hasError = true;
		}else{
			$username=$_POST["Username"];
		}
		if(empty($_POST["password"])){
			$err_password="Password Required";
			$hasError=true;
		}else{
			$password=$_POST["password"];
		}
		if(!$hasError){
			//$password = md5($password);
			if($s=authenticate($username,$password)){
                if ($s['status']=="Admin")
				{
					header("Location: admin.php");
					$_SESSION["username"] = $username;
					setcookie("status",$s['status'],time()+600);
				}
				elseif($s['status']=="Shop Owner")
				{
					header("Location: seller.php");
					$_SESSION["username"] = $username;
					setcookie("status",$s['status'],time()+600);
				}
                elseif($s['status']=="Delivery Man")
				{
					header("Location: Deliveryman.php");
					$_SESSION["username"] = $username;
					setcookie("status",$s['status'],time()+600);
				}
                else {alert("Invalid Username or Password");}
		}
    }
}
function authenticateunameuser($username)
{
	$query="SELECT `Username` from user where Username='$username'";
	$result = getAssocArray($query);
	
	if($result){
		$result = $result[0];   
	}
	return $result;
}
function authenticateunamereq($username)
{
	$query="SELECT `Username` from signup_req where Username='$username'";
	$result = getAssocArray($query);
	if($result){
		$result = $result[0];   
	}
	return $result;
}
	function insertUser($username,$name,$address,$District,$phonenum,$email,$status,$shopname,$shopadd,$shopdis,$vhicle,$password){
		//$password = md5($password);
		$query = "INSERT INTO `signup_req` VALUES ('$username','$name','$address','$District','$phonenum','$email','$status','$shopname','$shopadd','$shopdis','$vhicle','$password')";

		execute($query);
	}
	function authenticate($username,$password){
        $query = "SELECT `status` from user where Username='$username' and `password`='$password'";
       
        $result = getAssocArray($query);
        
		if($result){
            $result = $result[0];   
		}
		return $result;
		
		
	}
	function getinfofromusertable($username)
	{
		$query=" SELECT * FROM `user` WHERE Username='$username'";
		$result = getAssocArray($query);
        
		if($result){
            $result = $result[0];   
		}
		return $result;

	}
	if (isset($_POST['cngpass']))
	{
		if(empty($_POST['newpass']))
		{
			$err_newpass="New pass Required";
			$hasError=true;
		}
		else 
		{
			$newpass=$_POST['newpass'];
		}
		if (!$hasError)
		{
			updateUserpass($newpass,$_POST['uname']);
		}
	}
	function updateUserpass($pass,$uname)
	{
		$query="UPDATE `user` SET `password`='$pass' WHERE Username='$uname'";
		//echo $query;
		execute($query);
		header("Location:logout.php");
		session_destroy();
	}
	function getall_area()
	{
		$query ="SELECT * FROM `citys` ";
		$result = getAssocArray($query);
		return $result;

	}
?>