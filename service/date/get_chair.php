<?php 
    session_start();
    include('../../server.php');
    $errors = array();

        $chair_check_query = "SELECT * FROM chair";
        $query = mysqli_query($conn, $chair_check_query);

        if ($query->num_rows > 0) {
            // output data of each row
            echo "<table border='1'><th>ID</th>";
            while($row = $query->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id_c']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();

?>