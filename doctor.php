

<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="hospdatabase";

// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ( isset($_POST['city'])){
    $D_ID = $_POST['D_ID'];
    $Dfname = $_POST['Dfname'];
    $Dmname = $_POST['Dmname'];
    $Dlname = $_POST['Dlname'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];    
    $phone= $_POST['phone'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $dtype = $_POST['dtype'];
    $w_no = $_POST['w_no'];
    $Dep = $_POST['Dep'];
   
    
   

    $query ="INSERT INTO doc ( D_ID,Dfname,Dmname,Dlname,gender,date,phone,city,email,dtype,w_no,Dep,) VALUES ( '$D_ID','$Dfname',' $Dmname',' $Dlname', ' $gender',' $date',' $phone',' $city',' $email',' $dtype',' $w_no',' $Dep');";

    $result = mysqli_query($con,$query);
    if($result && mysqli_num_rows($result) > 0){
        
        echo "You have successfully inserted data";
         
        exit();
    }

    else{
        echo "You haven't entered any data";
        exit();
    

?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Doctors information</title>
</head>
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
        <h2>Doctors information</h2>

<form method="POST">
    <fieldset>
        <legend>Personal information:</legend>
        <table style="width:100%">
            <tr>
   <td> Doctors ID:<br>
    <input type="number" name="D_ID"><br></td>

    <td> Doctors First name:<br>
  <input type="text" name=" Dfname">
  <br></td>
  <td> Doctors Middle name:<br>
  <input type="text" name=" Dmname">
  <br></td>
 
  
 <td> patient Last name:<br>
  <input type="text" name="Dlname"><br></td>
</tr>


Doctors gender:<br>
 <input type="radio" name="gender" value="male" checked> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>
            <tr>
<td>  Reporting Date:<br></td>
<td> <input type ="date" name="date" required=""min="2022-01-10" max="2023-01-01"/><br><br></td>
  
 <td> Home Phone number:<br></td>
 <td><input type="number" name="phone"><br></td>
  <td>City of residence:<br></td>
    <td><input type="text" name="city"><br></td>
    <td>Email adress:<br></td>
    <td><input type="email" name="email"><br></td>
  </tr>

  
Type of doc:<br>
<input type="radio" name="dtype" value="chief doctor" >chief doctor<br>
   <input type="radio" name="dtype" value="Resident"> Resident<br>
   <input type="radio" name="dtype" value="Doctor">Doctor<br>
   <input type="radio" name="dtype" value="Nurse">Nurse<br>

  <a href="user.html">Patient id</a><br>
  

            <tr>
                <td>work no:<br></td>
                <td><input type="number" name="w_no"><br></td>
                <td>Department :<br></td>
                <td><input type="text" name="Dep"><br></td>
               
                <td><input type="submit" name="submit"><br></td>
                
            </tr>
      </table>
 </form>
 </fieldset>
    </body>
</html>
