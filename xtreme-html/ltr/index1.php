
<?php


if (1 == 1)  {
  
  $ModelName = $_POST["student1"]; 
  $mynameYear = $_POST["student2"]; 
  $mynamePlate = $_POST["student3"];
  $mynameVehicle = $_POST["student4"];
  $mynameEngine = $_POST["student5"];
  $mynameSeats = $_POST["student6"];
  $mynameAC = $_POST["student7"];
  $mynameWifi = $_POST["student8"]; 
  $mynameMaintenance = $_POST["student9"]; 
  $mynameOil = $_POST["student10"]; 
  $mynameTrips = $_POST["student11"]; 
  $mynameDrivers = $_POST["student12"]; 
    
  
  include("connect_db.php");
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "INSERT INTO drivers (Model,Year1, Plate, Vehicle, Engine, Seats, AC, WiFi, LM, Loil, Trips, Driver)
  VALUES ('$ModelName','$mynameYear','$mynamePlate','$mynameVehicle','$mynameEngine','$mynameSeats','$mynameAC','$mynameWifi','$mynameMaintenance','$mynameOil','$mynameTrips','$mynameDrivers')";
  
  if (mysqli_query($conn, $sql)) {
    $last_id = $conn->insert_id;
    echo "<tr>";
    echo "<td>" . $last_id . "</td>"; 
    echo "<td>" . $ModelName . "</td>"; 
    echo "<td>" . $mynameYear . "</td>"; 
    echo "<td>" . $mynamePlate . "</td>"; 
    echo "<td>" . $mynameVehicle . "</td>"; 
    echo "<td>" . $mynameEngine . "</td>"; 
    echo "<td>" . $mynameSeats . "</td>"; 
    echo "<td>" . $mynameAC . "</td>"; 
    echo "<td>" . $mynameWifi . "</td>";  
    echo "<td>" . $mynameMaintenance . "</td>"; 
    echo "<td>" . $mynameOil . "</td>"; 
    echo "<td>" . $mynameTrips . "</td>"; 
    echo "<td>" . $mynameDrivers . "</td>"; 
    echo "<td><a href='delete.php?id=$last_id'><i class='far fa-edit' id='edit(${del})'></i>" . $mynameDrivers . "</td>"; 
    echo "<td><a href='delete.php?id=$last_id'><i class='fas fa-trash' id='delItem(${del})'></i>" . $mynameDrivers . "</td>"; 
    echo "</tr>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}

