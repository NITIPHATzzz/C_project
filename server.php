<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_c";

    // Create Connection
     $conn = mysqli_connect($servername, $username, $password, $dbname);
    //change
    //$conn = mysqli_connect($servername, $username, "54321", $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 
?>