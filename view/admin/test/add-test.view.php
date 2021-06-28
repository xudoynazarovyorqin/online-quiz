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
            <li class="my-3"><a class="text-decoration-none" href="../subject.view.php"><span class="text-uppercase">Subjects</span></a></li>
            <li class="mb-3"><a class="text-decoration-none" href="../test.view.php"><span class="text-uppercase">Tests</span></a></li>
            <li class="mb-3"><a class="text-decoration-none" href="../results.view.php"><span class="text-uppercase">Students Result</span></a></li>
        </ul>
    </div>
    <div style="margin-left:250px">
        <div class="text-center pt-3 text-blue">
            <h3 style="color:#0d6efd; font-family:sans-serif">Add Test</h3>
        </div>
        <form action="../../../view/admin/test/create-test.view.php" method="Post">

            <div class="form-group">
                <select name="subject" class="form-select" >
                    <?php   
            $conn = mysqli_connect("localhost", "root", "root", "laravel");
            $sql = "SELECT name, id FROM subjects_table";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
                echo "<option value=".$row['name'].">".$row['name']."</option>" ;
            }
            $conn->close();
            ?>
            </select>
            <div class="text-center">
                <button class=" m-3 btn btn-primary" type="submit">Create Test</button>
            </div>
        </div>
        </form>
        
    </div>
</body>
</html> 

