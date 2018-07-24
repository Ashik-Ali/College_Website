<?php

    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    include("dbconnect.php");

    if(isset($_POST["done"])){
           
        $name = trim($_POST["name"]);
        $designation = trim($_POST["designation"]);
        $clg_name = trim($_POST["clg_name"]);
        $join_year = trim($_POST["join_year"]);
        
        // file upload
        $file_name = $_FILES["photo"]["name"];
        $file_size = $_FILES["photo"]["size"];
        $file_tmp_name = $_FILES["photo"]["tmp_name"];
        $div = explode(".", $file_name);
        $file_ext = end($div);
        $permission = array("jpg", "jpeg", "png");
        
        try{
            
            if(empty($name)){
                throw new Exception ("Please Enter Principal Name");
            }
            if(empty($designation)){
                throw new Exception ("Please Enter Designation");
            }
            if(empty($clg_name)){
                throw new Exception ("Please Enter College Name");
            }
            if(empty($join_year)){
                throw new Exception ("Please Enter Principal Join Year");
            }
            
            
            if($file_size <= 1024*500){
               if(in_array($file_ext, $permission)){
                    $unique_name = md5(time()).".".$file_ext;
                    $target = "uploads/".$unique_name;
                    if(move_uploaded_file($file_tmp_name, $target)){
                        
                        $insert = "INSERT INTO principal(name, designation, college, photo, join_year) VALUES('$name', '$designation', '$clg_name', '$unique_name', '$join_year')";
                        
                        $run = $connect->query($insert);
                        
                        if($run){
                           $scs_msg = "Information uploaded successfully"; 
                        }else{
                            echo "Not Uploaded".$connect->error;
                        }
                        
                    }
                }else{
                    echo "File should be jpg or jpeg or png";
                } 
            }else{
                echo "Image size should be less than 500KB";
            }
            
        }catch(Exception $a){
            $err_msg = $a->getMessage();
        }
        
        
    }

?>


<?php include("header.php") ?>
<?php include("sidebar.php") ?>

    <div class="content-wrapper"><br>
        <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="background:#fff;padding: 15px 20px;border-radius:20px;">
                 <div class="insert">
                    <h1 style="text-align:center;border-bottom: 1px solid #67826c;padding: 26px 0px;margin-top: -30px;text-weight:bold;">Pricipal Information Entry</h1>
                 </div><br>
                 <?php
                  
                        if(isset($err_msg)){
                              echo '<div class="alert alert-danger">
                              <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Warning!!</strong>  '.$err_msg.'</div>';
                        } 
                  
                        if(isset($scs_msg)){
                              echo '<div class="alert alert-success">
                              <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Success!</strong>  '.$scs_msg.'</div>';
                        }
                        
                  
                 ?>
                <div class="form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Principal Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Principal Name">
                        </div>
                        <div class="form-group">
                            <label for="">Designation</label>
                            <input type="text" class="form-control" name="designation">
                        </div>
                        <div class="form-group">
                            <label for="">College Name</label>
                            <input type="text" class="form-control" name="clg_name">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Photo Upload</label>
                            <input type="file" name="photo">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Join Year</label>
                            <input type="number" name="join_year" placeholder="Join Year" class="form-control">
                        </div>
                        
                        <input type="submit" value="SAVE" name="done" class="btn btn-success btn btn-lg">
                    </form>
                </div>
          </div>
        </div>
        </section>
    </div>
<?php include("footer.php") ?>