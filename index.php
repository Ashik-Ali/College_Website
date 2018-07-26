<?php

    include("dbconnect.php");

?>



<?php include("header.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
      <link rel="stylesheet" href="css/bjqs.css">
      <script type="text/javascript" src="js/jquery.min.js"></script>
	  <script type="text/javascript" src="js/bjqs-1.3.min.js"></script>
    
       <script type="text/javascript">
        jQuery(document).ready(function($) {
		   
          $('.my-slider').bjqs({
            height      : 450,
            width       : 1200,
			animspeed :2000,
            responsive  : true
          });

        });
	  </script>


</head>
<body>
    <div class="wrapper" style="background:#d8d7d7;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="background:#ffffff;padding: 15px 15px;">
                        <div class="slider">
                            <div class="my-slider">
                                <ul class="bjqs">
                                   
                                   <?php 
                                    
                                        $select = "SELECT * FROM slider";

                                        $go = $connect->query($select);

                                        if($go->num_rows > 0){
                                            while($photo = $go->fetch_assoc()){
                                                ?>
                                                
                                                <li><img src="admin/uploads/<?php echo $photo['photo']; ?>" alt=""></li>
                                                
                                                
                                                <?php
                                            }
                                        }
                                        
                                    
                                    ?>
                                   
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
          <div class="container">
              <div class="row">
                  <div class="col-md-8" style="background:#ffffff;padding:10px 15px;height: 1400px;">
                      <h1 style="text-align: center;margin: 25px 0px;">Welcome to <p style="color: #0b0735;font-size: 45px;font-weight: bold;">Jhenaidah Polytechnic Institute</p></h1>
                      <img src="images/campus.jpg" alt="" style="height:350px;width:750px;">
                      <?php
                      
                        $select = "SELECT * FROM mission WHERE status='3'";
                        $run = $connect->query($select);
                        if($rows = $run->fetch_assoc()){
                            ?>
                            
                                <h4 style="font-size:22px;line-height: 43px;font-family: -webkit-body;padding: 10px 15px;"><b style="font-size:24px;border-bottom:2px dotted #0a0909;">Jhenaidah Polytechnic: </b><?php echo $rows["description"]; ?></h4>
                            
                            <?php
                        }
                      
                      ?>
                  </div>
                  <div class="col-md-4" style="background:#ffffff;padding:10px 20px;float: right;width: 350px;height: 1400px;">
                      <h1 style="text-align: center;font-size: 50px;font-weight: bold;background: #3db551;color: #ffffff;margin: 40px 60px;padding: 5px;">Notice</h1>
                      <?php
                      
                        $select = "SELECT * FROM notice ORDER BY id DESC LIMIT 3";
                        $run = $connect->query($select);
                        if($run->num_rows > 0){
                            while($rows = $run->fetch_assoc()){
                                ?>
                                
                                    <ul>
                                        <li style="margin: 15px 20px;"><?php echo $rows["description"]; ?></li>
                                    </ul>
                                    <p style="border-bottom:1px solid #a3a1a1;"></p>
                                <?php 
                            }
                        }
                        
                      
                      ?>
                        <a href="notice_view.php" style="float:right;font-size: 20px;text-decoration: none;font-weight: bold;color:#141417;">See All Notice</a>
                        <br><br>
                        <?php
                      
                            $select = "SELECT * FROM principal WHERE designation='PRINCIPAL'";
                            $run = $connect->query($select);
                            if($rows = $run->fetch_assoc()){
                                    ?>
                                        <p style="text-align:center;font-size: 25px;background: #257d28;color: #ffffff;font-weight: bold;padding: 6px;margin: 20px 15px;"><?php echo $rows["name"]; ?></p>
                                        <img src="admin/uploads/<?php echo $rows["photo"]; ?>" style="height:250px;width:250px;    margin:5px 30px;border:2px solid #1c2134;">
                                        <p style="text-align:center;font-size: 35px;background: #10791d;color: #ffffff;font-weight: bold;"><?php echo $rows["designation"]; ?></p>
                                        
                                    <?php
                            }
                      
                        ?>
                        <br><hr><br>
                        <?php
                      
                            $select = "SELECT * FROM principal WHERE designation='VICE PRINCIPAL'";
                            $run = $connect->query($select);
                            if($rows = $run->fetch_assoc()){
                                    ?>
                                        <p style="text-align:center;font-size: 25px;background: #257d28;color: #ffffff;font-weight: bold;padding: 6px;margin: 20px 15px;"><?php echo $rows["name"]; ?></p>
                                        <img src="admin/uploads/<?php echo $rows["photo"]; ?>" style="height:250px;width:250px;    margin:5px 30px;border:2px solid #1c2134;">
                                        <p style="text-align:center;font-size: 35px;background: #10791d;color: #ffffff;font-weight: bold;"><?php echo $rows["designation"]; ?></p>
                                        
                                    <?php
                            }
                      
                        ?>
                        
                        
                  </div>
              </div>
          </div><br>
        
    </div>
</body>
</html>
<?php include("footer.php") ?>