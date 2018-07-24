<?php 

    include("dbconnect.php");

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        header("location:index.php");
    }

    if(isset($_POST["update"])){
        
        $name = trim($_POST["name"]);
        $department = trim($_POST["department"]);
        $designation = trim($_POST["designation"]);
        $home_district = trim($_POST["home_district"]);
        
        // for file upload
        $file_name = $_FILES["files"]["name"];
        $file_size = $_FILES["files"]["size"];
        $tmp_name = $_FILES["files"]["tmp_name"];
        $div = explode(".", $file_name);
        $file_ext = end($div);
        $allow = array("jpg", "jpeg", "png");
        $old_name = $_POST["oldname"];

        $join_year = trim($_POST["join_year"]);

    try{
            
            if(empty($name)){
                 throw new Exception ("Please Update Name Box.");
            }
            if(empty($department)){
                 throw new Exception ("Please Update Department Box.");
            }
            if(empty($designation)){
                 throw new Exception ("Please Update Designation Box.");
            }
            if(empty($home_district)){
                 throw new Exception ("Please Update Home District Box.");
            }
            if(empty($join_year)){
                 throw new Exception ("Please Update Join Year Box.");
            }
        
            if(!empty($file_name)){
                if($file_size <=1024*1024){
                if(in_array($file_ext, $allow)){
                 $unique_name = md5(time()).".".$file_ext;
                 $target = "uploads/".$unique_name;
                 if(move_uploaded_file($tmp_name, $target)){
                     
                     $update = "UPDATE civil_teachers SET thr_name='$name', department='$department', designation='$designation', home_district='$home_district', photo='$unique_name', join_year='$join_year' WHERE id='$id'";

                     $run = $connect->query($update);

                     if($run){
                         $scs_msg = "Information Update Successfully.";
                     }
                 }
   
              }else{
                  throw new Exception ("File should be jpg or jpeg or png");
                }    
            }else{
                 throw new Exception ("File size should be less than 1MB"); 
             }
          }else{
             $update = "UPDATE civil_teachers SET thr_name='$name', department='$department', designation='$designation', home_district='$home_district', photo='$unique_name', join_year='$join_year' WHERE id='$id'";

                $run = $connect->query($update);

                if($run){
                     $scs_msg = "Information Update Successfully.";
                }   
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
        <div class="row">
           <?php  
            
               $single = "SELECT * FROM civil_teachers WHERE id='$id'";
                $go = $connect->query($single);
            
            if($go->num_rows > 0){
                $row = $go->fetch_assoc();
                ?>  
        <form action="" method="post" enctype="multipart/form-data">
            <div class="col-md-10">
               <h1>Edit Information and Update:-</h1>
               
               <?php
                    if(isset($err_msg)){
                            echo '<div class="alert alert-danger">
  <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong>  '.$err_msg.'</div>';}
                
                    if(isset($scs_msg)){
                        echo '<div class="alert alert-success">
  <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Done.</strong>  '.$scs_msg.'</div>';}
                    
                
                ?>
               
                <h2>Name:  <input type="text" value="<?php echo $row['thr_name']; ?>" name="name"></h2>
                <hr>
                <h2>Department:  <input type="text" value="<?php echo $row['department']; ?>" name="department"></h2>
                <hr>
                <h2>Designation:  <input type="text" value="<?php echo $row['designation']; ?>" name="designation"></h2>
                <hr>
                <h2>Home District:  <input type="text" value="<?php echo $row['home_district']; ?>" name="home_district"></h2>
                <hr>
                
                <div class="form-group">
                    <label for="">File Upload</label>
                    <input type="file" name="files">
                    <img src="uploads/<?php echo $row['photo']; ?>" alt="" style="border:2px solid #0000ff;width:200px;height:200px;">
                    <input type="hidden" value="<?php echo $row['pic']; ?>" name="oldname" hidden>
                </div>
                
                <h2>Join Year:  <input type="text" value="<?php echo $row['join_year']; ?>" name="join_year"></h2>
               
                <input type="submit" value="Update" class="btn btn-primary" name="update">
            </div>
        </form>
            <?php
                
            }else{
                $connect->error;
            }
            
            ?>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
