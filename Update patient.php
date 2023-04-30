<?php
/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */
 $link = mysqli_connect("localhost", "root", "", "hospdatabase");
 // Check connection
 if($link === false){
 die("ERROR: Could not connect. " . mysqli_connect_error()); }
 // Attempt update query execution
 $sql = "UPDATE patient SET pfname='paula' WHERE P_ID=24";
 if(mysqli_query($link, $sql)){
 echo "Records were updated successfully."; }
 else
 {
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); }
 // Close connection
 mysqli_close($link); 
?>

<!DOCTYPE html>
<html>
  <head>

  </head>
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
    <title>user page</title>
    <body>
        <h2>patients information</h2>

<form >
    <fieldset> <legend>Personal information:</legend>
      <table style="width:100%">
          <tr>
 <td> patient ID:<br>
  <input type="number" name="P_ID"><br></td>

  <td> patient First name:<br>
<input type="text" name=" Pfname">
<br></td>
<td> patient Middle name:<br>
<input type="text" name=" Pmname">
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
            <td>patient Diagnosis:<br></td>
    <td><input type="text" name="Diagnosis"><br></td>
             <td> <label>Readmission date<br></td>
             <td> <p> <input type ="date" name="date" required=""min="2022-01-10" max="2023-01-01"/> </label></p><br></td> 
               <td><p>
               <td> <label>Readmission Time<br></td>
                <td><p> <input type="time" name="time" required="" min="08:00" max="18:00" step="1:00"/></label></p><br></td> 
               
             
  
 <td> Home Phone number:<br></td>
 <td><input type="number" name="phone "><br></td>
  <td>City of residence:<br></td>
    <td><input type="text" name="City "><br></td>
  </tr>
  </table>

  <a href="Diagnosis information">Patient diagnosis</a><br>
  <a href="Bed information">Patient bed</a>
  <input type="submit"name="submit"><br>

  </fieldset>
</form>
    </body>
</html>