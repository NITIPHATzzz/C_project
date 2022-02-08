<?php 
    session_start();
    // print_r($_SESSION['username']);
    
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="row justify-content-center">
    <div class="homeheader">
        <div class="ml-2">
            <a href="index.php"><img class="logo-img" src="images/home_pic.png"></a>
        </div>
        <div class="text-end mr-2">
            <a href="logout_b.php"><img class="logo-img" src="images/logout_pic.png"></a>
        </div>
    </div>

        <img class="image_concept" src="images/login_pic.png">
    
    <div class="col-12 pt-4 pb-2">
        <h1 class="fs-h1-bold cl-text text-center">ยินดีต้อนรับสู่</h1>
        <h1 class="fs-h1 cl-text  text-center">ระบบตรวจสอบการนั่งทำงานในองค์กร</h1>
    </div>
    <div class="col-12 d-flex flex-row justify-content-center">
        <a href="room.php"><button class="btn cl-normal cus-btn-basic btn-width-medium my-3 me-3" type="button" style="background: #a06a6a; color: white; font-size: 20px;">เริ่มต้นใช้งาน</button></a>
    </div>
    </div>
</body>
</html>
<script>
    
</script>