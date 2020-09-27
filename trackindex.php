<?php
require_once('controlar\trackcontrolar.php');
$key=$_REQUEST["key"];

$page=$_REQUEST["page"];
//if(($page == 'indesk')&& !empty($key))
//{
?>
    
    <div class=" del-info" style ="color:white; font-size: 25px;text-align: center;padding: 20px">
    <b>Delivery process InFo</b>
    <div class=" css-11rzb4j" style="width:270px;margin-left:40%;"></div>
  </div>
        <?php
        $value=getdelinfo($key);
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
        
        $userid=$values["Del_userName"];
         $del=getdrlinfo($userid);
         foreach($del as $d)
         {
        ?>
                <div class="info"style="color:white;font-size:20px;margin-top:30px; margin-bottom:35px">
                <p><b>Delivery Userid : </b><?php echo $d["Username"]; ?><br></p>
                <p><b>Delivery Man Name : </b><?php echo $d["Name"]; ?><br></p>
                <p><b>Delivery Contuct : </b><?php echo $d["phone num"]; ?><br></p>
                <p><b>Delivery Address : </b><?php echo $d["Address"]; ?><br></p>
         <?php
         }
        
        }
//}     ?>