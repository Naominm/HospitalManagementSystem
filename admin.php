
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="hospdatabase";

// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ( isset($_POST['City'])){
    $A_ID = $_POST['A_ID'];
    $Amname = $_POST['Amname'];
    $Alname = $_POST['Alname'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $phone= $_POST['phone'];
    $City = $_POST['City'];
    $workno = $_POST['workno'];
    $datefr = $_POST['datefr'];
    
    $query ="INSERT INTO admin(A_ID,Amname,Alname,gender,date,phone,City,workno,datefr ) VALUES ( '$A_ID',' $Amname',' $Alname', ' $gender',' $date',' $phone',' $City',' $workno',' $datefr');";

    mysqli_query($con,$query);
   

     
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <style>
              body{
            background-image: url("image5\ \(2\).jpeg");
    background-repeat: initial;
  background-size: cover;
  height: 100px;
    font-size: 30px;
        }
    </style>

</head>

<body>
         <h2>Admin information</h2>
    
    <form method="POST">
        <fieldset>
            <legend>Personal information:</legend>
            <table style="width:100%">
                <tr>
      
        <td>Admin ID:<br>
      <input type="number" name=" A_ID">
      <br></td>
      <td>Admin Middle name:<br>
      <input type="text" name=" Amname">
      <br></td>
     
      
     <td> AdminLast name:<br>
      <input type="text" name="Alname"><br></td>
    </tr></table>
    
    
    Admin gender:<br>
     <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other<br>
            <table style="width:50%">
                <tr>
    <td> reporting Date:<br></td>
    <td> <input type ="date" name="date" required=""min="2022-01-10" max="2023-01-01"/><br><br></td>
      
     <td> Phone number:<br></td>
     <td><input type="number" name="phone"><br></td>
      <td>City of residence:<br></td>
        <td><input type="text" name="City "><br></td>
      </tr>
     
    
                <tr>
                    <td>work no:<br></td>
                    <td><input type="number" name="workno"><br></td>
                    <td>Date from:<br></td>
                    <td><input type ="date" name="datefr" required=""min="2022-01-10" max="2023-01-01"/><br></td>
                    <td><h1> <input type="submit"name="submit"></h1><br><td>
                    
                </tr>
                </table>
      </fieldset>
        
      </form>
</body>
</html>