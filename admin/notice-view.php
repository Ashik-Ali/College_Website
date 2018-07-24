<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }
?>



<?php include("dbconnect.php"); ?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
   
    <div class="content-wrapper"><br>
        <section class="container">
        <div class="row">
            <div class="col-md-12" style="background:#fff;padding: 15px 20px;">
                    <div class="tab-head">
                        <h1 style="text-align:center;border-bottom: 1px solid #67826c;padding: 26px 0px;margin-top: -30px;text-weight:bold;">Notice</h1>
                    </div>
                    <table class="table table-bordered">
                        <tr class="success">
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>PDF File</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        
                            
                            <?php
                                
                                $select = "SELECT * FROM notice";
                                $run = $connect->query($select);
                                if($run->num_rows > 0){
                                    while($row = $run->fetch_assoc()){
                                        ?>
                                        <tr class="info">
                                            <td><?php echo $row["id"]; ?></td>
                                            <td><?php echo $row["title"]; ?></td>
                                            <td><?php echo $row["description"]; ?></td>
                                            <td><a target="_blank" href="uploads/<?php echo $row["pdf_file"]; ?>">PDF View</a></td>
                                            <td><?php echo $row["date"]; ?></td>
                                            <td><a href="notice-delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn btn-sm">Delete</a></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            
                            ?>
                           
                    </table>
                </div>
             </div>
        </section>
    </div>
<?php include("footer.php"); ?>