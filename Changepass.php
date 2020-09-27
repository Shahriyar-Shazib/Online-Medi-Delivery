<?php
//session_start(); 
include("include\heading_after_login.php");
require_once('controlar\logincontrolar.php');
$values =getinfofromusertable($_SESSION["username"]);
?>
<body>
<div class ="container">
   <div class ="cngpass">
   <form class="form" action="" method="post">
   <table class="tab">
          <tr>
            <td>
              <div class="cmailt">
              UserID:
              </div>
            </td>
            <td>
              <input class="cmailb"type="text" placeholder=" Email" aria-label="cmail" name ='uname' value="<?php echo $values['Username']?>"readonly>
            </td>
            
          </tr>
          <tr>
            <td>
                <div class="cpasst">
                Current Cassword:
              </div>
            </td>
            <td>
            <input class="cpassb"type="password" placeholder="Password" aria-label="pass"value="<?php echo $values['password']?>"readonly>
            </td>
          </tr>
          <tr>
            <td>
                <div class="newpasst">
                New Password:
              </div>
            </td>
            <td>
             <input class="newpassb"type="text" placeholder="New password" aria-label="newpass" name='newpass'>
            </td>
          </tr>
          <tr>
          <td colspan="2">
          <input style ="margin-top:40px;margin-left:35%;margin-bottom:40px;"type="submit" name ="cngpass" value="Change Password" class ="btn btn-danger center">
          </td>
          </tr>
          
  </table>
  
</form>

   </div>
   </div>
    <?php include("include\body.php")?>
</body>
<style>

.cngpass{
    background-color: darkgray;
    text-align: center;
    width: 100%;
    max-width: 1110px;
    display: block;
    
}
.form{
    width: 50%;
    text-align: center;
    margin-left:27%;
    
}
.signup1{
    margin-bottom: 40px;
    
}
.cmailt{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.cmailb{
    border-radius: 15px;
    width: 250px;
}
.cpasst{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.cpassb{
    border-radius: 15px;
    width: 250px;
}
.newpasst{
    margin-left: 50px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.newpassb{
    border-radius: 15px;
    width: 250px;
}
.cngpass1{
    border-radius: 15px;
    width: 250px;
    margin-left:5%;
    margin-bottom:25px!important;
}
</style>
<?php
  include('include\footer.php');
?>