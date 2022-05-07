<?php

require 'connect.php';

if(isset($_POST['userEmail']) and isset($_POST['userPassword'])){
    $userEmail = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    $selectQuery = "SELECT * FROM userdetails WHERE email='$userEmail' OR password='$password' ;";

    $query = mysqli_query($con, $selectQuery);

    if($query){
        $userDetails = mysqli_fetch_array($query);



        if(mysqli_num_rows($query) > 0){

            setcookie('staffName', $userDetails[2], time() + (86400 * 30), "/");
            setcookie('staffEmail', $userDetails[3], time() + (86400 * 30), "/");

            echo "<script> window.location.href='./dashboard.html' </script>";
        }else {
            echo "<script> window.location.href='./login.html' </script>";
        }

    }else {
        echo "Error: $query <br/> $con->error";
    }
    


}

?>