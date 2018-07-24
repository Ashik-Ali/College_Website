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
                        <h1 style="text-align:center;border-bottom: 1px solid #67826c;padding: 26px 0px;margin-top: -30px;text-weight:bold;">Student Result</h1>
                    </div>
                    <table class="table table-bordered">
                        <tr class="success">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Semister</th>
                            <th>Shift</th>
                            <th>Grade</th>
                            <th>Date</th>
                        </tr>
                        
                            
                            <?php
                                
                                $select = "SELECT * FROM result";
                                $run = $connect->query($select);
                                if($run->num_rows > 0){
                                    while($row = $run->fetch_assoc()){
                                        ?>
                                        <tr class="info">
                                            <td><?php echo $row["id"]; ?></td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["roll"]; ?></td>
                                            <td><?php echo $row["registration"]; ?></td>
                                            <td><?php echo $row["department"]; ?></td>
                                            <td><?php echo $row["semister"]; ?></td>
                                            <td><?php echo $row["shift"]; ?></td>
                                            <td><?php echo $row["grade"]; ?></td>
                                            <td><?php echo $row["date"]; ?></td>
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