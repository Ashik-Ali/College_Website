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
                        <h1 style="text-align:center;border-bottom: 1px solid #67826c;padding: 26px 0px;margin-top: -30px;text-weight:bold;">Slider View</h1>
                    </div>
                    <table class="table table-bordered">
                        <tr class="success">
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        
                            
                            <?php
                                
                                $select = "SELECT * FROM slider";
                                $run = $connect->query($select);
                                if($run->num_rows > 0){
                                    while($row = $run->fetch_assoc()){
                                        ?>
                                        <tr class="info">
                                            <td><?php echo $row["id"]; ?></td>
                                            <td><img src="uploads/<?php echo $row["photo"]; ?>" alt="" style="width:200px;height:100px"></td>
                                            <td><?php echo $row["date"]; ?></td>
                                            <td><a href="slider_delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn btn-sm">Delete</a></td>
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