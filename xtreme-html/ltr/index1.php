
<?php


if (1 == 1)  {

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
    header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}

