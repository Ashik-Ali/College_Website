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
                <div class="col-md-10 col-md-offset-1" style="background:#ffffff;">
                    <div class="mission_vision">
                        <h1 style="font-size:40px;font-weight: bold;text-align: center;border-bottom: 1px solid #868181;margin: 5px 190px;padding: 15px 0px;">Mission & Vision List</h1>
                    </div><br><br>
                    <table class="table table-bordered">
                        <tr class="success">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                        <?php
                        
                            $select = "SELECT * FROM mission";
                            $run = $connect->query($select);
                            if($run->num_rows > 0){
                                while($rows = $run->fetch_assoc()){
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $rows["id"]; ?></td>
                                        <td><?php echo $rows["name"]; ?></td>
                                        <td><?php echo $rows["description"]; ?></td>
                                        <td><?php echo $rows["status"]; ?></td>
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