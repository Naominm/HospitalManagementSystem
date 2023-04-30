
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="hospdatabase";

// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ( isset($_POST[''])){
  $reason = $_POST['reasons'];
    $pain = $_POST['pain'];
    $date = $_POST['date'];
    $time = $_POST['time'];
   
   
    

    $query ="INSERT INTO booking ( reasons,pain,date,time, ) VALUES ( '$reasons','$pain',' $date',' $time');";

    mysqli_query($con,$query);
   

     
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Appointment Sheduler</title>
    <style>
       p.one{
            color:red;
            border: 0px solid;
        }
        p.two{
            color:blue;
            outline:0px solid;
        }
        body {
    background-image: url("image5\ \(2\).jpeg");
    background-repeat: initial;
  background-size: cover;
  height: 100px;
    font-size: 48px;
}
label{
  color: red;
}
name{
  color: red;
}
    </style>
</head>
<body>
  <form method="POST">
   <fieldset>
  <legend><h2>Appointment Sheduler</h2></legend>
  <p>
    <label for="reason">what is the reason for your visit?</label>
    <datalist id="reasons">
      <select name="reason">
        <option>Annual Physical</option>
        <option>cold or flu symptoms</option>
        <option>Blood test</option>
        <option>Post-operative</option>
        <option>medical Check up</option>
    
      </select> </datalist>
     </p>
  
  <p class="one">
    <label>Current pain level
      <input type="range" name="pain"min="0" max="10" step=".5" value="5"
      title="0 is no pain, 10 s worst pain immaginable"/> </label> </p>
      <p class="two">
     <label>Preferred date
<input type ="date" name="date" required=""min="2022-01-10" max="2023-01-01"/> </label>  </p>
<p>
<label>preferred Time
  <input type="time" name="time" required="" min="08:00" max="18:00" step="1:00"/></label>
</p>
<td><h1> <input type="submit"name="submit"></h1><br><td>

 
</fieldset>
</form> 
</body>
</html>