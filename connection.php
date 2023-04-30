 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospdatabase";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if (isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "Select * FROM mylogin where username = '". $username."' AND password = '" .$password."' LIMIT 1";
    
    $result = mysqli_query($con,$query);
    if($result && mysqli_num_rows($result) > 0){
        echo "You have succesfully logged in";
        header("location:sample.html");
        exit();

    }
    else{
        echo "You have entered invalid data";
        exit();

    }
     
    
}  

?>