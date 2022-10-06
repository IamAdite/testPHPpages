<?php
    // для BLIND TIME-BASED SQL INJECTION 
    // комманда John' id=if(LEFT(VERSION(),2)='10',SLEEP(20),1) ; -- 
    // замедлила время ответа на 20 секунд
    
    // для обычной SQL инъекции команда 'OR'1'='1 вывела всю базу данных
    
    $viewmsg = $_POST["viewmsg"];

    $host = 'localhost';
    $user = 'testUser';
    $passwd = 'qwerty123';
    $DB = 'test';

    $conn = mysqli_connect($host, $user, $passwd, $DB);

    $query = "SELECT * FROM test_table2 WHERE name = '" . $_POST['viewmsg'] ."'";
    $res = mysqli_query($conn, $query);
    while ($row = $res->fetch_assoc()) {
        printf("%s wrote %s | ",$row['name'],$row['msg']);
    }
    printf("Done")
?>


+79111330790

Завернуть куда-нибудь для легкой развертки
SQL time based, error based, Двойная SQL, Обычная инъекция
