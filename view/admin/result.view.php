<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body>
<?php 

?>
    <div class="sidebar bg-primary d-flex justify-content-center align-items-center">
        <ul class=" nav flex-column text-center">
            <li class="my-3"><a class="text-decoration-none" href="./subject.view.php"><span class="text-uppercase">Subjects</span></a></li>
            <li class="mb-3"><a class="text-decoration-none" href="./test.view.php"><span class="text-uppercase">Tests</span></a></li>
            <li class="mb-3"><a class="text-decoration-none" href="./result.view.php"><span class="text-uppercase">Students Result</span></a></li>
        </ul>
    </div>
    <div style="margin-left:250px">
        <div class="text-center pt-3 text-blue">
            <h3 style="color:#0d6efd; font-family:sans-serif">Results</h3>
        </div>
       
        
        <table class="table" id="datatable">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Student name</th>
                    <th>Subject</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                
                    <?php
                        $conn = mysqli_connect("localhost", "root", "root", "laravel");
                        $sql = "SELECT * FROM student_result";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){
                            $id = $row['id'];
                            echo "<tr class='text-center'><td>".$row['username']."</td><td>".$row['subject']."</td><td>".$row['result']."</td></tr>";
                        }
                        $conn->close();
                    ?>
                <!-- </tr> -->
               
            </tbody>

        </table>
    </div>
</body>
</html> 