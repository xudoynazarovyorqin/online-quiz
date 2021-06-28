<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>user result</title>
</head>
<body>

        <?php 
             $user  ;   
             $conn = mysqli_connect("localhost", "root", "root", "laravel");
             $sql = "SELECT * FROM student_result";
             $result = $conn->query($sql);
             while($row = $result->fetch_assoc()){
                 
                $user = $row;
                 
             }
            //  var_dump($user);
        ?>
        <div class="vertical-center text-center">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title"><b>Username</b>: <?= $user['username'] ?></h5>
                        <h5 class="card-title"><b>Subject</b>: <?= $user['subject'] ?></h5>
                        <h4 class="card-title" style="color: green">Result: <p><?= $user['result'] ?></p></h4>
                      
                    </div>
                </div>
             <form action="/">
                <div class="text-center mt-3">
                    <button class="btn btn-success mb-5 mr-5" type="submit" ><h5>Home</h5></button>
                </div>
             </form>
        </div>
        </form>
</body>
</html> 

