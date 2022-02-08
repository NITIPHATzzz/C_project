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
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    background: #c9c9c9;
}
    .image_concept{
        width: 415px;
        height: auto;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
<body>
    <div class="header">
        <h1 class="fs-h4 text-center">ระบบตรวจสอบการนั่งทำงานในองค์กร</h1>
        <img class="image_concept" src="images/login_pic.png">
    </div>

    <form action="login_db.php" method="post" style="width: 40%;">
        <div class="box">
            <label for="username">ชื่อผู้ใช้</label>
            <input type="text" name="username">
        </div>
        <div class="box">
            <label for="password">รหัสผ่าน</label>
            <input type="password" name="password">
        </div>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        
                    ?>
                
            </div>
        <?php endif ?>
            <button type="submit" name="login_user" class="btn btn-secondary">เข้าสู่ระบบ</button>
            <!-- <p>ต้องการสมัครสมาชิก<a href="register.php">สมัครสมาชิก</a></p> -->
    </form>

</body>
</html>