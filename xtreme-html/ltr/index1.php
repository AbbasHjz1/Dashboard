
<?php


if ((!isset($_POST['submited'])) && 
($_SERVER['REQUEST_METHOD'] === 'POST') && 
 !empty($_POST['ModelName']) &&
 !empty($_POST['mynameYear']) &&
 !empty($_POST['mynamePlate']) &&
 !empty($_POST['mynameVehicle']) &&
 !empty($_POST['mynameEngine']) &&
 !empty($_POST['mynameSeats']) &&
 !empty($_POST['mynameAC']) &&
 !empty($_POST['mynameWifi']) &&
 !empty($_POST['mynameMaintenance']) &&
 !empty($_POST['mynameOil']) &&
 !empty($_POST['mynameTrips']) &&
 !empty($_POST['mynameDrivers'])) {

  $ModelName = $_POST["ModelName"]; 
  $mynameYear = $_POST["mynameYear"]; 
  $mynamePlate = $_POST["mynamePlate"];
  $mynameVehicle = $_POST["mynameVehicle"];
  $mynameEngine = $_POST["mynameEngine"];
  $mynameSeats = $_POST["mynameSeats"];
  $mynameAC = $_POST["mynameAC"];
  $mynameWifi = $_POST["mynameWifi"]; 
  $mynameMaintenance = $_POST["mynameMaintenance"]; 
  $mynameOil = $_POST["mynameOil"]; 
  $mynameTrips = $_POST["mynameTrips"]; 
  $mynameDrivers = $_POST["mynameDrivers"]; 
    
  
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
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}

