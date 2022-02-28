<?php
   include('server.php'); 

$id= $_GET['id']; 
$ss1 = $_GET['status']; 
$ss2 = $_GET['ss2'];
$ss3 = $_GET['access']; 
// $ss4 = $_GET['ss4'];
// $lc1 = $_GET['lc1']; 
// $lc2 = $_GET['lc2'];
// $lc3 = $_GET['lc3']; 
// $lc4 = $_GET['lc4'];
// $mt1 = $_GET['mt']; 
$sql = "SELECT * FROM chair WHERE id_c='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    $sql2 = "UPDATE chair SET status='$ss1',buzzer='$ss2', access='on' WHERE id_c='$id'";
    // $sql2 = "UPDATE chair SET status='$ss1',s2='$ss2',s3='$ss3',s4='$ss4',lc1='$lc1',lc2='$lc2',lc3='$lc3',lc4='$lc4',mt='$mt', access='on' WHERE id_c='$id'";
    if ($conn->query($sql2)) {
        // echo "Update Complete";
        echo "yesssssssssssssssssssssssssssssssss";
        $data = mysqli_fetch_assoc($result);
        echo json_encode($data);
    }else{
        echo "พัง";
    }
} else {
    $sql3 = "INSERT INTO chair (id_c,status,s2,access) VALUES ('$id', '$ss1','$ss2',  'on')";
    // $sql3 = "INSERT INTO chair (id_c,status,s2,s3,s4,lc1,lc2,lc3,lc4,mt,access) VALUES ('$id','$ss1','$ss2','$ss3','$ss4','$lc1','$lc2','$lc3','$lc4','$mt','on')";
    mysqli_query($conn, $sql3);
    echo "inset Complete";
}

$conn->close();
?>