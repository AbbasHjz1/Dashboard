<?php

include("connect_db.php"); // Using database connection file here
echo "SADAS";
$id = $_GET['id']; // get id through query string

$sql = "delete from drivers where id = '$id'";



if (mysqli_query($conn, $sql)) {
header("location:index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>