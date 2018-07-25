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
            <div class="row"><br>
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;">
                    <div class="view_title">
                        <h1>Title List</h1>
                    </div><br>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th style="text-align:center;">Id</th>
                            <th style="text-align:center;">Title</th>
                        </tr>
                               
                                <?php
                                
                                    $select = "SELECT * FROM title";
                                
                                    $run = $connect->query($select);
                                
                                    if($run->num_rows > 0){
                                        while($rows = $run->fetch_assoc()){
                                            ?>
                                            
                                            <tr>
                                               <td><?php echo $rows["id"]; ?></td>
                                                <td><?php echo $rows["title"]; ?></td>
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