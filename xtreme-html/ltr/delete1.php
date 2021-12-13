<?php

include("connect_db.php"); // Using database connection file here
echo "SADAS";
$id = $_POST['TODELL']; // get id through query string
echo $id;
$sql = "delete from drivers where id = '$id'";

if (mysqli_query($conn, $sql)) {
    $connection = mysqli_connect('localhost', 'root', '', 'dashboard');
    $sql = "SELECT id,Model, Year1, Plate, Vehicle, Engine, Seats, AC, WiFi, LM, Loil, Trips,Driver FROM drivers";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0){
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'. $row['id'] .'</td>';
            echo '<td>'. $row['Model'] .'</td>';
            echo '<td>'. $row['Year1'] .'</td>';
            echo '<td>'. $row['Plate'] .'</td>';
            echo '<td>'. $row['Vehicle'] .'</td>';
            echo '<td>'. $row['Engine'] .'</td>';
            echo '<td>'. $row['Seats'] .'</td>';
            echo '<td>'. $row['AC'] .'</td>';
            echo '<td>'. $row['WiFi'] .'</td>';
            echo '<td>'. $row['LM'] .'</td>';
            echo '<td>'. $row['Loil'] .'</td>';
            echo '<td>'. $row['Trips'] .'</td>';
            echo '<td>'. $row['Driver'] .'</td>';
            ?>
            <td> <i class='far fa-edit' id="edit<?php echo $row['id']?>"></i></td>              
            <td> <i class='fas fa-trash' id="delItem<?php echo $row['id']?>"></i></td>
            <?php
            echo '</tr>';
        }
    }
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>