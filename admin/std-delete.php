<?php 


    session_start();
    if(!isset($_SESSION["username"])){
        header("location:login.php");
    }


    include("dbconnect.php");

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        echo header("location:index.php");
    }

    $delete = "DELETE FROM students WHERE id='$id'";
    $run = $connect->query($delete);

    if($run){
        header("location:std-view.php");
    }
    


?>