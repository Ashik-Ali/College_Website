<?php include("dbconnect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>jenaidahpoly.govt.bd</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
</head>

<body>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <div class="logo1">
                        <img src="images/govtlogo.jpg" alt="" class="img-circle">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="heading">
                        <h1>ঝিনাইদহ পলিটেকনিক ইনস্টিটিউট</h1>
                        <h3>Jhenaidah Polytechnic Institute</h3>
                        <?php
                            $select = "SELECT * FROM title ORDER BY id DESC";
                            $run = $connect->query($select);
                            if($rows = $run->fetch_assoc()){
                                ?>
                                <marquee scrollamount="4px"><?php echo $rows["title"] ?></marquee>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="mainmenu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">About<span class="caret"></span></a>
                                <ul>
                                    <li><a href="clg-about.php">About Us</a></li>
                                    <li><a href="mission.php">Mission & Vission</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Academics<span class="caret"></span></a>
                                <ul>
                                    <li><a href="notice_view.php">Notice</a></li>
                                    <li><a href="#">Routine<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="">Class Routine</a></li>
                                            <li><a href="">Exam Routine</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Result<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="">Civil</a></li>
                                            <li><a href="">Electrical</a></li>
                                            <li><a href="">Computer</a></li>
                                            <li><a href="">Electronics</a></li>
                                            <li><a href="">Environmental</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Co-Curriculums<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="">Rover</a></li>
                                            <li><a href="">Blood Donetion</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Administration<span class="caret"></span></a>
                                <ul>
                                    <li><a href="#">Teacher's info<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="principal.php">Principal</a></li>
                                            <li><a href="civil-thr-view.php">Civil</a></li>
                                            <li><a href="electrical-thr-view.php">Electrical</a></li>
                                            <li><a href="computer-thr-view.php">Computer</a></li>
                                            <li><a href="electronics-thr-view.php">Electronics</a></li>
                                            <li><a href="environmental-thr-view.php">Environmental</a></li>
                                            <li><a href="nontech-thr-view.php">Non-Tech</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Staff's info<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="civil-staff.php">Civil</a></li>
                                            <li><a href="electrical-staff.php">Electrical</a></li>
                                            <li><a href="computer-staff.php">Computer</a></li>
                                            <li><a href="electronics-staff.php">Electronics</a></li>
                                            <li><a href="environmental-staff.php">Environmental</a></li>
                                            <li><a href="nontech-staff.php">Non-Tech</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Others info<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="">Academics Section</a></li>
                                            <li><a href="">Exam Control Section</a></li>
                                            <li><a href="">Library Section</a></li>
                                            <li><a href="">Account Section</a></li>
                                            <li><a href="">Medical Section</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Department<span class="caret"></span></a>
                                <ul>
                                    <li><a href="#">Civil<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="">Information</a></li>
                                            <li><a href="civil-std-list.php">Student's List</a></li>
                                            <li><a href="">Semister Plan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Electrical<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="">Information</a></li>
                                            <li><a href="electrical-std-list.php">Student's List</a></li>
                                            <li><a href="">Semister Plan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Computer<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="">Information</a></li>
                                            <li><a href="computer-std-list.php">Student's List</a></li>
                                            <li><a href="">Semister Plan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Electronics<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="">Information</a></li>
                                            <li><a href="electronics-std-list.php">Student's List</a></li>
                                            <li><a href="">Semister Plan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Environmental<span class="caret"></span></a>
                                        <ul>
                                            <li><a href="">Information</a></li>
                                            <li><a href="environmental-std-list.php">Student's List</a></li>
                                            <li><a href="">Semister Plan</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Gallery<span class="caret"></span></a>
                                <ul>
                                    <li><a href="all_department_img.php">Photos</a></li>
                                    <li><a href="">Videos</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>   
                </div>
                <div class="col-md-1">
                    <div class="logo2">
                        <img src="images/logo.jpg" alt="" class="img-circle">
                    </div>
                </div>
            </div>
        </div>     
    </div>
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
