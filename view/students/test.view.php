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
            $table = $_REQUEST['test'];
            $conn = mysqli_connect("localhost", "root", "root", "laravel");
            $sql = "SELECT * FROM $table";
            $result = $conn->query($sql);
           
            // $subject = $_REQUEST['test'];
            $username = $_REQUEST['user_name'];?>
            <form action="../../controllers/students/answer.php" method="post">
            <input type="hidden" name="username" value="<?=$username?>">
            <?php while($row = $result->fetch_assoc()) : ?>
                <div class="p-5 text-center">
                    <h2 class="p-3 "><?= $row['question']?></h2><br>
                    <div class="d-flex align-items-center">
                        <input type="radio" name="<?= $row['id']?>" value="1">
                        <h5><?=$row['answer1']?></h5><br>
                    </div>
                    <div class="d-flex align-items-center">
                        <input type="radio" name="<?= $row['id']?>" value="2">
                        <h5><?=$row['answer2']?></h5><br>
                    </div>
                    <div class="d-flex align-items-center">
                        <input type="radio" name="<?= $row['id']?>" value="3">
                        <h5><?=$row['answer3']?></h5><br>
                    </div>
                    <div class="d-flex align-items-center">
                        <input type="radio" name="<?= $row['id']?>" value="4">
                        <h5><?=$row['answer4']?></h5><br>
                    </div>
                    
                </div>
                
            <?php endwhile;
            $conn->close();

             ?>
            <div class="text-center">
                <button class="btn btn-success mb-5 mr-5" type="submit" name="subject" value="<?=$table?>" ><h4>TEST</h4></button>
            </div>
        </form>
</body>
</html> 

