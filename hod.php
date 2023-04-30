<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="hospdatabase";

// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ( isset($_POST['EMAIL'])){
  $D_ID = $_POST['D_ID'];
    $DFNAME = $_POST['DFNAME'];
    $DMNAME = $_POST['DMNAME'];
    $DLNAME = $_POST['DLNAME'];
    $gender = $_POST['gender'];
    $DATE = $_POST['DATE'];
    $PHONE= $_POST['PHONE'];
    $CITY = $_POST['CITY'];
    $EMAIL = $_POST['EMAIL'];
    $WNO = $_POST['WNO'];
    $HD = $_POST['HD'];
    $DATER = $_POST['DATER'];
    

    $query ="INSERT INTO HOD ( D_ID,DFNAME,DMNAME,DLNAME,gender,DATE,PHONE,CITY,EMAIL,WNO,HD,DATER ) VALUES ( '$D_ID','$DFNAME',' $DMNAME',' $DLNAME', ' $gender',' $DATE',' $PHONE',' $CITY',' $EMAIL',' $WNO',' $HD',' $DATER');";

    mysqli_query($con,$query);
   

     
}

?>
    <!DOCTYPE html>
<html>
<head>
    
    <title>Doctors information</title>
    <style>
                  body{
            background-image: url("image5\ \(2\).jpeg");
    background-repeat: initial;
  background-size: cover;
  height: 100px;
    font-size: 30px;
        }
    </style>

    <body>
        <h2>HOD information</h2>

<form method="POST">
    <fieldset>
        <legend>Personal information:</legend>
        <table style="width:100%">
            <tr>
   <td> Doctors ID:<br>
    <input type="number" name="D_ID"><br></td>

    <td> Doctors First name:<br>
  <input type="text" name=" DFNAME">
  <br></td>
  <td> Doctors Middle name:<br>
  <input type="text" name=" DMNAME">
  <br></td>
 
  
 <td> patient Last name:<br>
  <input type="text" name="DLNAME"><br></td>
</tr></table>


Doctors gender:<br>
 <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>
        <table style="width:50%">
            <tr>
<td>  Date of reporting:<br></td>
<td> <input type ="date" name="DATE" required=""min="2022-01-10" max="2023-01-01"/><br><br></td>
  
 <td> Home Phone number:<br></td>
 <td><input type="number" name="PHONE"><br></td>
  <td>City of residence:<br></td>
    <td><input type="text" name="CITY"><br></td>
    <td>Email adress:<br></td>
    <td><input type="email" name="EMAIL "><br></td>
  </tr>

            <tr>
                <td>staff no:<br></td>
                <td><input type="number" name="WNO"><br></td>
                <td> HOD Department :<br></td>
                <td><input type="text" name=" HD"><br></td>
                <td>Date from:<br></td>
                <td><input type ="date" name="DATER" required=""min="2022-01-10" max="2023-01-01"/><br></td>
                
            
           <td> <input type="submit"font-size="30px"></td>
        </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>