<?php

    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    include("dbconnect.php");

    if(isset($_POST["done"])){
           
        $name = trim($_POST["name"]);
        $roll = trim($_POST["roll"]);
        $registration = trim($_POST["registration"]);
        $department = trim($_POST["department"]);
        $semister = trim($_POST["semister"]);
        $shift = trim($_POST["shift"]);
        $grade = trim($_POST["grade"]);
        
        try{
            
            if(empty($name)){
                throw new Exception ("Please Stdudent Name Inserted");
            }
            if(empty($roll)){
                throw new Exception ("Please Stdudent Roll Inserted");
            }
            if(empty($registration)){
                throw new Exception ("Please Stdudent Registration Inserted");
            }
            if(empty($department)){
                throw new Exception ("Please Stdudent Department Inserted");
            }
            if(empty($semister)){
                throw new Exception ("Please Stdudent Semister Inserted");
            }
            if(empty($shift)){
                throw new Exception ("Please Stdudent Shift Inserted");
            }
            if(empty($grade)){
                throw new Exception ("Please Result Grade Inserted");
            }
            
                        
                $insert = "INSERT INTO result(name, roll, registration, department, semister, shift, grade) VALUES('$name', '$roll', '$registration', '$department', '$semister', '$shift', '$grade')";
                        
                $run = $connect->query($insert);
                        
                if($run){
                     $scs_msg = "Result uploaded successfully"; 
                }else{
                     echo "Not Saved".$connect->error;
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
            <div class="col-md-8 col-md-offset-2" style="background:#fff;padding: 15px 20px;">
                <div class="result-head">
                    <h1 style="text-align:center;border-bottom: 1px solid #67826c;padding: 26px 0px;margin-top: -30px;text-weight:bold;">Student's Result</h1>
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
                    <form action=""  method="post">
                        <div class="form-group">
                            <label for="">Student Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Roll</label>
                            <input type="number" name="roll" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Registration</label>
                            <input type="number" name="registration" class="form-control">
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
                            <label for="">Semister</label>
                            <select name="semister" class="form-control">
                                <option value="">Select Semister</option>
                                <?php
                                    $select = "SELECT * FROM semister";
                                    $run = $connect->query($select);
                                    if($run->num_rows > 0){
                                        while($row = $run->fetch_assoc()){
                                            ?>
                                                <option value="<?php echo $row['semister']; ?>"><?php echo $row['semister']; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Shift</label>
                            <select name="shift" class="form-control">
                                <option value="">Select Shift</option>
                                <?php
                                    $select = "SELECT * FROM shift";
                                    $run = $connect->query($select);
                                    if($run->num_rows > 0){
                                        while($row = $run->fetch_assoc()){
                                            ?>
                                                <option value="<?php echo $row['shift']; ?>"><?php echo $row['shift']; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Grade Point</label>
                            <input type="text" name="grade" class="form-control">
                        </div>
                        <input type="submit" name="done" value="SAVE" class="btn btn-success btn btn-lg">
                    </form>
               </div>
          </div>
      </section>
    </div>
<?php include("footer.php") ?>