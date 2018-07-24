<?php

    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    include("dbconnect.php");

    if(isset($_POST["done"])){
           
        $thr_name = trim($_POST["thr_name"]);
        $department = trim($_POST["department"]);
        $designation = trim($_POST["designation"]);
        $district = trim($_POST["district"]);
        $year = trim($_POST["year"]);
        $status = trim($_POST["status"]);
        
        // file upload
        $file_name = $_FILES["photo"]["name"];
        $file_size = $_FILES["photo"]["size"];
        $file_tmp_name = $_FILES["photo"]["tmp_name"];
        $div = explode(".", $file_name);
        $file_ext = end($div);
        $permission = array("jpg", "jpeg", "png");
        
        try{
            
            if(empty($thr_name)){
                throw new Exception ("Please Enter Teacher Name");
            }
            if(empty($department)){
                throw new Exception ("Please Enter Teacher department");
            }
            if(empty($designation)){
                throw new Exception ("Please Enter Teacher Designation");
            }
            if(empty($district)){
                throw new Exception ("Please Enter Teacher Home District");
            }
            if(empty($year)){
                throw new Exception ("Please Enter Teacher Joining Year");
            }
            if(empty($status)){
                throw new Exception ("Please Enter Teacher Status");
            }
            
            
            if($file_size <= 1024*500){
               if(in_array($file_ext, $permission)){
                    $unique_name = md5(time()).".".$file_ext;
                    $target = "uploads/".$unique_name;
                    if(move_uploaded_file($file_tmp_name, $target)){
                        
                        $insert = "INSERT INTO teachers(thr_name, department, designation, home_district, photo, join_year, status) VALUES('$thr_name', '$department', '$designation', '$district', '$unique_name', '$year', '$status')";
                        
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
                    <h1 style="text-align:center;border-bottom: 1px solid #67826c;padding: 26px 0px;margin-top: -30px;text-weight:bold;">Teacher Information Entry</h1>
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
                            <label for="">Teacher Name</label>
                            <input type="text" name="thr_name" class="form-control" placeholder="Teacher Name" value="<?php if(isset($thr_name)){ echo $thr_name; } ?>">
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
                            <label for="">Designation</label>
                            <input type="text" name="designation" class="form-control" placeholder="Designation" value="<?php if(isset($designation)){ echo $designation; } ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Home District</label>
                            <input type="text" name="district" class="form-control" placeholder="Home District" value="<?php if(isset($district)){ echo $district; } ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Photo Upload</label>
                            <input type="file" name="photo">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Join Year</label>
                            <input type="number" name="year" placeholder="Join Year" class="form-control" value="<?php if(isset($year)){ echo $year; } ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="number" name="status" placeholder="Status" class="form-control" value="<?php if(isset($status)){ echo $status; } ?>">
                        </div>
                        
                        <input type="submit" value="SAVE" name="done" class="btn btn-success btn btn-lg">
                    </form>
                </div>
          </div>
        </div>
        </section>
    </div>
<?php include("footer.php") ?>