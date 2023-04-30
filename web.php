<!DOCTYPE html>
<html>
<head>
	
	  <title>AAR HOSPITAL</title>
      <h1 >HOSPITAL MANAGEMENT SYSTEM</h1>
      <body>
    <marquee style="scroll" direction="left"><h2 style="color: blue;" >WELCOME <span style="color:#ff1662;"></span> TO AAR HOSPITAL</h2></marquee>
	</head>
   
   
	
    <style>
body {
  background-image: url("pic2.jpg");
  background-repeat: initial;
  background-size: cover;
  height: 100px;
}

h1 {
    color: maroon;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 40px;
}
</style>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:0;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 34px 86px 20px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 260px;
  box-shadow: 0px 78px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
} 
div.absolute {
  position: absolute;
  top: 100px;
  left: 0;
  margin-left: 10px;
}
 #container1{
              background-image:url("pic.jpg");
              height:774px;
              background-size:cover;
              width:100%;
              margin:0;
              top:5; }
            a{text-decoration:none;color:white;
}
</style>


 <div class="absolute">
<ul>
  <li><a href="#home">Home</a></li>
  <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">patient</a>
        <div class="dropdown-content">
          <a href="user.html">New patient</a>
          <a href="#">Update patient</a>
          <a href="#">Remove patient</a>
        </div>
  </li>
     <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">staff</a>
        <div class="dropdown-content">
          <a href="stock.html">Admin</a>     
           <a href="#">Doctor</a>
          <a href="#">HOD</a>
          <a href="#">OTHER
          
          </a>
        </div>
  </li>

  <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Appontment</a>
        <div class="dropdown-content">
          <a href="order.html">New Appointment </a>
          <a href="#">Current Appointment</a>
          <a href="#">Cancel Appointment</a>
        </div>
  </li>

 <!-- <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Sales</a>
        <div class="dropdown-content">
          <a href="#">Total sales</a>
          <a href="#">sales analysis</a>
          
        </div>
  </li>-->

 <li><a href="login.php" style="float: left;border-left: 50%;"> <h5>sign out</h5></a></li>
</ul>
 </div>

 <div class="footer" style=" 
    color:aliceblue;
    font-size: 14px;
    padding: 60px 0 20px;">
        <div class="container">
            <div class="row">

                <div class="footer-col-3" style="min-width: 250px;
                margin-bottom: 20px;">

                </div>
                <div class="footer-col-4" style="min-width: 250px;
                margin-bottom: 20px;">

                    <h3 style="text-align: center;">Follow us </h3>
                    <ul style="text-align: center;list-style-type: none;">
                        <li></li>
                        <li> <a href="Facebook">Facebook</a></li>
                        <li><a href="Twitter">Twitter</a></li>
                        <li><a href="Instagram">Instagram</a></li>
                        <li><a href="Youtube">Youtube</a></li>

                    </ul>

                </div>

            </div>
            <hr style="color: black;">
            <p class="copyright" style="text-align: center;color: black;">copyright 2022 -AAR HOSPITAL your best choice.<br> emergency dail +254 700 603 <br> +254 7800 541</p>
        </div>

    </div>

</body>




 <!--<div id ="container1">
            <header>
                   <h1 align="center" style="font-family: Times New Roman, Times, serif;">CHEMICALS MANAGEMENT SYSTEM </h1>

            </header>-->
</body>


</html>