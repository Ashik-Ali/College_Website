<?php  
    
    $servername = "localhost";
    $Username = "root";
    $Password = "";
    $dbname = "final_project";

    $connect = new mysqli($servername, $Username, $Password, $dbname);

    if($connect->error){
        echo "Something Problem";
    }

?>