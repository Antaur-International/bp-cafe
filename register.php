<?php
require "connect.php";

if(isset($_POST['registerBtn'])){
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    $insertQuery = "INSERT INTO `userdetails` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');";

    $query = mysqli_query($con, $insertQuery);

    if($query){
        echo "<script> location.href='login.html' </script>";
    }else {
        echo "Error: $query <br/> $con->error";
    }
}
?>