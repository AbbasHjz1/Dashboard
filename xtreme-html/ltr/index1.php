
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
    $i=0;
    echo "<tr id=".$last_id .">";
    echo "<td id=".$last_id .$i++ .">" . $last_id . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $ModelName . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $mynameYear . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $mynamePlate . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $mynameVehicle . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $mynameEngine . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $mynameSeats . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $mynameAC . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $mynameWifi . "</td>";  
    echo "<td id=".$last_id .$i++ .">" . $mynameMaintenance . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $mynameOil . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $mynameTrips . "</td>"; 
    echo "<td id=".$last_id .$i++ .">" . $mynameDrivers . "</td>"; 
    echo "<td id=".$last_id .$i++ ."><a href='delete.php?id=$last_id'><i class='far fa-edit' id='edit(${del})'></i></td>"; 
    echo "<td id=".$last_id .$i++ ."><a href='delete.php?id=$last_id'><i class='fas fa-trash' id='delItem($last_id)'></i></td>"; 
    echo "</tr>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}

