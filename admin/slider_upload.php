<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }
    
    include("dbconnect.php");

    if(isset($_POST["done"])){

        $file_name = $_FILES["photo"]["name"];
        $file_size = $_FILES["photo"]["size"];
        $file_tmp_name = $_FILES["photo"]["tmp_name"];
        $div = explode(".", $file_name);
        $file_ext = end($div);
        $permission = array("jpg", "jpeg", "png");

        
        if($file_size <= 1024*1024){
               if(in_array($file_ext, $permission)){
                    $unique_name = md5(time()).".".$file_ext;
                    $target = "uploads/".$unique_name;
                    if(move_uploaded_file($file_tmp_name, $target)){
                        
                            $insert = "INSERT INTO slider(photo) VALUES('$unique_name')";

                            $run = $connect->query($insert);

                            if($run){
                               $scs_msg = "Slider uploaded successfully"; 
                            }else{
                                echo "Not Uploaded".$connect->error;
                            }

                    }
                }else{
                    echo "File should be jpg or jpeg or png";
                } 
        }else{
            echo "Image size should be less than 1MB";
        }
        
    }

?>




<?php include("header.php") ?>
<?php include("sidebar.php") ?>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin:120px 300px;background:#ffffff;padding: 25px 21px;border-radius:25px;">
                    <h1 style="padding:30px 150px;border-bottom: 2px solid #8a8a8a;">Slider Upload</h1><br>
                    
                    <?php

                            if(isset($scs_msg)){
                                  echo '<div class="alert alert-success">
                                  <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  <strong>Success!</strong>  '.$scs_msg.'</div>';
                            }
                        
                  
                        ?>
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="slider">
                            <input type="file" name="photo" class="form-control" style="border-radius:40px;">
                        </div><br>
                        <input type="submit" name="done" value="Upload" class="btn btn-primary btn btn-lg">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php") ?>