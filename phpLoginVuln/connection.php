<?php
    $dbhost = "db";
    $dbuser = "root";
    $dbpass = "root";
    $dbname = "mysql";

    if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){

        die("Something went wrong.");
    }
?>
