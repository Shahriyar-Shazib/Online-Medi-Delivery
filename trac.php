<?php
include("include\heading_after_login.php");
require_once('controlar\trackcontrolar.php');
if(!isset($_COOKIE['status'])&&($_COOKIE['status']!='Shop Owner'))
{
   header("Location: login.php");
}
$perselid=$_REQUEST["id"];

?>
<link rel="stylesheet" href="css\trac.css">
<body>

<div class ="container">
<div class=" dinfo">
<?php include("page_section\Seller_section\menubar.php");?>
<div class=" del-info" style =" font-size: 25px;text-align: center;padding: 20px">
    <b>Delivery process InFo</b>
    <div class=" css-11rzb4j" style="width:220px;margin-left:40%;"></div>
  </div>
  <?php
        $value=getdelinfo($perselid);
        foreach($value as $values)
        {
         if ($values["del_status"]=='pending')
         {
        ?>
            <div class="protitle">
  
                <div class="progress " style="height: 30px; width:50%; margin-left: 25%;margin-top: 30px;font-size: 10px;margin-bottom:35px border-radius:35px;">
                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">pending</div>
                </div>
                </div>

        <?php
         }
         elseif ($values["del_status"]=='processing')
         {
        ?>
            <div class="protitle">
            
            <div class="progress " style="height: 30px; width:50%; margin-left: 25%;margin-top: 30px;font-size: 10px;margin-bottom:35px border-radius:35px;">
                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">Processing</div>
            </div>
            </div>
        <?php   
         }
         elseif ($values["del_status"]=='picked')
         {
         ?>
            <div class="protitle">
            
            <div class="progress " style="height: 30px; width:50%; margin-left: 25%;margin-top: 30px;font-size: 10px;margin-bottom:35px border-radius:35px;">
                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">picked</div>
            </div>
            </div>

         <?php 
         }
         elseif ($values["del_status"]=='shipped')
        {
        ?>
            <div class="protitle">
            
            <div class="progress " style="height: 30px; width:50%; margin-left: 25%;margin-top: 30px;font-size: 10px;margin-bottom:35px border-radius:35px;">
                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">shiped</div>
            </div>
            </div>
         <?php        
         }
        elseif ($values["del_status"]=='delivered')
        {
        ?>
            <div class="protitle">
            
            <div class="progress " style="height: 30px; width:50%; margin-left: 25%;margin-top: 30px;font-size: 10px;margin-bottom:35px border-radius:35px;">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Delivered</div>
            </div>
            </div>
         <?php        
        }
         else
        {
            echo "something wrong plz try again";
        }
        ?>
            <div class=" del-info"style =" font-size: 25px;text-align: center;padding: 20px">
          <b>Delivery Man InFo</b>
          <div class=" css-11rzb4j" style="width:220px;margin-left:40%;"></div>
          </div>
        <?php
        $userid=$values["Del_userName"];
         $del=getdrlinfo($userid);
         foreach($del as $d)
         {
        ?>
                <div class="info"style="font-size:20px;margin-top:30px; margin-bottom:35px;text-align:center">
                <p><b>Delivery Userid : </b><?php echo $d["Username"]; ?><br></p>
                <p><b>Delivery Man Name : </b><?php echo $d["Name"]; ?><br></p>
                <p><b>Delivery Contuct : </b><?php echo $d["phone num"]; ?><br></p>
                <p><b>Delivery Address : </b><?php echo $d["Address"]; ?><br></p>
         <?php
         }
        
        }
//}     ?>
     
  
  
</div>


</div>


    <?php
    include("include\body.php");
    ?>
</body>

<?php
  include('include\footer.php');
?>