<?php
    require 'connect.php';
    //echo ''.$_POST["student"].'';
    if(isset($_POST["student"])){
        $student = $_POST["student"];
        
        $query = "SELECT id, name FROM subject INNER JOIN student_subject 
                WHERE subject.id = student_subject.id_subject 
                AND student_subject.id_student = ".$student.";";

        $result = mysqli_query($conn, $query);

        echo '
        <option selected disabled>Subject</option>';
        while ($row = mysqli_fetch_array($result)) {
            echo '<option value='.$row['id'].'>'.$row['name'].'</option>';
        } 

    }

    $conn -> close();
?>