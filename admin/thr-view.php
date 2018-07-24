<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    include("dbconnect.php"); 

?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="background:#ffffff;">
                    <h1 style="text-align: center;border-bottom: 2px solid #9c9898;padding: 24px;font-weight: bold;">All Teacher's List</h1><br>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Home District</th>
                            <th>Join Year</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            
                            $view = "SELECT * FROM teachers";
                        
                            $run = $connect->query($view);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $row["id"] ?></td>
                                            <td><?php echo $row["thr_name"] ?></td>
                                            <td><?php echo $row["department"] ?></td>
                                            <td><?php echo $row["designation"] ?></td>
                                            <td><?php echo $row["home_district"] ?></td>
                                            <td><?php echo $row["join_year"] ?></td>
                                            <td><?php echo $row["status"] ?></td>
                                            <td><a href="thr-update.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn btn-sm">Edit</a> <a href="thr-delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn btn-sm">Delete</a></td>
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
