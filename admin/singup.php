<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    include("dbconnect.php");

        if(isset($_POST["done"])){
        
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $username = trim($_POST["username"]);
        $password = md5($_POST["password"]);
        $con_password = md5($_POST["con_password"]);
        $dob_month = trim($_POST["dob_month"]);
        $dob_day = trim($_POST["dob_day"]);
        $dob_year = trim($_POST["dob_year"]);
        $gander = $_POST["Gander"];

        try{
            
            if(empty($name)){
                throw new Exception ("Name Field can't be Empty");
            }
                
            if(empty($email)){
                throw new Exception ("Email Field can't be Empty");
            }
                
            if(empty($username)){
                throw new Exception ("Username Field can't be Empty");
            }
                
            if(empty($password && $con_password)){
                throw new Exception ("Password Field can't be Empty");
            }
                
            if(empty($password == $con_password)){
                throw new Exception ("Password or Confirm Password not same");
            }
                
            if(empty($dob_month && $dob_day && $dob_year)){
                throw new Exception ("DOB Field can't be Empty");
            }
                
            if(empty($gander)){
                throw new Exception ("Gander Field can't be Empty");
            }
            
            
            
            $insert = "INSERT INTO admin(name, email, username, password, dob, gander)VALUES('$name', '$email', '$username', '$password', '$dob_day/$dob_month/$dob_year', '$gander')";
                
            $run = $connect->query($insert);
            
            if($run){
                $scs_msg = "Registration Successfully";
            }else{
                echo "Some Problems";
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
    <title>Register Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{background: #d9d1d1}
        .form-area{width: 400px;height: 660px;margin: auto;background: #00adee;margin-top: 50px;padding: 5px;}
        form{padding: 10px;font-family: arial;border: 1px dotted #fff;margin: 10px;height: 635px;}
        .register-form h2{width: 95%;text-align: center;background: #ffa500;color: #fff;padding: 10px;border-radius: 10px;}
        input{padding: 10px;margin: 5px;border-radius: 5px;border: none;}
        input [type="text"], [type="email"], [type="text"], [type="password"] {width: 95%;}
        .submit {width: 104%;background: #ffa500;cursor: pointer;font-size: 18px;font-weight: bold;color: #fff;border-radius: 10px;padding: 10px;font-size: 25px;margin-left: -7px;}
        .submit:hover{background: #ff6200}
        select{padding: 10px;width: 32%;border-radius: 5px;}
    </style>
</head>
<body>
    <div class="form-area">
        <form action="" method="post">
           <div class="register-form">
            <h2>Register Form</h2>
                    <?php

                       if(isset($scs_msg)){
                                echo '<P class="alert alert-success" style="background:#24c937;color:#fff;">
                                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                '.$scs_msg.'</p>';
                            }

                       if(isset($err_msg)){
                                echo '<P class="alert alert-warning" style="background:#ff0404;color:#fff;">
                                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                '.$err_msg.'</p>';
                            }

                   ?>
            <input type="text" name="name" placeholder="Your Name" value="<?php if(isset($name)){echo $name;} ?>">
            <input type="Email" name="email" placeholder="Email" value="
                <?php
                     if(isset($email)){
                         echo $email;
                     }               
                ?>
            ">
            <input type="text" name="username" placeholder="Username" value="<?php if(isset($username)){echo $username;} ?>">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="con_password" placeholder="Confirm Password">
            <br><br>
            <span>Date of Birth</span><br>
            <select name="dob_month">
                <option value="">Month</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            
            <select name="dob_day">
                <option value="">Day</option>
                <?php
                    $day = 1;
                    while($day<=31){
                        ?>
                            <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                        <?php
                        echo $day++;
                    }
                ?>
            </select>
            
            <select name="dob_year">
                <option value="">Year</option>
                <?php
                    $year = 2018;
                    while($year >= 1900){
                        ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php
                        echo $year--;
                    }
                ?>
            </select><br><br>
            <input type="radio" name="Gander" value="male">Male
            <input type="radio" name="Gander" value="Female">Female
            <br>
            <input type="checkbox">I agree to the terms to use
            <br>
            <input type="submit" class="submit" value="Register Now" name="done">
            </div>
        </form>
       <a href="index.php" class="btn btn-primary" style="float:right;">Back</a>
    </div>
</body>
</html>