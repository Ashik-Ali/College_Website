<?php include("dbconnect.php"); ?>
<?php include("header.php"); ?>

<div class="wrapper" style="background:#c9c8c8;">
       
       
        <div class="container">
            <div class="row"><br>
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:25px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='4' && department='civil'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            while($row = $run->fetch_assoc()){
                                ?>
                                
                                    <h1 style="font-size: 45px;text-align: center;font-weight: bold;color: #07093a;border-bottom: 10px dotted #070c31;margin: 25px 142px;"><?php echo $row["thr_name"] ?></h1>
                                    <img src="admin/uploads/<?php echo $row["photo"] ?>" alt="" style="width: 400px;height: 400px;border: 3px solid #3300ff;border-radius: 20px;margin: 20px 170px;">
                                    <h1 style="background: #585454;padding: 15px;font-size: 50px;color: cyan;width: 510px;border-radius: 20px;text-align: center;font-weight: bold;margin: 30px 110px;"><?php echo $row["designation"] ?></h1>
                                    <h1 style="font-weight: bold;background: #237122;width: 500px;padding: 15px;text-align: center;color: white;border-radius: 20px;margin: 50px 115px;">Department: <?php echo $row["department"] ?></h1>
                                    <h1 style="background: black;color: white;width: 400px;padding: 15px;font-weight: bold;border-radius: 20px;margin: 50px 162px;text-align: center;">Join: <?php echo $row["join_year"] ?></h1>
                                    <p style="border-bottom:5px dotted #adaaaa;"></p>
                                
                                <?php
                            }
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        <hr>
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:25px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='4' && department='electrical'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            while($row = $run->fetch_assoc()){
                                ?>
                                
                                    <h1 style="font-size: 45px;text-align: center;font-weight: bold;color: #07093a;border-bottom: 10px dotted #070c31;margin: 25px 142px;"><?php echo $row["thr_name"] ?></h1>
                                    <img src="admin/uploads/<?php echo $row["photo"] ?>" alt="" style="width: 400px;height: 400px;border: 3px solid #3300ff;border-radius: 20px;margin: 20px 170px;">
                                    <h1 style="background: #585454;padding: 15px;font-size: 50px;color: cyan;width: 510px;border-radius: 20px;text-align: center;font-weight: bold;margin: 30px 110px;"><?php echo $row["designation"] ?></h1>
                                    <h1 style="font-weight: bold;background: #237122;width: 500px;padding: 15px;text-align: center;color: white;border-radius: 20px;margin: 50px 115px;">Department: <?php echo $row["department"] ?></h1>
                                    <h1 style="background: black;color: white;width: 400px;padding: 15px;font-weight: bold;border-radius: 20px;margin: 50px 162px;text-align: center;">Join: <?php echo $row["join_year"] ?></h1>
                                    <p style="border-bottom:5px dotted #adaaaa;"></p>
                                
                                <?php
                            }
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        <hr>
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:25px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='4' && department='computer'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            while($row = $run->fetch_assoc()){
                                ?>
                                
                                    <h1 style="font-size: 45px;text-align: center;font-weight: bold;color: #07093a;border-bottom: 10px dotted #070c31;margin: 25px 90px;"><?php echo $row["thr_name"] ?></h1>
                                    <img src="admin/uploads/<?php echo $row["photo"] ?>" alt="" style="width: 400px;height: 400px;border: 3px solid #3300ff;border-radius: 20px;margin: 20px 170px;">
                                    <h1 style="background: #585454;padding: 15px;font-size: 50px;color: cyan;width: 510px;border-radius: 20px;text-align: center;font-weight: bold;margin: 30px 110px;"><?php echo $row["designation"] ?></h1>
                                    <h1 style="font-weight: bold;background: #237122;width: 500px;padding: 15px;text-align: center;color: white;border-radius: 20px;margin: 50px 115px;">Department: <?php echo $row["department"] ?></h1>
                                    <h1 style="background: black;color: white;width: 400px;padding: 15px;font-weight: bold;border-radius: 20px;margin: 50px 162px;text-align: center;">Join: <?php echo $row["join_year"] ?></h1>
                                    <p style="border-bottom:5px dotted #adaaaa;"></p>
                                
                                <?php
                            }
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        <hr>
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:25px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='4' && department='electronics'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            while($row = $run->fetch_assoc()){
                                ?>
                                
                                    <h1 style="font-size: 45px;text-align: center;font-weight: bold;color: #07093a;border-bottom: 10px dotted #070c31;margin: 25px 142px;"><?php echo $row["thr_name"] ?></h1>
                                    <img src="admin/uploads/<?php echo $row["photo"] ?>" alt="" style="width: 400px;height: 400px;border: 3px solid #3300ff;border-radius: 20px;margin: 20px 170px;">
                                    <h1 style="background: #585454;padding: 15px;font-size: 50px;color: cyan;width: 510px;border-radius: 20px;text-align: center;font-weight: bold;margin: 30px 110px;"><?php echo $row["designation"] ?></h1>
                                    <h1 style="font-weight: bold;background: #237122;width: 500px;padding: 15px;text-align: center;color: white;border-radius: 20px;margin: 50px 115px;">Department: <?php echo $row["department"] ?></h1>
                                    <h1 style="background: black;color: white;width: 400px;padding: 15px;font-weight: bold;border-radius: 20px;margin: 50px 162px;text-align: center;">Join: <?php echo $row["join_year"] ?></h1>
                                    <p style="border-bottom:5px dotted #adaaaa;"></p>
                                
                                <?php
                            }
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        <hr>
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:25px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='4' && department='environmental'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            while($row = $run->fetch_assoc()){
                                ?>
                                
                                    <h1 style="font-size: 45px;text-align: center;font-weight: bold;color: #07093a;border-bottom: 10px dotted #070c31;margin: 25px 142px;"><?php echo $row["thr_name"] ?></h1>
                                    <img src="admin/uploads/<?php echo $row["photo"] ?>" alt="" style="width: 400px;height: 400px;border: 3px solid #3300ff;border-radius: 20px;margin: 20px 170px;">
                                    <h1 style="background: #585454;padding: 15px;font-size: 50px;color: cyan;width: 525px;border-radius: 20px;text-align: center;font-weight: bold;margin: 30px 100px;"><?php echo $row["designation"] ?></h1>
                                    <h1 style="font-weight: bold;background: #237122;width: 525px;padding: 15px;text-align: center;color: white;border-radius: 20px;margin: 50px 100px;">Department: <?php echo $row["department"] ?></h1>
                                    <h1 style="background: black;color: white;width: 400px;padding: 15px;font-weight: bold;border-radius: 20px;margin: 50px 162px;text-align: center;">Join: <?php echo $row["join_year"] ?></h1>
                                    <p style="border-bottom:5px dotted #adaaaa;"></p>
                                
                                <?php
                            }
                        }
                    
                    ?>
                </div>
            </div>
        </div>
        <hr>
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:25px;">
                    <?php
                    
                        $select = "SELECT * FROM teachers WHERE status='4' && department='Non-tech'";
                    
                        $run = $connect->query($select);
                    
                        if($run->num_rows > 0){
                            while($row = $run->fetch_assoc()){
                                ?>
                                
                                    <h1 style="font-size: 45px;text-align: center;font-weight: bold;color: #07093a;border-bottom: 10px dotted #070c31;margin: 25px 142px;"><?php echo $row["thr_name"] ?></h1>
                                    <img src="admin/uploads/<?php echo $row["photo"] ?>" alt="" style="width: 400px;height: 400px;border: 3px solid #3300ff;border-radius: 20px;margin: 20px 170px;">
                                    <h1 style="background: #585454;padding: 15px;font-size: 50px;color: cyan;width: 510px;border-radius: 20px;text-align: center;font-weight: bold;margin: 30px 110px;"><?php echo $row["designation"] ?></h1>
                                    <h1 style="font-weight: bold;background: #237122;width: 500px;padding: 15px;text-align: center;color: white;border-radius: 20px;margin: 50px 115px;">Department: <?php echo $row["department"] ?></h1>
                                    <h1 style="background: black;color: white;width: 400px;padding: 15px;font-weight: bold;border-radius: 20px;margin: 50px 162px;text-align: center;">Join: <?php echo $row["join_year"] ?></h1>
                                    <p style="border-bottom:5px dotted #adaaaa;"></p>
                                
                                <?php
                            }
                        }
                    
                    ?>
                </div>
            </div><br>
        </div>
        
        
</div>

<?php include("footer.php"); ?>