
<?php 
    include('server.php');
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
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<style>
    .BG{
    display: grid;
    grid-template-areas:
        'homeheader'
        'main';
    }
    .main{
        display:grid;
        grid-template-columns: 40% 60%;
    }
    .room{
        border-radius: 10px;
    border: 5px solid #a06a6a;
        margin:40px;
    }
    .box_r{
        border:0px;
    }
    .add_rr{
        display:none;
    }
</style>
<body>
<div class="BG">
    <div class="homeheader">
        <div class="ml-2">
            <a href="index.php"><img class="logo-img" src="images/home_pic.png"></a>
        </div>
        <div class="text-end mr-2">
            <a href="logout_b.php"><img class="logo-img" src="images/logout_pic.png"></a>
        </div>
    </div>
    <div class="main"  id="room">
        <div class=room>
            <div class="data_r" style="display:grid" id="data_r">
                <div class="box_r">
                <?php    
                        $sqlss = "SELECT * FROM chair WHERE id_r='$id'";
                        $resultss = $conn->query($sqlss);   
                        $rowss = $resultss->fetch_assoc(); { ?>
                                            <p ><?php echo " " . $rowss["id_c"]. ""; ?></p>
                                            <p ><?php echo "" . $rowss["id_r"]. ""; ?></p>
                                            <p ><?php echo " " . $rowss["name_c"]. ""; ?></p>
                                            <p ><?php echo "" . $rowss["status"]. ""; ?></p>
                                            <p ><?php echo " " . $rowss["access"]. ""; ?></p>
                <?php } ?>
                </div>
            </div>
        </div>
            <div class="allc">
                <?php    
                        $sqlss = "SELECT * FROM chair WHERE id_r='$id'";
                        $resultss = $conn->query($sqlss);   
                        $rowss = $resultss->fetch_assoc(); { 
                        echo"$resultss->num_rows"; ?>
                <?php } ?>
                <div>
                    <button type="button" class="btn btn-secondary" style="background: #a06a6a; color: white; font-size: 20px;" onclick="addroom()">เพิ่มที่นั่ง</button>
                </div>
            </div>
    </div>
</div>
<div class="add_rr" id="add_r">
    <div class="box_r" style="border: 5px solid #a06a6a;">
        <form action="adddata.php" method="post" style="border:0px solid; padding: 30px 0; text-align: center; background: none;">
            <div class="boxn">
                <label for="name">ชื่อ-นามสกุล</label>
                <input type="text" name="name_c" required>
           <p></p>
           <input type="hidden" name="id_r" value="<?php echo $id; ?>">
                <label>โปรดเลือก ID ที่นั่ง </label>
                <select id="select" name="select">
            <?php $i=1;  
                    $sql = "SELECT * FROM chair WHERE id_r='0'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) { ?>
                    <option value=" <?php echo $i; ?>"><?php echo $row['id_c'] ?></option> 
            <?php $i++; } ?>
                </select>
            </div>             
            <div class="room_">
                <button name="addchair" class="btn cl-normal cus-btn-basic btn-width-medium my-3 me-3" type="submit" style="background: #a06a6a; color: white; font-size: 20px;" onclick="addroom()" >เพิ่มที่นั่ง</button>
            </div>
        </form>
    </div>
</div>

<a href="room.php"><button type="button">EN</button></a>
</body>
</html>
<script type="text/javascript">
    function addroom() { 
        var x = document.getElementById("room");
        var y = document.getElementById("add_r");
            if (x.style.display === "none") {
                x.style.display = "grid";
                y.style.display = "none";
            } else {
                y.style.display = "grid";
                x.style.display = "none";
            };
    }
</script>
