<?php

    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    include("dbconnect.php");

    if(isset($_POST["done"])){
           
        $title = trim($_POST["title"]);
        $description = trim($_POST["description"]);
        
        // file upload
        $file_name = $_FILES["file"]["name"];
        $file_size = $_FILES["file"]["size"];
        $file_tmp_name = $_FILES["file"]["tmp_name"];
        $div = explode(".", $file_name);
        $file_ext = end($div);
        $permission = array("jpg", "jpeg", "png", "pdf");
        
        $date = trim($_POST["date"]);
        
        try{
            
            if(empty($title)){
                throw new Exception ("Please Title Inserted");
            }
            if(empty($description)){
                throw new Exception ("Please Description or File Inserted");
            }
            if(empty($date)){
                throw new Exception ("Please Notice Date Inserted");
            }
            
            
        if(!empty($file_name)){
            if($file_size <= 1024*1024*5){
               if(in_array($file_ext, $permission)){
                    $unique_name = md5(time()).".".$file_ext;
                    $target = "uploads/".$unique_name;
                    if(move_uploaded_file($file_tmp_name, $target)){
                        
                        $insert = "INSERT INTO notice(title, description, pdf_file, date) VALUES('$title', '$description', '$unique_name', '$date')";
                        
                        $run = $connect->query($insert);
                        
                        if($run){
                           $scs_msg = "Notice uploaded successfully"; 
                        }else{
                            $err_msg = "Not Uploaded".$connect->error;
                        }
                        
                    }
                }else{
                    $err_msg = "File should be jpg or jpeg or png of pdf";
                } 
            }else{
                $err_msg = "Image size should be less than 5MB";
            }
            
          }else{
            $insert = "INSERT INTO notice(title, description, date) VALUES('$title', '$description', '$date')";
                        
                $run = $connect->query($insert);
                        
                    if($run){
                        $scs_msg = "Notice uploaded successfully"; 
                    }else{
                        $err_msg = "Not Uploaded".$connect->error;
                    }
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
                <div class="col-md-8 col-md-offset-2" style="background:#fff;padding: 15px 20px;">
                    <div class="notice_heading">
                        <h1 style="text-align:center;border-bottom: 1px solid #67826c;padding: 26px 0px;margin-top: -30px;text-weight:bold;">Upload Notice</h1>
                    </div>

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
                            <input type="text" name="title" class="form-control" value="<?php if(isset($title)){ echo $title; } ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" cols="20" rows="5" class="form-control" value="<?php if(isset($description)){ echo $description; } ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">PDF File</label>
                            <input type="file" name="file">
                        </div>
                        <div class="form-group">
                            <label for="">Notice Date</label>
                            <input type="text" name="date" class="form-control" value="<?php if(isset($date)){ echo $date; } ?>">
                        </div>
                        <input type="submit" name="done" value="Upload" class="btn btn-success btn btn-lg">
                    </form>
                </div>
            </div>
        </section>
    </div>
<?php include('footer.php'); ?>  