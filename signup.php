<?php
  include('include\header.php');
  require_once('controlar\logincontrolar.php');
  $result=getall_area();
  
?>
<link rel="stylesheet" href="css\signupstyle.css">
<script>
 function validateform()
 {
  //debugger;
   var name=document.getElementById('name').value;
   var uname=document.getElementById('uname').value;
   var mail=document.getElementById('email').value;
   var phne=document.getElementById('phne').value;
   var add=document.getElementById('add').value;
   var area=document.getElementById('area').value;
   var pass=document.getElementById('pass').value;
   var cpass=document.getElementById('cpass').value;
   var typ=document.signup.type;
  var x;
   var sname=document.getElementById('sname').value;
   var sadd=document.getElementById('sadd').value;
   var sarea=document.getElementById('sarea').value;
   var vcl=document.getElementById('vcl').value;
   var t=false;
   //alert("abc");
   
   if(name== "" || uname== "" || mail==''|| phne=='' || add=='' || area==''|| pass==''|| cpass==''|| typ=='')
   {
     alert("ALL of the field must be filled up before submit")
     return false;
   }
   else{
     if(pass!=cpass)
     {
       alert("password doesnot match")
       return false;
     }
     for(var i=0;i<typ.length;i++)
     {
       if (typ[i].checked)
       {
           t=true;
          x=typ[i];
           break; 
       }
      }
      if (t)
      {
        if (x=='Shop Owner')
        {
          if(sname=="" || sadd=="" || sarea=="")
          {
            alert("please insert shop information");
            return false 
          }
          else return true
        }
        else (x=='Delivery Man')
        {
          if(vcl=="")
          {
            alert("please insert a vehile");
            return false 
          }
          else return true
        }

      }
      else 
      alert("enter your type")
    }
       
}
</script>
<body>
 
  <div class="coverage signup1">
    <div class=" lnme">
   
      <P class="note">**After confirmation of the Authority  about your shop you wiil be able to access our services **</P>
      
    

      <section>
      <form class="form" name="signup" action="" method="post" onsubmit="return validateform()">
        <div class="container">
                <table class="tab" id ="table" >
                  <tr>
                    <td>
                      <div class="fnamet">
                      Name:
                      </div>
                    </td>
                    <td>
                      <input class="fnameb"type="text"  placeholder="Name" aria-label="name1"id ="name" name="name"> 
                    </td>
                    <td><?php echo $err_name; ?></td>
                    
                  </tr>
                  <tr>
                    <td>
                        <div class="lnamet">
                        User Name:
                      </div>
                    </td>
                    <td>
                    <input class="lnameb"type="text" placeholder="user Name" aria-label="uname" id ="uname" name="uname">
                    </td>
                    <td><?php echo $err_username; ?> </td>
                  </tr>
                  <tr>
                    <td>
                        <div class="mailt">
                        Email:
                      </div>
                    </td>
                    <td>
                    <input class="mailb"type="mail" placeholder="Email" aria-label="mail" id ="email" name ="email">
                    </td>
                    <td><?php echo $err_email; ?></td>
                  </tr>
                  <tr>
                    <td>
                        <div class="phonet">
                        Phone Number:
                      </div>
                    </td>
                    <td>
                    <input class="phoneb"type="text" placeholder="+88" aria-label="phone" id ="phne" name ="phonenum">
                    </td>
                    <td><?php echo $err_phone; ?></td>
                  </tr>
                  <tr>
                    <td>
                        <div class="addt">
                        Address
                      </div>
                    </td>
                    <td>
                    <input class="addb"type="text" placeholder="Address" aria-label="Address" id ="add" name =" addr">
                    </td>
                    <td><?php echo $err_add; ?></td>
                  </tr>
                  <tr>
                    <td>
                        <div class="dist">
                        Area:
                      </div>
                    </td>
                    <td>
                    
                    <select class="custom-select my-1 mr-sm-2 disb"  id ="area" name ="district">
                    
                    <?php  
                    foreach ($result as $del) {  
                    echo '<option value="'.$del['name'].'"selected>'.$del["name"].'</option>';
                    }
                    ?>
                
                    </select>
                    </td>
                    <td><?php echo $err_district; ?></td>
                  </tr>
                  
                  <tr>
                    <td>
                        <div class="passt">
                        Password:
                      </div>
                    </td>
                    <td>
                    <input class="passb"type="password" placeholder="type a pass" id ="pass" aria-label="pass" name ="password">
                    </td>
                    <td><?php echo $err_password; ?></td>
                  </tr>
                  <tr>
                    <td>
                        <div class="cnfrmpasst">
                        Confirm Password
                      </div>
                    </td>
                    <td>
                    <input class="cnfrmpassb"type="password" placeholder="type your pass again" aria-label="cnfrmpass" id ="cpass" name ="cpass">
                    </td>
                    <td><?php echo $err_cpassword; ?></td>
                  </tr>
                  <tr>
                      <td>
                          <div class="Statust" >
                              I am
                          </div>
                      </td>
                      <td>
                          <div class="Statusb">
                              <input type="radio" name ="type" value="Delivery Man"> Delivery Man
                              <input  type="radio"name ="type" value ="Shop Owner">Shop Owner
        
                          </div>
                      </td>
                      <td><?php echo $err_status; ?></td>
                  </tr>  
                  <tr>
                    <td>
                        <div class="shopnamet">
                        Shop Name :
                      </div>
                    </td>
                    <td>
                    <input style="height:15px;" class="shopnameb" type="text" placeholder="shop name" aria-label="shopname" id ="sname" name ="sname">
                    </td>
                    <td><?php echo $err_shopename; ?></td>
                  </tr>
                  <tr>
                    <td>
                        <div class="shopaddt">
                        Shop Address :
                      </div>
                    </td>
                    <td>
                    <input class="addb"type="text" placeholder="Shop Address" aria-label="Shop Address" id ="sadd" name ="sadd">
                    </td>
                    <td><?php echo $err_shopadd; ?></td>
                  </tr>
                  <tr>
                    <td>
                        <div class="shopareat">
                        Shop Area :
                      </div>
                    </td>
                    <td>
                    
                    <select class="custom-select my-1 mr-sm-2 shopareab" id ="sarea" name ="sarea">
                    <?php  
                    foreach ($result as $del) {  
                    echo '<option value="'.$del['name'].'"selected>'.$del["name"].'</option>';
                    }
                    ?>
                    </select>
                    </td>
                    <td><?php echo $err_shopdis; ?></td>
                  </tr>
                  <tr>
                    <td>
                        <div class="dilmanvachlet">
                        Deliveryman vachile type :
                      </div>
                    </td>
                    <td>
                    <select class="custom-select my-1 mr-sm-2 vachiletypeb"  id ="vcl" name ="vachile">
                      <option selected value="">Vachile type</option>
                      <option value="motorcycle">motorcycle</option>
                      <option value="bycicle">bycicle</option>
                      <option value="other">other</option>
                    </select>
                    </td>
                    <td><?php echo $err_vhicle; ?></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                    <input type="submit" class="btn btn-primary btn-lg sgnb" name ="signup" value="Signup">
                    </td>
                  </tr>
                  
                </table>
              </div>
        </form>
  </section>

    </div>
  </div>
  <?php
  include('include\body.php');
?>

</body>
<?php
  include('include\footer.php');
?>
<style>
  .signup1{
    background-color: darkgray;
    text-align: center;
    width: 100%;
   
    display: block;
}
.form-control{
    width: 50%;
    text-align: center;
    margin-left:27%;
}
input.form-control.mr-sm-2{
  width: 450px;
}
.fname{
  text-align:center;
}

</style>
<script>
  function namevalidation(input)
  {

  }
</script>
