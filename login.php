<?php

if(isset($_POST['userEmail']) and isset($_POST['userPassword'])){
    $userEmail = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    echo $userEmail;
    echo $password;

    // Navigation to the next page
    echo "<script> window.location.href='./dashboard.html' </script>";
}

?>