<?php include("dbconnect.php"); ?>
<?php include("header.php"); ?>
   
    <div class="wrapper" style="background:#d6cece;">
        <section class="container">
        <div class="row"><br>
            <div class="col-md-12" style="background:#fff;padding: 30px 40px;border-radius:30px;">
                    <div class="tab-head">
                        <h1 style="background: #259e39;padding: 15px;width: 200px;color: #ffffff;text-align: center;font-weight: bold;margin: 15px 445px;border-radius: 20px;">Notice</h1><br>
                    </div>
                    <table class="table table-bordered">
                        <tr class="info">
                            <th>Id</th>
                            <th>Title</th>
                            <th><p style="text-align:center;">Description</p></th>
                            <th>PDF File</th>
                            <th>Date</th>
                        </tr>
                        
                            
                            <?php
                        
                                $a = 1;
                                
                                $select = "SELECT * FROM notice ORDER BY id DESC";
                                $run = $connect->query($select);
                                if($run->num_rows > 0){
                                    while($row = $run->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $row["title"]; ?></td>
                                            <td><b><p style="text-align:center;"><?php echo $row["description"]; ?></p></b></td>
                                            <td><a target="_blank" href="admin/uploads/<?php echo $row["pdf_file"]; ?>">PDF View</a></td>
                                            <td><?php echo $row["date"]; ?></td>
                                        </tr>
                                        <?php
                                       $a++;
                                    }
                                }
                            
                            ?>
                           
                    </table>
                </div>
             </div><br>
        </section>
    </div>
<?php include("footer.php"); ?>