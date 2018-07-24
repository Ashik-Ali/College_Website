<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }
?>



<?php include("dbconnect.php"); ?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="background:#ffffff;">
                    <h1 style="text-align: center;border-bottom: 2px solid #9c9898;padding: 24px;font-weight: bold;">All Students List</h1><br>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Semister</th>
                            <th>Shift</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            
                            $view = "SELECT * FROM students";
                        
                            $run = $connect->query($view);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $row["id"] ?></td>
                                            <td><?php echo $row["std_name"] ?></td>
                                            <td><?php echo $row["roll"] ?></td>
                                            <td><?php echo $row["registration"] ?></td>
                                            <td><?php echo $row["department"] ?></td>
                                            <td><?php echo $row["semister"] ?></td>
                                            <td><?php echo $row["shift"] ?></td>
                                            <td><?php echo $row["year"] ?></td>
                                            <td><a href="std-update.php?id=<?php echo $row["id"] ?>" class="btn btn-info btn btn-sm">Edit</a> <a href="std-delete.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn btn-sm">Delete</a></td>
                                        </tr>
                                    
                                    <?php
                                }
                            }
                        
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>
