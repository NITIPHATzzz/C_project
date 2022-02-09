<?php 
    session_start();
    include('server.php'); 
    
    $chair_check_query = "SELECT * FROM test";
    $query = mysqli_query($conn, $chair_check_query);

    if ($query->num_rows > 0) {
        // output data of each row
        echo "<table border='1'><th>time</th><th>alam</th>";
        while($row = $query->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['time']."</td>";
            echo "<td>".$row['alam']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();

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
    </div>

    <form action="register_db.php" method="post">
        <div class="box">
            <label for="test">test </label>
            <input type="time" name="test"step="1">
        </div>
        <div >
            <button type="submit" name="testt" class="btn btn-secondary">ส่ง</button>
        </div>
    </form>
   
</body>
</html>