<?php 
    include "../../server.php";

    $requestMethod = $_SERVER["REQUEST_METHOD"];

    $data = file_get_contents("php://input");
    // echo $data;
    $result = json_decode($data, true);

    if ($requestMethod == 'POST'){
        $username = $result["username"];
        $password = $result["password"];
        $f_password = md5($password);
        // echo $username;
        $sql_add = "INSERT INTO `users`(`username`, `password`, `position`) VALUES ('$username','$f_password','users')";
        $sql_addQ = mysqli_query($conn,$sql_add);
        if($sql_addQ){
            echo "complete";
        }else{
            echo "fail";
        }
    }else{
        echo "error";
    }
?>