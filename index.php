<?php
  include('include\header.php');

  
?>

<body>
 <section >
      <div class ="coverage">
        <div class="jumbotron jumbotron-fluid cntnt" style ="text-align:center;">
          <div class="head0 center">
              <p style="font-size:30px"><b>Reliable delivery partner for your business</b> </p>
          </div>
            <p class="lead">All over the country including Dhaka, delivery will be at the fastest time.</p>
        </div>  
      </div>

      <section >
      <div class="coverage" style ="margin-top:10px">
        <div class="tnxid ">
          <p class="text" style ="margin-top:10px"> <b>Track your parcel<br></b></p>
         <div class ="search">
          <ul class="content" >
            <li>
              <form  action ="" method ="post" class="form-inline src"style ="margin-top:10px;margin-left:35px">
              <input class="form-control txtsrc" type="text" placeholder="Parcel ID"name ="track" aria-label="Search" id="track">
               
              <button  type="button" class="btn btn-danger " onclick="search()">Track</button>
                </form>
              </li>
            </ul>   
            </div>
            <div id ="info" style ="margin-bottom :20px">
            </div>
        </div>
      </div>
    </section>
    <section class ="mid">
      <div class="container mid-content">
        <div class="header">
          <p><b>WHY US?</b></p>
        </div>
        <div class="subhead">
          <p>
            We understand the importance of your business, providing the most convenient delivery service for the business
         </p>
         <div class=" css-11rzb4j"></div>
        </div>
        

      </div>
    </section>
    <?php
  include('include\body.php');
?>
      <?php
  include('page_section\Index_section\section_two.php');
?>
    
      
      <div class="footer">
          <div class="head6">
            <p>Your delivery charge 100 taka all over the country !</p>
          </div>
          <div class="subhrad6">
            <p id="result"></p>

            </div>
        </div>
    </section>
    

   <script>
    function search(){
  var searchkey= document.getElementById("track").value ;
 //window.alert("searchkey");
  var xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange=function(){
    if(this.readyState == 4 && this.status == 200){
      debugger;
 
      document.getElementById("info").innerHTML=this.responseText;
      //document.alert(this.responseText);
    }
  };
  xhttp.open("GET","trackindex.php?key="+searchkey+"&page=index",true);
  xhttp.send();
}
   
   </script>


<?php
  include('include\footer.php');
?>
</body>