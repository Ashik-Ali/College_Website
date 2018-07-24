<?php


    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }


    include("dbconnect.php");

    if(isset($_POST["done"])){
        
        $name = trim($_POST["std_name"]);
        $roll = trim($_POST["roll"]);
        $registration = trim($_POST["registration"]);
        $department = trim($_POST["department"]);
        $semister = trim($_POST["semister"]);
        $shift = trim($_POST["shift"]);
        $session = trim($_POST["session"]);
        
        try{
            
            if(empty($name)){
                throw new Exception ("Please Inserted Student Name.");
            }
            
            if(empty($roll)){
                throw new Exception ("Please Inserted Student Roll.");
            }
            
            if(empty($registration)){
                throw new Exception ("Please Inserted Student Registration.");
            }
            
            if(empty($department)){
                throw new Exception ("Please Inserted Student Department.");
            }
            
            if(empty($semister)){
                throw new Exception ("Please Inserted Student Semister.");
            }
            
            if(empty($shift)){
                throw new Exception ("Please Inserted Student Shift.");
            }
            
            if(empty($session)){
                throw new Exception ("Please Inserted Student Session.");
            }
            
            
            $insert = "INSERT INTO students(std_name, roll, registration, department, semister, shift, year) VALUES('$name', '$roll', '$registration', '$department', '$semister', '$shift', '$session')";
            
            $run = $connect->query($insert);
            
            if($run){
                $scs_msg = "Student Information Uploaded Successfully";
            }else{
                $err_msg = "Something Error" .$connect->error;
            }
            
            
        }catch(Exception $a){
            $err_msg = $a->getMessage().$connect->error;
        }
        
        
    }


?>




<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
    
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:25px;">
                    <h1 style="text-align: center;border-bottom: 3px solid #6c6c6f;font-weight: bold;padding: 22px;">Students Entry</h1><br>
                    
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
                    
                    <form action="" method="post">
                       
                        <div class="form-group">
                        <input type="text" name="std_name" class="form-control" placeholder="Student Name" value="<?php if(isset($name)){ echo $name; } ?>">
                        </div>
                       
                        <div class="form-group">
                        <input type="number" name="roll" class="form-control" placeholder="Student Roll" value="<?php if(isset($roll)){ echo $roll; } ?>">
                        </div>
                       
                        <div class="form-group">
                        <input type="number" name="registration" class="form-control" placeholder="Student Registration" value="<?php if(isset($registration)){ echo $registration; } ?>">
                        </div>
                       
                        <div class="form-group">
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
                            <input type="text" name="session" class="form-control" placeholder="Session" value="<?php if(isset($session)){ echo $session; } ?>">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Save" name="done" class="btn btn-success btn btn-lg">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>