<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }
?>



<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
</head>
<body>
    <div class="content-wrapper"><br>
        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="text-align:center;margin:120px 0px;font-size:80px;color:#37c615;font-family: 'Bungee', cursive;">Welcome to<hr>Admin Panel</h1>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
<?php include('footer.php'); ?>    