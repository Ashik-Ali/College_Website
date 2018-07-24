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
          
        
    </div>
</body>
</html>
<?php include("footer.php") ?>