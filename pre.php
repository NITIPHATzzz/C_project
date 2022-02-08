<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
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
            <img class="logo-img" src="images/home_pic.png">
        </div>
        <div class="text-end mr-2">
            <img class="logo-img" src="images/logout_pic.png">
        </div>
    </div>

    <!-- <div class="homecontent">
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div> -->
   
        <img class="image_concept" src="images/login_pic.png">
    
    <div class="col-12 pt-4 pb-2">
        <h1 class="fs-h1-bold cl-text text-center">ยินดีต้อนรับสู่</h1>
        <h1 class="fs-h1 cl-text  text-center">ระบบตรวจสอบการนั่งทำงานในองค์กร</h1>
    </div>
    <div class="col-12 d-flex flex-row justify-content-center">
        <button class="btn btn-secondary cl-normal cus-btn-basic btn-width-medium my-3 me-3" type="button" (click)="toPages('cannabis')">เริ่มต้นใช้งาน</button>
    </div>
    </div>
</body>
</html>
<script>
    
</script>