<?php
    $dbhost = "localhost";
    $dbuser = "testUser";
    $dbpass = "qwerty123";
    $dbname = "test";

    if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){

        die("Something went wrong.");
    }
?>