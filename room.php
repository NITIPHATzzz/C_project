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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
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
    <div class="room" id="room">
        <?php
        $sql = "SELECT * FROM room";
            $result = $conn->query($sql);
            $i=0;
            if ($result->num_rows > 0) {
                $room=[];
                while($row=mysqli_fetch_assoc($result)) { 
                    array_push($room,$row);
        ?> 
            <div class="box_r">
                <?php?>
                
                <div class="view" onclick="view()">ข้อมูล</div>
                <div class="room_">
                <a href="chair.php?id_r=<?php echo $room[$i]['id_r'];?>"><p id="nameroom"> <?php echo "".$room[$i]['name_r']; ?>  </p></a>
                </div>
            </div>
        <?php $i++;
        if($result->num_rows < $i){
            break;
        }
        } 
        } 
        ?>
        <div class="box_rr">
            <div class="room_" onclick="addroom()">
                <p> เพิ่มห้อง </p>
            </div>
        </div>
    </div>

    <div class="add_r" id="add_r">
        <div class="box_r">
        <form action="adddata.php" method="post" style="border:0px solid; padding: 70px 0; text-align: center; background: none;">             
            <input type="text" name="nr" placeholder="ระบุชื่อห้อง" style="text-align: center;">
            <div class="room_">
                <button name="addroom" class="btn cl-normal cus-btn-basic btn-width-medium my-3 me-3" type="submit" style="background: #a06a6a; color: white; font-size: 20px;" onclick="addroom()" >เพิ่มห้อง</button>
            </div>
        </form>
        </div>
    </div>
    <?php   for ($x = 0; $x <= 100; $x++) {?>
        <textarea style="display:none" id="lon"><?php echo  $position[$x]; ?></textarea>
    <?php } ?>
</div>
</body>
</html>
<script>
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
    function view() { 
        // var x = document.getElementById("room");
        // var y = document.getElementById("add_r");
        //     if (x.style.display === "none") {
        //         x.style.display = "grid";
        //         y.style.display = "none";
        //     } else {
        //         y.style.display = "grid";
        //         x.style.display = "none";
        //     };
        let pos = JSON.parse(document.getElementById('lon').value);
        console.log(pos);
        if (pos=="1") {
            console.log("1");
        }else if(pos=="2"){
            console.log("2");
        }
        // let testarray=[];
        // for (let i=0;i < pos.length;i++ ){
        //   let lon= pos[i];
        //   let lat= pos[i];
        //   let preapring = [lon,lat]
        //   testarray.push(preapring);
        // }
        // console.log(testarray);
        // var id_r = $id_r;
        var s1 = lon.value;
        // var r1 = receiver.value;
        // var t1 = ta.value;
        console.log("sender is:",s1);
        // window.location.href = "Page3sent.php?text="+t1+"&receiver="+r1+"&sender="+s1;
                }
</script>

