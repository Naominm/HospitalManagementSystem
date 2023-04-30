
 <?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="hospdatabase";

// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ( isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query ="Select * FROM mylogin where username ='". $username."' AND Password='".$password."' LIMIT 1 ";

    $result=mysqli_query($con,$query);

    if($result && mysqli_num_rows($result) > 0){
        
        echo "You have successfully logged in";
        header("location:sample.html");
        exit();
    }

    else{
       
       /* echo  '<script type="text/javascript">';
       
        echo '</script>'*/
        echo 'alert("login unsucsessful please enter valid details")';
    }
}

?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login form</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <div class="login-form">
        <h1>login form</h1>
        <form action="connection.php" method="POST">
            <p>User Name</p>
            <input type="text" name="username" placeholder="User Name">
            <p>Password</p>
            <input type="password" name="password" placeholder="password">
          <a href="sample.html"> <button type="submit">login</button></a> 
        </form>
    </div>
</body>
</html>