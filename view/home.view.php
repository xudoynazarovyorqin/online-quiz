<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Examination</title>
</head>
<body>

    <div class="container ">
        <h5 class="float-end pt-3 "><a class="text-decoration-none " href="/view/login.view.php">LOGIN</a></h5>

        <div class="vertical-center">
            <form action="../../controllers/students/begin.php" method="post">
            <!-- <small><p>Name</p></small> -->
                <input type="text" name="user_name" placeholder="Your Name" class="form-control m-0 mb-2" required>
                <small><p class="m-0 p-0 ml-2">Enter Subject</p></small>
                <select name="test" id="test" class="form-select">
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
                    <button type="submit" class="btn btn-primary m-2 pt-2 px-4">
                        <h5>START TEST</h5>
                    </button>
                </div>

            </form>
        </div>
    </div>

</body>
</html>