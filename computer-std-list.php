<?php include("dbconnect.php") ?>
<?php include("header.php") ?>

    <div class="wrapper" style="background:#a3a2a2;">
       
       
        <div class="container">
            <div class="row"><br>
                <div class="col-md-10 col-md-offset-1" style="background:#ffffff;border-radius:25px;">
                    <h1 style="background: #68b16e;padding: 10px;font-weight: bold;color: #ffffff;text-align: center;margin: 40px 20px;border-radius: 20px;">Computer 2nd Semister(1st Shift)</h1>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Semister</th>
                            <th>Shift</th>
                            <th>Year</th>
                        </tr>
                        <?php
    
                            $a = 1;
                        
                            $select = "SELECT * FROM students WHERE department='computer' && semister='2nd' && shift='1st'";
                        
                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $row["std_name"] ?></td>
                                            <td><?php echo $row["roll"] ?></td>
                                            <td><?php echo $row["registration"] ?></td>
                                            <td><?php echo $row["department"] ?></td>
                                            <td><?php echo $row["semister"] ?></td>
                                            <td><?php echo $row["shift"] ?></td>
                                            <td><?php echo $row["year"] ?></td>
                                        </tr>
                                    
                                    <?php
                                        $a++;
                                }
                            }
                        
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <hr>
       
        <div class="container">
            <div class="row"><br>
                <div class="col-md-10 col-md-offset-1" style="background:#ffffff;border-radius:25px;">
                    <h1 style="background: #68b16e;padding: 10px;font-weight: bold;color: #ffffff;text-align: center;margin: 40px 20px;border-radius: 20px;">Computer 2nd Semister(2nd Shift)</h1>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Semister</th>
                            <th>Shift</th>
                            <th>Year</th>
                        </tr>
                        <?php
                        
                            $a = 1;
                        
                            $select = "SELECT * FROM students WHERE department='computer' && semister='2nd' && shift='2nd'";
                        
                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $row["std_name"] ?></td>
                                            <td><?php echo $row["roll"] ?></td>
                                            <td><?php echo $row["registration"] ?></td>
                                            <td><?php echo $row["department"] ?></td>
                                            <td><?php echo $row["semister"] ?></td>
                                            <td><?php echo $row["shift"] ?></td>
                                            <td><?php echo $row["year"] ?></td>
                                        </tr>
                                    
                                    <?php
                                        $a++;
                                }
                            }
                        
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <hr>
       
        <div class="container">
            <div class="row"><br>
                <div class="col-md-10 col-md-offset-1" style="background:#ffffff;border-radius:25px;">
                    <h1 style="background: #68b16e;padding: 10px;font-weight: bold;color: #ffffff;text-align: center;margin: 40px 20px;border-radius: 20px;">Computer 4th Semister(1st Shift)</h1>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Semister</th>
                            <th>Shift</th>
                            <th>Year</th>
                        </tr>
                        <?php
                        
                            $a = 1;
                        
                            $select = "SELECT * FROM students WHERE department='computer' && semister='4th' && shift='1st'";
                        
                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $row["std_name"] ?></td>
                                            <td><?php echo $row["roll"] ?></td>
                                            <td><?php echo $row["registration"] ?></td>
                                            <td><?php echo $row["department"] ?></td>
                                            <td><?php echo $row["semister"] ?></td>
                                            <td><?php echo $row["shift"] ?></td>
                                            <td><?php echo $row["year"] ?></td>
                                        </tr>
                                    
                                    <?php
                                        $a++;
                                }
                            }
                        
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <hr>
       
        <div class="container">
            <div class="row"><br>
                <div class="col-md-10 col-md-offset-1" style="background:#ffffff;border-radius:25px;">
                    <h1 style="background: #68b16e;padding: 10px;font-weight: bold;color: #ffffff;text-align: center;margin: 40px 20px;border-radius: 20px;">Computer 4th Semister(2nd Shift)</h1>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Semister</th>
                            <th>Shift</th>
                            <th>Year</th>
                        </tr>
                        <?php
                        
                            $a = 1;
                        
                            $select = "SELECT * FROM students WHERE department='computer' && semister='4th' && shift='2nd'";
                        
                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $row["std_name"] ?></td>
                                            <td><?php echo $row["roll"] ?></td>
                                            <td><?php echo $row["registration"] ?></td>
                                            <td><?php echo $row["department"] ?></td>
                                            <td><?php echo $row["semister"] ?></td>
                                            <td><?php echo $row["shift"] ?></td>
                                            <td><?php echo $row["year"] ?></td>
                                        </tr>
                                    
                                    <?php
                                        $a++;
                                }
                            }
                        
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <hr>
       
        <div class="container">
            <div class="row"><br>
                <div class="col-md-10 col-md-offset-1" style="background:#ffffff;border-radius:25px;">
                    <h1 style="background: #68b16e;padding: 10px;font-weight: bold;color: #ffffff;text-align: center;margin: 40px 20px;border-radius: 20px;">Computer 6th Semister(1st Shift)</h1>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Semister</th>
                            <th>Shift</th>
                            <th>Year</th>
                        </tr>
                        <?php
                        
                            $a = 1;
                        
                            $select = "SELECT * FROM students WHERE department='computer' && semister='6th' && shift='1st'";
                        
                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $row["std_name"] ?></td>
                                            <td><?php echo $row["roll"] ?></td>
                                            <td><?php echo $row["registration"] ?></td>
                                            <td><?php echo $row["department"] ?></td>
                                            <td><?php echo $row["semister"] ?></td>
                                            <td><?php echo $row["shift"] ?></td>
                                            <td><?php echo $row["year"] ?></td>
                                        </tr>
                                    
                                    <?php
                                        $a++;
                                }
                            }
                        
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <hr>
       
        <div class="container">
            <div class="row"><br>
                <div class="col-md-10 col-md-offset-1" style="background:#ffffff;border-radius:25px;">
                    <h1 style="background: #68b16e;padding: 10px;font-weight: bold;color: #ffffff;text-align: center;margin: 40px 20px;border-radius: 20px;">Computer 6th Semister(2nd Shift)</h1>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Semister</th>
                            <th>Shift</th>
                            <th>Year</th>
                        </tr>
                        <?php
                        
                            $a = 1;
                        
                            $select = "SELECT * FROM students WHERE department='computer' && semister='6th' && shift='2nd'";
                        
                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $row["std_name"] ?></td>
                                            <td><?php echo $row["roll"] ?></td>
                                            <td><?php echo $row["registration"] ?></td>
                                            <td><?php echo $row["department"] ?></td>
                                            <td><?php echo $row["semister"] ?></td>
                                            <td><?php echo $row["shift"] ?></td>
                                            <td><?php echo $row["year"] ?></td>
                                        </tr>
                                    
                                    <?php
                                        $a++;
                                }
                            }
                        
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <hr>
       
        <div class="container">
            <div class="row"><br>
                <div class="col-md-10 col-md-offset-1" style="background:#ffffff;border-radius:25px;">
                    <h1 style="background: #68b16e;padding: 10px;font-weight: bold;color: #ffffff;text-align: center;margin: 40px 20px;border-radius: 20px;">Computer 8th Semister(1st Shift)</h1>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Semister</th>
                            <th>Shift</th>
                            <th>Year</th>
                        </tr>
                        <?php
                        
                            $a = 1;
                        
                            $select = "SELECT * FROM students WHERE department='computer' && semister='8th' && shift='1st'";
                        
                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $row["std_name"] ?></td>
                                            <td><?php echo $row["roll"] ?></td>
                                            <td><?php echo $row["registration"] ?></td>
                                            <td><?php echo $row["department"] ?></td>
                                            <td><?php echo $row["semister"] ?></td>
                                            <td><?php echo $row["shift"] ?></td>
                                            <td><?php echo $row["year"] ?></td>
                                        </tr>
                                    
                                    <?php
                                        $a++;
                                }
                            }
                        
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <hr>
       
        <div class="container">
            <div class="row"><br>
                <div class="col-md-10 col-md-offset-1" style="background:#ffffff;border-radius:25px;">
                    <h1 style="background: #68b16e;padding: 10px;font-weight: bold;color: #ffffff;text-align: center;margin: 40px 20px;border-radius: 20px;">Computer 8th Semister(2nd Shift)</h1>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Semister</th>
                            <th>Shift</th>
                            <th>Year</th>
                        </tr>
                        <?php
                        
                            $a = 1;
                        
                            $select = "SELECT * FROM students WHERE department='computer' && semister='8th' && shift='2nd'";
                        
                            $run = $connect->query($select);
                        
                            if($run->num_rows > 0){
                                while($row = $run->fetch_assoc()){
                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $a;?></td>
                                            <td><?php echo $row["std_name"] ?></td>
                                            <td><?php echo $row["roll"] ?></td>
                                            <td><?php echo $row["registration"] ?></td>
                                            <td><?php echo $row["department"] ?></td>
                                            <td><?php echo $row["semister"] ?></td>
                                            <td><?php echo $row["shift"] ?></td>
                                            <td><?php echo $row["year"] ?></td>
                                        </tr>
                                    
                                    <?php
                                        $a++;
                                }
                            }
                        
                        ?>
                    </table>
                </div>
            </div><br>
        </div>
        
        
    </div>

<?php include("footer.php") ?>