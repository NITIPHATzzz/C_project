<?php 
    include "../../server.php";

    $requestMethod = $_SERVER["REQUEST_METHOD"];

    $data = file_get_contents("php://input");
    // echo $data;
    $result = json_decode($data, true);

    if ($requestMethod == 'POST'){
        $username = $result["username"];
        // echo $username;
        $sql_add = "SELECT *FROM users WHERE username = '$username'";
        $sql_addQ = mysqli_query($conn,$sql_add);
        
        $row=mysqli_fetch_assoc($sql_addQ);

        if($row!=null){
            echo "repeat";
        }else{
            echo "unrepeat";
        }
    }else{
        echo "error";
    }
?>