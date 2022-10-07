<?php
// Если ввести 'OR'1'='1 в Username и угадать пароль — зайдет в юзера с таким паролем
// Если ввести 'OR'1'='1 в пароль и угадать юзера — зайдет в юзера


session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $username = $_POST['username'];
    $pass = $_POST['password'];

    if(!empty($username) && !empty($pass) && !is_numeric($username)){

        $query = "SELECT * FROM testusers WHERE user_name = '$username' AND password = '$pass' limit 1";

        $result = mysqli_query($con, $query);

        if ($result){
            if($result && mysqli_num_rows($result) > 0){

                $user_data = mysqli_fetch_assoc($result);
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
        }
        echo "Wrong username or password!";   
    }else{
        echo "Wrong username or password!";
    }

}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
            background-color: orange;
            border: none;
        }
        #box{

            background-color: Black;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>

    <div id="box">

        <form method="post">
            <div style="font-size: 20px; margin: 10px;color: white;">Login</div>
            <input id="text" type="text" name="username"><br><br>
            <input id="text" type="password" name="password"><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            <a href="signup.php" >Sign up</a><br><br>

        </form>


    </div>
</body>
</html>