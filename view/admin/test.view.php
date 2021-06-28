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
            <li class="mb-3"><a class="text-decoration-none" href="./results.view.php"><span class="text-uppercase">Students Result</span></a></li>
        </ul>
    </div>
    <div style="margin-left:250px">
        <div class="text-center pt-3 text-blue">
            <h3 style="color:#0d6efd; font-family:sans-serif">Tests</h3>
        </div>
        <form action="/view/admin/test/add-test.view.php" method="get">
        <button type="submit" class="btn btn-primary m-2 pb-0">
            <p >Add Test</p>
        </button>
        </form>
        
    
                    <?php
                        $conn = mysqli_connect("localhost", "root", "root", "laravel");
                        $sql = "SELECT name FROM Tests";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){
                            echo "<div class='card d-flex align-items-center' ><div class='card-body '><h5 class='card-title'>".$row['name']."</h5><p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href='#' class='btn btn-primary float-end '>Show</a></div></div>";    
                        }
                        $conn->close();
                    ?>
                
              
    </div>
</body>
</html> 

