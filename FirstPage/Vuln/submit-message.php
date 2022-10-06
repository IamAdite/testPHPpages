<?php
    $name = $_POST["name"];
    $msg = $_POST["msg"];

    $host = 'localhost';
    $user = 'testUser';
    $passwd = 'qwerty123';
    $DB = 'test';

    $conn = mysqli_connect($host, $user, $passwd, $DB);
    $sql = "INSERT INTO test_table2 (name, msg) VALUES (?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if ( ! mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "ss", $name, $msg);
    mysqli_stmt_execute($stmt);
    echo "Message submited.";
    
?>