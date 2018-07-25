<?php

    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    include("dbconnect.php");

    if(isset($_POST["done"])){
        
        $title = trim($_POST["title"]);
        
        try{
            
            if(empty($title)){
                throw new Exception("Insert the title");
            }
            
            
            $insert = "INSERT INTO title(title) VALUES('$title')";
                
            $run = $connect->query($insert);
            
            if($run){
                $scs_msg = "Your Title uploaded successfully";
            }else{
                $err_msg = "Something is wrong".$connect->error;
            }
            
            
        }catch(Exception $a){
            $err_msg = $a->getMessage();
        }
        
        
        
    }

?>


<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
    <div class="content-wrapper"><br>
        <section class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#fff;padding: 15px 20px;height:400px;border-radius:25px;">
                    <div class="title">
                        <h1 style="font-size: 40px;text-align: center;font-weight: bold;border-bottom: 1px solid #9a9898;margin: 6px 100px;padding: 15px 10px;">Entry the header title</h1>
                    </div><br><br>
                    
                    <?php

                                if(isset($err_msg)){
                                      echo '<div class="alert alert-danger">
                                      <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <strong>Danger!!</strong>  '.$err_msg.'</div>';
                                } 

                                if(isset($scs_msg)){
                                      echo '<div class="alert alert-success">
                                      <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <strong>Success!</strong>  '.$scs_msg.'</div>';
                                }


                         ?>
                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Entry header title">
                        </div>
                        <input type="submit" name="done" value="Done" class="btn btn-success btn btn-lg">
                    </form>
                </div>
            </div>
        </section>
    </div>
<?php include('footer.php'); ?>  