<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body>
    <div class="sidebar bg-primary d-flex justify-content-center align-items-center">
        <ul class=" nav flex-column text-center">
            <li class="my-3"><a class="text-decoration-none" href="./subject.view.php"><span class="text-uppercase">Subjects</span></a></li>
            <li class="mb-3"><a class="text-decoration-none" href="./tests.view.php"><span class="text-uppercase">Tests</span></a></li>
            <li class="mb-3"><a class="text-decoration-none" href="./results.view.php"><span class="text-uppercase">Students Result</span></a></li>
        </ul>
    </div>
    <div style="margin-left:250px">
    <?php 
        $id = $_REQUEST['update'];
        $conn = mysqli_connect("localhost", "root", "root", "laravel");
        $sql1= "SELECT name, id  FROM subjects_table where id='$id'";
        $result =  $conn->query($sql1);
        $row = $result->fetch_assoc();
        $name = $row['name'];
?>

        <div class="text-center pt-3 text-blue">
            <h3 style="color:#0d6efd; font-family:sans-serif">Update Subject</h3>
        </div>
        <form action="../../controllers/admin/subject/update-subject.php" method="post">
            <input type="text" value="<?=$name?>" name="subject_name" placeholder="Enter Subject Name" class="form-control">
            <div class="text-center">
            
                <button type="submit" name="last_id" value="<?= $row['id'] ?>" class="btn btn-primary m-3 px-3 mt-1">Update</button>
            </div>
            
        </form>
        
    </div>
</body>
</html> 

