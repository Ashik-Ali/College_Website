<?php 


    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }


    include("dbconnect.php");

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        header("location:index.php");
    }

    if(isset($_POST["update"])){
        
        $name = trim($_POST["name"]);
        $roll = trim($_POST["roll"]);
        $registration = trim($_POST["registration"]);
        $department = trim($_POST["department"]);
        $semister = trim($_POST["semister"]);
        $shift = trim($_POST["shift"]);
        $year = trim($_POST["year"]);


    try{
            
            if(empty($name)){
                 throw new Exception ("Please Update Student Name.");
            }
             
            if(empty($roll)){
                 throw new Exception ("Please Update Student Roll.");
            }
             
            if(empty($registration)){
                 throw new Exception ("Please Update Student Registration.");
            }
             
            if(empty($department)){
                 throw new Exception ("Please Update Student Department.");
            }
             
            if(empty($semister)){
                 throw new Exception ("Please Update Student Semister.");
            }
             
            if(empty($shift)){
                 throw new Exception ("Please Update Student Shift.");
            }
             
            if(empty($year)){
                 throw new Exception ("Please Update Student Year.");
            }
                     
                     $update = "UPDATE students SET std_name='$name', roll='$roll', registration='$registration', department='$department', semister='$semister', shift='$shift', year='$year' WHERE id='$id'";

                     $run = $connect->query($update);

                     if($run){
                         $scs_msg = "Information Update Successfully.";
                     }else{
                         $err_msg = "Something Error" .$connect->error;
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
            
               $single = "SELECT * FROM students WHERE id='$id'";
                $go = $connect->query($single);
            
            if($go->num_rows > 0){
                $row = $go->fetch_assoc();
                ?>  
        <form action="" method="post">
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
               
                <h2>Name:  <input type="text" value="<?php echo $row['std_name']; ?>" name="name"></h2>
                <h2>Roll:  <input type="text" value="<?php echo $row['roll']; ?>" name="roll"></h2>
                <h2>Registration:  <input type="text" value="<?php echo $row['registration']; ?>" name="registration"></h2>
                <h2>Department:  <input type="text" value="<?php echo $row['department']; ?>" name="department"></h2>
                <h2>Semister:  <input type="text" value="<?php echo $row['semister']; ?>" name="semister"></h2>
                <h2>Shift:  <input type="text" value="<?php echo $row['shift']; ?>" name="shift"></h2>
                <h2>Session:  <input type="text" value="<?php echo $row['year']; ?>" name="year"></h2>
                
                <input type="submit" value="Update" class="btn btn-success" name="update">
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
