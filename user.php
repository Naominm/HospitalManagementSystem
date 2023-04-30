
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="hospdatabase";

// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ( isset($_POST['city'])){
  $P_ID = $_POST['P_ID'];
    $pfname = $_POST['pfname'];
    $pmname = $_POST['pmname'];
    $plname = $_POST['plname'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $time=$_POST['time'];
    $phone= $_POST['phone'];
    $city = $_POST['city'];
    $diagnosis = $_POST['diagnosis'];
    $B_NO = $_POST['B_NO'];
    

    $query ="INSERT INTO patient ( P_ID,pfname,pmname,plname,gender,date,time,phone,city,diagnosis,B_NO ) VALUES ( '$P_ID','$pfname',' $pmname',' $plname', ' $gender',' $date',' $time',' $phone',' $city',' $diagnosis',' $B_NO');";

    mysqli_query($con,$query);
   

     
}

?>
 <!DOCTYPE html>
<html>
  <head>
    <style>
       body{
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 35px;
      
      background-image: url("image5\ \(2\).jpeg");
      background-repeat: initial;
  background-size: cover;
  height: 100px;
  color: black;

    }
    </style>
  </head>
    <title>user page</title>
    
    <body>
        <h2>New patients information</h2>

<form method="POST">
    <fieldset>
        <legend>Personal information:</legend>
        <table style="width:100%">
            <tr>
   <td> patient ID:<br>
    <input type="number" name="P_ID"><br></td>

    <td> patient First name:<br>
  <input type="text" name=" pfname">
  <br></td>
  <td> patient Middle name:<br>
  <input type="text" name=" pmname">
  <br></td>
 
  
 <td> patient Last name:<br>
  <input type="text" name="plname"><br></td>
</tr></table>


patients gender:<br>
 <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>
        <table style="width:50%">
            <tr>

<td> Date of admission:<br></td>
  <td> <p> <input type ="date" name="date" required=""min="2022-01-10" max="2023-01-01"/> <br></td>
    
<td> Time of admission:<br></td>
<td> <p><input type="time" name="time" required="" min="08:00" max="18:00" step="1:00"/> <br></td>
  
 <td> Home Phone number:<br></td>
 <td><input type="integer" name="phone"><br></td>
  <td>City of residence:<br></td>
    <td><input type="text" name="city"><br></td>
    <tr><td>patient Diagnosis:<br></td>
    <td><input type="text" name="diagnosis"><br></td>
    <td>patient bed number:<br></td>
    <td><input type="text" name="B_NO"><br></td>
   <td><h1> <button type="submit">submit</button></h1><br><td>
  </tr>
  </tr>
  </table>

  </fieldset>
</form>
    </body>
</html>