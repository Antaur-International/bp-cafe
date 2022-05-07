<?php

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "bspcafe";

    $con = mysqli_connect($server_name, $user_name, $password, $database);


    if(!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

?>
