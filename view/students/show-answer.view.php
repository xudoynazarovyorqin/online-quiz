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
             var_dump($user);
        ?>
        

     
             <form action="/">
            <div class="text-center">
                <button class="btn btn-success mb-5 mr-5" type="submit" ><h4>Home</h4></button>
            </div>
             </form>
        </form>
</body>
</html> 

