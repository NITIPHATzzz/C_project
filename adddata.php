<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['addroom'])) {
        $name_r = mysqli_real_escape_string($conn, $_POST['nr']);
       
        $user_check_query = "SELECT * FROM room ORDER BY id_r DESC;";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);
        $id_r = $result['id_r']+1;
// print_r($id_r);
        $sql = "INSERT INTO room (id_r, name_r) VALUES ('$id_r', '$name_r')";
        mysqli_query($conn, $sql);
        header('location: room.php');
        
    }
    if (isset($_POST['addchair'])) {
        $name_c = mysqli_real_escape_string($conn, $_POST['name_c']);
        $id_c = mysqli_real_escape_string($conn, $_POST['select']);
        $id_r = mysqli_real_escape_string($conn, $_POST['id_r']);
        print_r($name_c);
        print_r($id_c);
        print_r($id_r);
        $user_check_query = "UPDATE chair SET id_r='$id_r',name_c='$name_c' WHERE id_c='$id_c'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);
        header('location: chair.php');
        
    }

?>

