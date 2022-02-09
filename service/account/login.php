<?php 
    include "../../server.php";

    $requestMethod = $_SERVER["REQUEST_METHOD"];

    $data = file_get_contents("php://input");
    echo $data;
    $result = json_decode($data, true);

    if ($requestMethod == 'POST'){
        $username = $result["username"];
        $password = $result["password"];
        $f_password = md5($password);
        // echo $username;
        $sql_login = "SELECT *FROM `users` WHERE username = '$username' AND password = '$f_password'";
        $sql_loginQ = mysqli_query($conn,$sql_login);
        $row=mysqli_fetch_assoc($sql_loginQ);
        if($row!=null){
            echo "complete";
        }else{
            echo "fail";
        }
    }else{
        echo "error";
    }
?>