<?php
  include('include\header.php');
  require_once('controlar\logincontrolar.php');
  if(isset($_COOKIE['status']))
  {
    if($_COOKIE['status']=='Admin')
    {
      header("Location: admin.php");
    }
    elseif($_COOKIE['status']=='Shop Owner')
    {
      header("Location: seller.php");
    }
    elseif($_COOKIE['status']=='Delivery Man')
    {
      header("Location: Deliveryman.php");
    }
  }
?>

<body>

   <section>
   <div class ="container">
   <div class ="login">
   <form class="form" action="" method="post">
  <div class="form-group">
    <label for="Username">User Name</label>
    <input type="text" class="form-control mail" id="Username" placeholder="User Name"name="Username">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control password" id="Password" placeholder="Password"name="password">
  </div>

  <button type="submit" class="btn btn-primary " name ="loginuser" value="Register">Sign in</button>
  <div class="dropdown-divider"></div>
  <a class="signup1" href="signup.php">New around here? Sign up</a>
  
</form>
   </div>
   </div>
   </section>

   
    <?php
  include('include\body.php');
  //echo $_SESSION["username"];
?>


</body>
<?php
  include('include\footer.php');
?>
<style>

.login{
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
</style>
