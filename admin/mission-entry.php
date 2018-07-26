<?php

    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    include("dbconnect.php");

    if(isset($_POST["done"])){
        
        $name = trim($_POST["name"]);
        $description = trim($_POST["description"]);
        $status = trim($_POST["status"]);
        
        try{
            
            if(empty($name)){
                throw new Exception("Please write Name");
            }
            if(empty($description)){
                throw new Exception("Please write Description");
            }
            if(empty($status)){
                throw new Exception("Please insert status");
            }
            
            
            $insert = "INSERT INTO mission(name, description, status) VALUES('$name', '$description', '$status')";
            
            $run = $connect->query($insert);
            
            if($run){
                $scs_msg = "Your Data Entry Successfully";
            }else{
                $err_msg = "Something wrong".$connect->error;
            }
            
            
        }catch(Exception $a){
            $err_msg = $a->getMessage();
        }
        
    }

?>


<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>

    <div class="content-wrapper">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;padding: 10px 70px;border-radius:25px;">
                    <div class="mission">
                        <h1 style="font-size:40px;font-weight: bold;border-bottom: 1px solid #888383;padding: 15px 10px;text-align:center;">Mission & Vision uploaded</h1>
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
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Write Name" value="<?php  if(isset($name)){ echo $name; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" cols="20" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" name="status" class="form-control" value="<?php if(isset($status)){ echo $status; } ?>">
                        </div>
                        <input type="submit" value="Done" name="done" class="btn btn-info btn btn-lg">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>