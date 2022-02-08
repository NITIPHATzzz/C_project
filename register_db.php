 <?php 
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $position = mysqli_real_escape_string($conn, "users");

        if (empty($username)) {
            array_push($errors, "โปรดระบุชื่อผู้ใช้");
            $_SESSION['error'] = "โปรดระบุชื่อผู้ใช้";
        }
        if (empty($email)) {
            array_push($errors, "โปรดระบุบัญชีอีเมล");
            $_SESSION['error'] = "โปรดระบุบัญชีอีเมล";
        }
        if (empty($password_1)) {
            array_push($errors, "โปรดระบุรหัสผ่าน");
            $_SESSION['error'] = "โปรดระบุรหัสผ่าน";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "รหัสผ่านทั้ง2ไม่ตรงกัน");
            $_SESSION['error'] = "รหัสผ่านทั้ง2ไม่ตรงกัน";
        }

        $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['username'] === $username) {
                array_push($errors, "ชื่อผู้ใช้ซ้ำ");
                $_SESSION['error'] = "ชื่อผู้ใช้ซ้ำ";
            }
            if ($result['email'] === $email) {
                array_push($errors, "บัญชีอีเมลซ้ำ");
                $_SESSION['error'] = "บัญชีอีเมลซ้ำ";
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO users (username, email, password, position) VALUES ('$username', '$email', '$password','$position')";
            mysqli_query($conn, $sql);
            header('location: login.php');
        } else {
            header("location: register.php");
        }
    }

?>
