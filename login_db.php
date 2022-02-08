<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);  
        if (empty($username)) {
            array_push($errors, "โปรดระบุชื่อผู้ใช้");
        }

        if (empty($password)) {
            array_push($errors, "โปรดระบุรหัสผ่าน");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($conn, $query);
            
            
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $sql = "SELECT * FROM users WHERE username = '$username'";
                $data = $conn->query($sql);
                while($row = $data->fetch_assoc()) {
                if ($row["position"] == "admin") {
                 header("location: index.php");
            }
                else{
                 header("location: index2.php");
            }}
            } 
            else {
                array_push($errors, "ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง");
                $_SESSION['error'] = "ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง";
                header("location: login.php"); 

            }

        } else {
            array_push($errors, "โปรดระบุชื่อผู้ใช้หรือรหัสผ่านของท่าน");
            $_SESSION['error'] = "โปรดระบุชื่อผู้ใช้หรือรหัสผ่านของท่าน";
            header("location: login.php");
        }
    }

?>

