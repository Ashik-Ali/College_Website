<?php 
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }

    include("dbconnect.php") 

?>


<?php include("header.php") ?>
<?php include("sidebar.php") ?>

    <div class="content-wrapper">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-8 col-md-offset-2" style="background:#ffffff;border-radius:20px;">
                    <h1 style="text-align:center;border-bottom: 2px solid #b5b5b5;padding: 20px 0px;">Students Feedback</h1>
            <?php
                    
                   $select = "SELECT * FROM contact ORDER BY id DESC";

                   $run = $connect->query($select);

                    if($run->num_rows > 0){
                        while($row = $run->fetch_assoc()){
                            
                            ?>
                                <hr>
                                <h4>Name:- <b><?php echo $row["name"] ?></b></h4>
                                <hr>
                                <h4>Email:- <b><?php echo $row["email"] ?></b></h4>
                                <hr>
                                <h4>Description:- </h4><h5><b><?php echo $row["description"] ?></b></h5>
                                <hr>
                                <h4>Feedback Date:- <b><?php echo $row["date"] ?></b></h4>
                                <br>
                                <p style="border-bottom:2px solid #44a333;"></p>
                            
                            <?php
                            
                        }
                        
                    }
                    
            ?>
                </div>
            </div>
        </div><br>
    </div>

<?php include("footer.php") ?>