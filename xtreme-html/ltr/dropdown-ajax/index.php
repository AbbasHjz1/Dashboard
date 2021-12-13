<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Dropdown</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("select.student").change(function(){
                    var selectedStd = $(".student option:selected").val();
                    $.ajax({
                        type: "POST",
                        url: "process-dropdown.php",
                        data: { student : selectedStd } 
                    }).done(function(data){
                        $("#response").html(data);
                    });
                });
            });
            $(document).ready(function(){
                $("select.subject").change(function(){
                    var selectedSbjct = $(".subject option:selected").val();
                    $.ajax({
                        type: "POST",
                        url: "subject-dropdown.php",
                        data: { subjIdGrade : selectedSbjct } 
                    }).done(function(data){
                        console.log(data);
                        $("#demo").html(data);
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">   
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="card p-4 bg-light">
                        <div class="col-12">
                            <h3 class='text-center'>SUBJECTS</h3>
                            <form action="#" method="post">
                                <div class="form-group mt-5">
                                    <select name="stdId" class="form-control student" placeholder='Student' id="stdId">
                                    <?php
                                        require_once('./connect.php');
                                        echo '
                                        <option selected disabled>Student</option>';
                                        
                                        $sqli = "SELECT student.id, fname, lname FROM student INNER JOIN person 
                                                ON student.id_person = person.id;
                                        ";
                                        $result = mysqli_query($conn, $sqli);
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value='.$row['id'].'>'.$row['fname'].' '.$row['lname'].'</option>';
                                        }
                                    ?>
                                    </select>
                                    
                                </div>
                                <div class="form-group mt-5" >
                                    <select name="subjIdGrade" id="response" class="form-control subject" id="subjIdGrade">
                                        
                                    </select>
                                </div>
                                <div id="demo"></div>
                            </form>
                        </div>
                    </div>
                </div> 
                <div class="col-3"></div>  
            </div>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="../app.js"></script>        
    </body>
</html>