<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $username = $_POST['username'];
        $pass = $_POST['password'];

        if(!empty($username) && !empty($pass) && !is_numeric($username)){

            $user_id = random_num(10);
            $query = "INSERT INTO testusers (user_id, user_name, password) VALUES ('$user_id', '$username', '$pass')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }else{
            echo "Please enter valid credentials";
        }

    }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
</head>
<body>
    
    <style type="text/css">
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: blue;
            border: none;
        }
        #box{
            background-color: lightblue;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>

    <div id="box">

        <form method="post">
            <div style="font-size: 20px; margin: 10px;color: white;">Sign up</div>
            <input id="text" type="text" name="username"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Sign up"><br><br>

            <a href="login.php">Login</a><br><br>

        </form>


    </div>
</body>
</html>