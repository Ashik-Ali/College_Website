<?php include("header.php"); ?>

<div class="mission_page" style="background:#cecbcb;">
    <div class="container">
        <div class="row"><br><br>
            <div class="col-md-8 col-md-offset-2" style="background:#ffffff;    padding: 15px 30px;border-radius:50px;">
                <?php
    
                    include("dbconnect.php");

                    $select = "SELECT * FROM mission WHERE status='1'";

                    $run = $connect->query($select);

                    if($run->num_rows > 0){
                        while($rows = $run->fetch_assoc()){
                            ?>
                            
                            <h1 style="font-size: 45px;text-align: center;background: #3cc657;margin: 30px 260px;padding: 10px;color: #ffffff;font-weight: bold;"><?php echo $rows["name"]; ?></h1>
                            <p style="font-size: 25px;line-height: 45px;font-family: -webkit-body;"><?php echo $rows["description"]; ?></p>
                            
                            <?php
                        }
                    }

                ?>
            </div>
        </div><br>
    </div>
    <hr>
    <div class="container">
        <div class="row"><br>
            <div class="col-md-8 col-md-offset-2" style="background:#ffffff;    padding: 15px 30px;border-radius:50px;">
                <?php
    
                    include("dbconnect.php");

                    $select = "SELECT * FROM mission WHERE status='2'";

                    $run = $connect->query($select);

                    if($run->num_rows > 0){
                        while($rows = $run->fetch_assoc()){
                            ?>
                            
                            <h1 style="font-size: 45px;text-align: center;background: #3cc657;margin: 30px 260px;padding: 10px;color: #ffffff;font-weight: bold;"><?php echo $rows["name"]; ?></h1>
                            <p style="font-size: 25px;line-height: 45px;font-family: -webkit-body;"><?php echo $rows["description"]; ?></p>
                            
                            <?php
                        }
                    }

                ?>
            </div>
        </div><br><br>
    </div>
</div>
<?php include("footer.php"); ?>