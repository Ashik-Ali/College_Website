<?php include("dbconnect.php"); ?>
    

<?php include("header.php"); ?>

    <div class="wrapper" style="background:#c9c8c8;">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:20px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='1' && department='civil'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            $row = $run->fetch_assoc();
                            ?>
                            
                                <h2 style="font-weight: bold;margin: 20px 208px;color: #064088;border-bottom: 2px dotted #1101ff;font-size:40px;"><?php echo $row["thr_name"]; ?></h2>
                                <img src="admin/uploads/<?php echo $row["photo"]; ?>" alt="" style="width: 400px;height: 400px;margin: 10px 175px;border: 2px solid #1313bf;border-radius:20px;">
                                <h2 style="background: #9a9090;font-weight: bold;color: #00fff3;padding: 15px;text-align: center;border-radius:20px;font-size: 40px;margin: 15px 25px;"><?php echo $row["designation"]; ?></h2>
                            
                            <?php
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:20px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='1' && department='electrical'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            $row = $run->fetch_assoc();
                            ?>
                            
                                <h2 style="font-weight: bold;margin: 20px 256px;color: #064088;border-bottom: 2px dotted #1101ff;font-size:40px;"><?php echo $row["thr_name"]; ?></h2>
                                <img src="admin/uploads/<?php echo $row["photo"]; ?>" alt="" style="width: 400px;height: 400px;margin: 10px 175px;border: 2px solid #1313bf;border-radius:20px;">
                                <h2 style="background: #9a9090;font-weight: bold;color: #00fff3;padding: 15px;text-align: center;border-radius:20px;font-size: 40px;margin: 15px 25px;"><?php echo $row["designation"]; ?></h2>
                            
                            <?php
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:20px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='1' && department='computer'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            $row = $run->fetch_assoc();
                            ?>
                            
                                <h2 style="font-weight: bold;margin: 20px 167px;color: #064088;border-bottom: 2px dotted #1101ff;font-size:40px;"><?php echo $row["thr_name"]; ?></h2>
                                <img src="admin/uploads/<?php echo $row["photo"]; ?>" alt="" style="width: 400px;height: 400px;margin: 10px 175px;border: 2px solid #1313bf;border-radius:20px;">
                                <h2 style="background: #9a9090;font-weight: bold;color: #00fff3;padding: 15px;text-align: center;border-radius:20px;font-size: 40px;margin: 15px 25px;"><?php echo $row["designation"]; ?></h2>
                            
                            <?php
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:20px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='1' && department='electronics'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            $row = $run->fetch_assoc();
                            ?>
                            
                                <h2 style="font-weight: bold;margin: 20px 221px;color: #064088;border-bottom: 2px dotted #1101ff;font-size:40px;"><?php echo $row["thr_name"]; ?></h2>
                                <img src="admin/uploads/<?php echo $row["photo"]; ?>" alt="" style="width: 400px;height: 400px;margin: 10px 175px;border: 2px solid #1313bf;border-radius:20px;">
                                <h2 style="background: #9a9090;font-weight: bold;color: #00fff3;padding: 15px;text-align: center;border-radius:20px;font-size: 40px;margin: 15px 25px;"><?php echo $row["designation"]; ?></h2>
                            
                            <?php
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:20px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='1' && department='environmental'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            $row = $run->fetch_assoc();
                            ?>
                            
                                <h2 style="font-weight: bold;margin: 20px 201px;color: #064088;border-bottom: 2px dotted #1101ff;font-size:40px;"><?php echo $row["thr_name"]; ?></h2>
                                <img src="admin/uploads/<?php echo $row["photo"]; ?>" alt="" style="width: 400px;height: 400px;margin: 10px 175px;border: 2px solid #1313bf;border-radius:20px;">
                                <h2 style="background: #9a9090;font-weight: bold;color: #00fff3;padding: 15px;text-align: center;border-radius:20px;font-size: 40px;margin: 15px 25px;"><?php echo $row["designation"]; ?></h2>
                            
                            <?php
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:20px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='1' && department='Non-tech'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            $row = $run->fetch_assoc();
                            ?>
                            
                                <h2 style="font-weight: bold;margin: 20px 196px;color: #064088;border-bottom: 2px dotted #1101ff;font-size:40px;"><?php echo $row["thr_name"]; ?></h2>
                                <img src="admin/uploads/<?php echo $row["photo"]; ?>" alt="" style="width: 400px;height: 400px;margin: 10px 175px;border: 2px solid #1313bf;border-radius:20px;">
                                <h2 style="background: #9a9090;font-weight: bold;color: #00fff3;padding: 15px;text-align: center;border-radius:20px;font-size: 40px;margin: 15px 25px;"><?php echo $row["designation"]; ?></h2>
                            
                            <?php
                        }
                    
                    ?>
                </div>
            </div><br>
        </div>
    </div>

<?php include("footer.php"); ?>