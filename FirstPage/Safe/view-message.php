<?php

    $viewmsg = $_POST["viewmsg"];

    $host = 'localhost';
    $user = 'testUser';
    $passwd = 'qwerty123';
    $DB = 'test';
    $table = 'test_table2';
    // $column = 'message';

    $conn = mysqli_connect($host, $user, $passwd, $DB);

    $stmt = $conn->prepare("SELECT * FROM test_table2 WHERE name = ?");
    $stmt->bind_param("s", $viewmsg);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($row = $res->fetch_assoc()) {
        printf("%s wrote %s | ",$row['name'],$row['msg']);
    }
?>