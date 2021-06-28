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
            <h3 style="color:#0d6efd; font-family:sans-serif"><?= $_REQUEST['name_subject'] ?></h3>
        </div>
        
        
    
                    <?php
                    // var_dump($_REQUEST);
                        $table = $_REQUEST['name_subject'];
                        $conn = mysqli_connect("localhost", "root", "root", "laravel");
                        $sql = "SELECT * FROM $table";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()): ?>
                            <div class="p-5 text-center">
                                <h2 class="p-3 "><?= $row['question']?></h2><br>
                                <div class="d-flex align-items-center">
                                    <h5><?=$row['answer1']?></h5><br>
                                </div>
                                <div class="d-flex align-items-center">
                                    <h5><?=$row['answer2']?></h5><br>
                                </div>
                                <div class="d-flex align-items-center">
                                    <h5><?=$row['answer3']?></h5><br>
                                </div>
                                <div class="d-flex align-items-center">
                                    <h5><?=$row['answer4']?></h5><br>
                                </div>
                                
                            </div>
                     
              
                        <?php endwhile; 
                        $conn->close();
                    ?>
                    <div class="text-center">
                    <a href="https://php/view/admin/test.view.php" class="btn btn-primary mb-5">Back</a>
                    </div>
    </div>
</body>
</html> 

