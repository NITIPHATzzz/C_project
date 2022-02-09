<?php 

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "project_c";

    // Create Connection
     $conn = mysqli_connect($servername, $username, $password, $dbname);
    //change
<<<<<<< HEAD
    $conn = mysqli_connect("localhost", "root", "54321", "project_c");
=======
    //$conn = mysqli_connect($servername, $username, "54321", $dbname);
>>>>>>> terk

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 
?>