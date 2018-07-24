<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    include("dbconnect.php");

     if(isset($_POST["done"])){
           
        $title = trim($_POST["title"]);
        $department = trim($_POST["department"]);

        $file_name = $_FILES["photo"]["name"];
        $file_size = $_FILES["photo"]["size"];
        $file_tmp_name = $_FILES["photo"]["tmp_name"];
        $div = explode(".", $file_name);
        $file_ext = end($div);
        $permission = array("jpg", "jpeg", "png");

         
        try{
            
            if(empty($title)){
                throw new Exception ("Please set the title");
            }
            if(empty($department)){
                throw new Exception ("Please set Department");
            }
            
            if($file_size <= 1024*1024){
               if(in_array($file_ext, $permission)){
                    $unique_name = md5(time()).".".$file_ext;
                    $target = "uploads/".$unique_name;
                    if(move_uploaded_file($file_tmp_name, $target)){
                        
                            $insert = "INSERT INTO all_img(title, department, photo) VALUES('$title', '$department', '$unique_name')";

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
                    echo "Image size should be less than 1MB";
                }
            
        }catch(Exception $a){
            $err_msg = $a->getMessage();
        }

        
        
     }

?>


<?php include("header.php") ?>
<?php include("sidebar.php") ?>
    <div class="content-wrapper">
        <dic class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="background" style="background:#fff;padding:20px 35px;border-radius: 20px;">
                        <div class="img-heading" style="text-align: center;border-bottom: 2px solid #cacaca;padding: 10px 0px;">
                            <h1>Images Upload</h1>
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
                        
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" placeholder="Title" class="form-control" style="border-radius:10px;">
                            </div>
                            <div class="form-group">
                            <label for="">Department</label>
                            <select name="department" class="form-control">
                                <option value="">Select Department</option>
                                <?php
                                    $select = "SELECT * FROM department";
                                    $run = $connect->query($select);
                                    if($run->num_rows > 0){
                                        while($row = $run->fetch_assoc()){
                                            ?>
                                                <option value="<?php echo $row['department']; ?>"><?php echo $row['department']; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                            <div class="form-group">
                                <label for="">Upload Image</label>
                                <input type="file" name="photo" class="form-control" style="border-radius:15px;">
                            </div>
                            <input type="submit" value="Upload" name="done" class="btn btn-success btn btn-lg" style="border-radius:10px;">
                        </form>
                    </div>          
                </div>
            </div>
        </dic>
    </div>
<?php include("footer.php") ?>