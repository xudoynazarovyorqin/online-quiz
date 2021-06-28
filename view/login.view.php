<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Examination</title>
</head>
<body>

    <div class="container ">
        <div class="vertical-center">
            <form action="/controllers/admin/login.php" method="POST">
            <div class="form-group">
                <?php if($_REQUEST): ?>
                    <div class="alert alert-danger" role="alert">
                        Error with Login or Password
                     
                    </div>
                <?php endif;  ?>
                <input type="text" name="login" placeholder="login" class="form-control">
                <input type="password" name="password" placeholder="password" class="form-control">
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary m-2 pt-2 px-4">
                        <h5>Login</h5>
                    </button>
                </div>
            </div >

            </form>
            
        </div>
    </div>

</body>
</html>
