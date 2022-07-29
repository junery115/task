<?php 

    $host = "localhost";
    $db = "task_db";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($host, $username, $password, $db);
    
    if(!$conn) 
       die ("Could not connect");
    