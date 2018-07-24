<?php include("dbconnect.php"); ?>
    

<?php include("header.php"); ?>

    <div class="wrapper" style="background:#c9c8c8;">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:20px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='1' && department='computer'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            $row = $run->fetch_assoc();
                            ?>
                            
                                <h2 style="text-align: center;font-size: 50px;color: #0a082f;font-weight: bold;border-bottom: 10px dotted #050831;margin: 20px 100px;"><?php echo $row["thr_name"]; ?></h2>
                                <img src="admin/uploads/<?php echo $row["photo"]; ?>" alt="" style="width: 400px;height: 400px;border: 2px solid #204879;border-radius: 20px;margin: 20px 170px;">
                                <h2 style="background: #757474;color: #00f3ff;font-weight: bold;padding: 20px;width: 650px;text-align: center;font-size: 42px;border-radius: 20px;margin: 35px 50px;"><?php echo $row["designation"]; ?></h2>
                                <h2 style="font-size: 45px;font-weight: bold;color: #ffffff;background: black;padding: 15px;width: 400px;text-align: center;margin: 55px 175px;border-radius: 20px;">Join: <?php echo $row["join_year"]; ?></h2>
                            
                            <?php
                        }
                    
                    ?>
                </div>
            </div><br>
        </div>
    </div>

<?php include("footer.php"); ?>