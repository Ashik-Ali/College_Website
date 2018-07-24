<?php include("dbconnect.php"); ?>
    

<?php include("header.php"); ?>

    <div class="wrapper" style="background:#c9c8c8;">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:20px;">
                    <?php
                    
                        $select = "SELECT * FROM principal";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            $row = $run->fetch_assoc();
                            ?>
                            
                                <h2 style="text-align: center;font-size: 50px;color: #0a082f;font-weight: bold;border-bottom: 10px dotted #050831;margin: 20px 100px;"><?php echo $row["name"]; ?></h2>
                                <img src="admin/uploads/<?php echo $row["photo"]; ?>" alt="" style="width: 400px;height: 400px;margin: 14px 170px;border: 2px solid blue;border-radius: 20px;">
                                <h2 style="background: #565353;padding: 15px;width: 550px;color: #00fff3;font-weight: bold;text-align: center;border-radius: 20px;margin: 20px 98px;font-size: 70px;"><?php echo $row["designation"]; ?></h2>
                                <h2 style="background: #236d26;padding: 25px;width: 650px;margin: 40px 45px;text-align: center;color: #ffffff;font-weight: bold;border-radius: 25px;"><?php echo $row["college"]; ?></h2>
                                <h2 style="background: black;color: #ffffff;padding: 15px;width: 250px;font-weight: bold;text-align: center;border-radius: 20px;margin: 50px 240px;">Join: <?php echo $row["join_year"]; ?></h2>
                            
                            <?php
                        }
                    
                    ?>
                </div>
            </div><br>
        </div>
</div>

<?php include("footer.php"); ?>