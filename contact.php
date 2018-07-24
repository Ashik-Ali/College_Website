<?php 

    include('dbconnect.php');

    if(isset($_POST["done"])){
        
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $description = trim($_POST["description"]);
        
        try{
            
            if(empty($name)){
                throw new Exception ("Please fill-up the Name box");
            }
            if(empty($email)){
                throw new Exception ("Please fill-up the Email box");
            }
            if(empty($description)){
                throw new Exception ("Please fill-up the Description box");
            }
            
            
            $insert = "INSERT INTO contact(name, email, description) VALUES('$name', '$email', '$description')";
            
            $run = $connect->query($insert);
            
            if($run){
                $scs_msg = "Your Feedback Successfully";
            }else{
                echo "Error".$connect->error;
            }
            
            
            
        }catch(Exception $a){
            $err_msg = $a->getMessage();
        }
        
    }
        

?>



<?php include('header.php') ?>

<div class="wrapper" style="background:#e0dcdc;">
    <div class="container">
        <div class="row"><br>
            <div class="col-md-7" style="background:#ffffff;padding:0px 30px;border-radius:20px;">
               <form action="" method="post">
                    <h1 style="background-image: url(images/tech.jpg);width: 195px;margin: 15px 210px;padding: 15px;border-radius: 10px;color: #ffffff;height:70px;"><b>Feedback</b></h1><br>
                    
            <?php
                  
                        if(isset($err_msg)){
                              echo '<div class="alert alert-danger">
                              <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Warning!</strong>  '.$err_msg.'</div>';
                        } 
                  
                        if(isset($scs_msg)){
                              echo '<div class="alert alert-success">
                              <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Success!</strong>  '.$scs_msg.'</div>';
                        }
                        
                  
            ?>
                    
                    <input type="text" name="name" placeholder="Your Name" class="form-control"><br>
                    <input type="email" name="email" placeholder="Email" class="form-control"><br>
                    <textarea name="description" cols="20" rows="10" class="form-control" placeholder="Description"></textarea><br>
                    <input type="submit" name="done" class="btn btn-primary btn btn-lg">
                </form>
            </div>
            <div class="col-md-4 col-md-offset-1" style="background:#ffffff;padding:0px 30px;border-radius:20px;height: 517px;">
                <h2 style="background-image: url(images/tech.jpg);padding: 20px;color: #ffffff;border-radius: 20px;height:70px"><b>Contact Information</b></h2>
                <hr>
                <h4><b>Jhenaidah Polytechnic Institute</b></h4>
                <hr>
                <p>Principal:- <b>Abdul Roshid Mollick</b></p>
                <hr>
                <p>Mobile:- <b>01559124757</b></p>
                <hr>
                <p>Email:- <b>principal@gmail.com</b></p>
                <hr>
            </div>
        </div>
    </div><br>
</div>

<?php include('footer.php') ?>