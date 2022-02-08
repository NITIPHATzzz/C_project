<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
    <h1 class="fs-h4 text-center">สมัครสมาชิก</h1>
    </div>

    <form action="register_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
            </div>
        <?php endif ?>
        <div class="box">
            <label for="username">ชื่อผู้ใช้ </label>
            <input type="text" name="username">
        </div>
        <div class="box">
            <label for="email">อีเมล </label>
            <input type="email" name="email">
        </div>
        <div class="box">
            <label for="password_1">รหัสผ่าน </label>
            <input type="password" name="password_1">
        </div>
        <div class="box">
            <label for="password_2">ยืนยันรหัสผ่าน </label>
            <input type="password" name="password_2">
        </div>
        <div >
            <button type="submit" name="reg_user" class="btn btn-secondary">สมัครสมาชิก</button>
        </div>
        <p>ต้องการเข้าสู่ระบบ<a href="login.php">เข้าสู่ระบบ</a></p>
    </form>

</body>
</html>