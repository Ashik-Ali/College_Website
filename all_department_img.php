<?php include("dbconnect.php"); ?>
   

<?php include("header.php"); ?>
    <div class="image-area" style="background:#d1d0d0;">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-12">
                    <div class="cmt-heading" style="background-image: url(images/tech.jpg);width: 400px;margin: 10px 363px;padding: 5px;text-align: center;color: #ffffff;border-radius: 20px;height: 85px;">
                        <h1>Civil Technology</h1>
                    </div><br>
                        <?php
                        
                            $select = "SELECT photo FROM all_img WHERE department='civil'";

                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                        <img src="admin/uploads/<?php echo $row['photo']; ?>" alt="" style="height:320px;width:336px;margin:20px 20px;border-radius:10px">
                                    <?php
                                }
                            }
                        
                        ?>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="image-area" style="background:#d1d0d0;">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-12">
                    <div class="cmt-heading" style="background-image: url(images/tech.jpg);width: 400px;margin: 10px 363px;padding: 5px;text-align: center;color: #ffffff;border-radius: 20px;height: 85px;">
                        <h1>Electrical Technology</h1>
                    </div><br>
                        <?php
                        
                            $select = "SELECT photo FROM all_img WHERE department='electrical'";

                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                        <img src="admin/uploads/<?php echo $row['photo']; ?>" alt="" style="height:320px;width:336px;margin:20px 20px;border-radius:10px">
                                    <?php
                                }
                            }
                        
                        ?>
                </div>
            </div>
        </div>
    </div>
   <hr>
    <div class="image-area" style="background:#d1d0d0;">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-12">
                    <div class="cmt-heading" style="background-image: url(images/tech.jpg);width: 400px;margin: 10px 363px;padding: 5px;text-align: center;color: #ffffff;border-radius: 20px;height: 85px;">
                        <h1>Computer Technology</h1>
                    </div><br>
                        <?php
                        
                            $select = "SELECT photo FROM all_img WHERE department='computer'";

                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                        <img src="admin/uploads/<?php echo $row['photo']; ?>" alt="" style="height:320px;width:336px;margin:20px 20px;border-radius:10px">
                                    <?php
                                }
                            }
                        
                        ?>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="image-area" style="background:#d1d0d0;">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-12">
                    <div class="cmt-heading" style="background-image: url(images/tech.jpg);width: 400px;margin: 10px 363px;padding: 5px;text-align: center;color: #ffffff;border-radius: 20px;height: 85px;">
                        <h1>Electronics Technology</h1>
                    </div><br>
                        <?php
                        
                            $select = "SELECT photo FROM all_img WHERE department='electronics'";

                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                        <img src="admin/uploads/<?php echo $row['photo']; ?>" alt="" style="height:320px;width:336px;margin:20px 20px;border-radius:10px">
                                    <?php
                                }
                            }
                        
                        ?>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="image-area" style="background:#d1d0d0;">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-12">
                    <div class="cmt-heading" style="background-image: url(images/tech.jpg);width: 450px;margin: 10px 363px;padding: 5px;text-align: center;color: #ffffff;border-radius: 20px;height: 85px;">
                        <h1>Environmental Technology</h1>
                    </div><br>
                        <?php
                        
                            $select = "SELECT photo FROM all_img WHERE department='environmental'";

                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                        <img src="admin/uploads/<?php echo $row['photo']; ?>" alt="" style="height:320px;width:336px;margin:20px 20px;border-radius:10px">
                                    <?php
                                }
                            }
                        
                        ?>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="image-area" style="background:#d1d0d0;">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-12">
                    <div class="cmt-heading" style="background-image: url(images/tech.jpg);width: 400px;margin: 10px 363px;padding: 5px;text-align: center;color: #ffffff;border-radius: 20px;height: 85px;">
                        <h1>Non-Tech Technology</h1>
                    </div><br>
                        <?php
                        
                            $select = "SELECT photo FROM all_img WHERE department='non-tech'";

                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                        <img src="admin/uploads/<?php echo $row['photo']; ?>" alt="" style="height:320px;width:336px;margin:20px 20px;border-radius:10px">
                                    <?php
                                }
                            }
                        
                        ?>
                </div>
            </div>
        </div>
    </div>
<?php include("footer.php"); ?>