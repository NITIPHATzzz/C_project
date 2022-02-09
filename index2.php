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
        <div class="box">
            <label for="password_2">test </label>
            <input type="time" name="test">
        </div>
        <div >
            <button type="submit" name="test" class="btn btn-secondary">สมัครสมาชิก</button>
        </div>
    </form>

</body>
</html>