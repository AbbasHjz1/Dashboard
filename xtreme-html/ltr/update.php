
<?php


if (1 == 1)  {
  $idzz = trim($_POST["sselectedSbjct0"]);
  $ModelName = trim($_POST["sselectedSbjct1"]);
  $mynameYear = trim($_POST["sselectedSbjct2"]);
  $mynamePlate = trim($_POST["sselectedSbjct3"]);
  $mynameVehicle = trim($_POST["sselectedSbjct4"]);
  $mynameEngine = trim($_POST["sselectedSbjct5"]);
  $mynameSeats = trim($_POST["sselectedSbjct6"]);
  $mynameAC = trim($_POST["sselectedSbjct7"]);
  $mynameWifi = trim($_POST["sselectedSbjct8"]);
  $mynameMaintenance = trim($_POST["sselectedSbjct9"]);
  $mynameOil = trim($_POST["sselectedSbjct10"]);
  $mynameTrips = trim($_POST["sselectedSbjct11"]);
  $mynameDrivers = trim($_POST["sselectedSbjct12"]);


  include("connect_db.php");
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "sadasda";
  $sql = "UPDATE drivers 
  SET
  Model = '$ModelName',Year1 = '$mynameYear', Plate ='$mynamePlate', Vehicle = '$mynameVehicle', Engine = '$mynameEngine', Seats = '$mynameSeats', AC = '$mynameAC', WiFi = '$mynameWifi', LM = '$mynameMaintenance', Loil = '$mynameOil', Trips = '$mynameTrips', Driver = '$mynameDrivers'
  WHERE id = $idzz;";
  
  if (mysqli_query($conn, $sql)) {
echo "DONEEEEEE!!!!!!!!!!!!!!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}

