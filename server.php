<?php 

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "project_c";

    // Create Connection
    // $conn = mysqli_connect($servername, $username, $password, $dbname);
    //change
    $conn = mysqli_connect("localhost", "root", "54321", "project_c");

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 
?>