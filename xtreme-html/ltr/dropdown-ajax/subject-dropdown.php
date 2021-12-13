<?php
require 'connect.php';
    $studentsbjct = $_POST["subjIdGrade"];
    
    $query = "SELECT grade FROM student_grade 
    WHERE id_student = 1 
    AND id_subject = ".$studentsbjct.";";
    
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        echo $row["grade"];
    } 
    
    
$conn -> close();
?>