<?php 
    include('server.php');
    // session_start();
    // if (!isset($_SESSION['username'])) {
    //     $_SESSION['msg'] = "You must log in first";
    //     header('location: login.php');
    // }

    // if (isset($_GET['logout'])) {
    //     session_destroy();
    //     unset($_SESSION['username']);
    //     header('location: login.php');
    // }
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
        <?php   $sql = "SELECT * FROM room ORDER BY id_r ASC LIMIT 4;";
                $result = $conn->query($sql);   ?>
            <div class="box_r">
                <div class="view" onclick="view1()">
                    ข้อมูล
                </div>
                <div class="room_" onclick="datac1()">
                    <?php $row = $result->fetch_assoc(); { ?>
                        <p id="nameroom1"> <?php echo "".$row['name_r']?>  </p>
                        <input type="hidden" name="id1" value="<?php echo "".$row['id_r']?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="box_r">
                <div class="view" onclick="view2()">
                    ข้อมูล
                </div>
                <div class="room_" onclick="datac2()">
                    <?php $row = $result->fetch_assoc(); { ?>
                        <p id="nameroom2"> <?php echo "".$row['name_r']?>  </p>
                        <input type="hidden" name="id2" value="<?php echo "".$row['id_r']?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="box_r">
                <div class="view" onclick="view3()">
                    ข้อมูล
                </div>
                <div class="room_"onclick=" datac3()">
                    <?php $row = $result->fetch_assoc(); { ?>
                        <p id="nameroom3"> <?php echo "".$row['name_r']?>  </p>
                        <input type="hidden" name="id3" value="<?php echo "".$row['id_r']?>" />
                    <?php }?>
                </div>
            </div>

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
    <div class="data_r" id="data_r">
        <div class="box_r">
        <?php   $sqls = "SELECT * FROM room ORDER BY id_r='$id'";
                $results = $conn->query($sqls);   
                $rows = $results->fetch_assoc(); { ?>
                                    <p class="receiver" id="receiver2">ถึง<?php echo " " . $rows["id_r"]. ""; ?></p>
                                    <p class="text" id="text2"><?php echo "" . $rows["name_r"]. ""; ?></p>
                                   
                                <?php } ?><div class="room_" onclick="addroom()">
                <p> เพิ่มห้อง </p>
            </div>
        </div>
    </div>
</div>
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
    function view1() { 
        var x = document.getElementById("room");
        var y = document.getElementById("data_r");
            if (x.style.display === "none") {
                x.style.display = "grid";
                y.style.display = "none";
            } else {
                y.style.display = "grid";
                x.style.display = "none";
            };
            var id='1';
            $.post("room.php", id);
    }
    function view2() { 
        var x = document.getElementById("room");
        var y = document.getElementById("data_r");
            if (x.style.display === "none") {
                x.style.display = "grid";
                y.style.display = "none";
            } else {
                y.style.display = "grid";
                x.style.display = "none";
            };
            var id='2';
            $.post("room.php", id);
    }
    function view3() { 
        var x = document.getElementById("room");
        var y = document.getElementById("data_r");
            if (x.style.display === "none") {
                x.style.display = "grid";
                y.style.display = "none";
            } else {
                y.style.display = "grid";
                x.style.display = "none";
            };
            var id='3';
            $.post("room2.php", id);
    }
    function datac1() { 
        // var x = document.getElementById("room");
        // var y = document.getElementById("data_r");
        //     if (x.style.display === "none") {
        //         x.style.display = "grid";
        //         y.style.display = "none";
        //     } else {
        //         y.style.display = "grid";
        //         x.style.display = "none";
           
                var id1 = $('input[name="id1"]').val();
                console.log("id is:",id1);
                window.location.href = "chair.php?id="+id1;
            
    }
    function datac2() { 
        // var x = document.getElementById("room");
        // var y = document.getElementById("data_r");
        //     if (x.style.display === "none") {
        //         x.style.display = "grid";
        //         y.style.display = "none";
        //     } else {
        //         y.style.display = "grid";
        //         x.style.display = "none";
           
                var id2 = $('input[name="id2"]').val();
                console.log("id is:",id2);
                window.location.href = "chair.php?id="+id2;
            
    }
    function datac3() { 
        // var x = document.getElementById("room");
        // var y = document.getElementById("data_r");
        //     if (x.style.display === "none") {
        //         x.style.display = "grid";
        //         y.style.display = "none";
        //     } else {
        //         y.style.display = "grid";
        //         x.style.display = "none";
                
                var id3 = $('input[name="id3"]').val();
                if(id3!=''){
                console.log("id is:",id3);
                    $.ajax({
		          	method:"POST",
		          	url: "chair.php",
		        data:{id:id3}})
                location.replace("chair.php");
                }else{
                    alert("Complete");
                }     
    }
</script>