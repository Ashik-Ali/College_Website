<?php
    session_start();
    include("dbconnect.php");

    if(isset($_POST["done"])){
        $email = trim($_POST["email"]);
        $password = md5($_POST["password"]);
    
        try{
           if(empty($email)){
               throw new Exception ("Please enter your Emial");
           }  
           if(empty($password)){
               throw new Exception ("Wrong Password");
           }
            
            $insert = "SELECT * FROM admin WHERE email='$email' && password='$password'";
            
            $run = $connect->query($insert);

            if($run->num_rows > 0){
                $row = $run->fetch_assoc();
                $_SESSION["name"] = $row["name"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["password"] = $row["password"];
                header("location:index.php");
            }else{
                $inv = "Invalid Email or Password";
            }
            
        }catch(Exception $a){
            $err_msg = $a->getMessage();
        }
    
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <style>
        .login-form {background: #dad9d9;background-size: cover;background-position: center;font-family: sans-serif;}

        .login-box {width: 320px;height: 420px;background: #101010;color: #fff;top: 50%;left: 50%;position: absolute;transform: translate(-50%, -50%);box-sizing: border-box;padding: 70px 30px;border-radius: 10px;}

        .login-box img {width: 100px;height: 100px;border-radius: 50%;position: absolute;top: -13%;left: calc(50% - 50px);}

        .login-box h1 {margin: 0px;padding: 0px 0px 20px;text-align: center;font-size: 30px;}

        .login-box p {margin: 0;padding: 0;font-weight: bold;}

        .login-box input {width: 100%;margin-bottom: 20px;}

        .login-box input[type="email"], input[type="password"] {border: none;border-bottom: 1px solid #fff;background: transparent;outline: none;height: 40px;color: #fff;font-size: 15px;}

        .login-box input[type="submit"] {border: none;outline: none;height: 40px;background: #7bbbda;color: #fff;font-size: 18px;border-radius: 20px;}

        .login-box input[type="submit"]:hover {cursor: pointer;background: #0ac0f7;color: #000;}

        .login-box a {text-decoration: none;font-size: 12px;line-height: 20px;color: darkgray;}

        .login-box a:hover {color: #ffc107;}
    </style>
</head>
<body class="login-form">
    <div class="login-box">
        <img src="img/login.jpg">
        <h1>Login Here</h1>
            <?php

                    if(isset($err_msg)){
                        echo '<div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Danger!</strong> '.$err_msg.'</div>';
                    }

                     if(isset($inv)){
                         echo '<div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Danger!</strong> '.$inv.'</div>';
                    }

            ?>
        <form action="" method="post">
            <p>Email</p>
            <input type="email" name="email" placeholder="Enter email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="done" value="Log In">
            <a href="">Lost your password?</a><br>
            <a href="">Don't have an account?</a>
        </form>
        
    </div>
</body>
</html>