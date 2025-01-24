<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "user_info";  
    $conn = new mysqli('sql311.infinityfree.com', 'if0_35451876', 'KXq8SxPBCYBB', 'if0_35451876_user_info');
    //$conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>