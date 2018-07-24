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
                    <h1 style="text-align: center;border-bottom: 2px solid #9c9898;padding: 24px;font-weight: bold;">Principal Information List</h1><br>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>College</th>
                            <th>Join Year</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            
                            $view = "SELECT * FROM principal";
                        
                            $run = $connect->query($view);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $row["id"] ?></td>
                                            <td><?php echo $row["name"] ?></td>
                                            <td><?php echo $row["designation"] ?></td>
                                            <td><?php echo $row["college"] ?></td>
                                            <td><?php echo $row["join_year"] ?></td>
                                            <td><a href="principal-update.php?id=<?php echo $row["id"] ?>" class="btn btn-info btn btn-sm">Edit</a> <a href="principal-delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn btn-sm">Delete</a></td>
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
