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
            <li class="my-3"><a class="text-decoration-none" href="../../../view/admin/subject.view.php"><span class="text-uppercase">Subjects</span></a></li>
            <li class="mb-3"><a class="text-decoration-none" href="../../../view/admin/test.view.php"><span class="text-uppercase">Tests</span></a></li>
            <li class="mb-3"><a class="text-decoration-none" href="../../../view/admin/results.view.php"><span class="text-uppercase">Students Result</span></a></li>
        </ul>
    </div>
    <div style="margin-left:250px">
    <div class="text-center pt-3 text-blue">
            <h3 style="color:#0d6efd; font-family:sans-serif">Create Test</h3>
        </div>
    
        <form action="../../../controllers/admin/test/add-test.php" method="post">
        <div class="form-group">
            <input type="text" name="question" class="form-control " placeholder="Question">
            <div class="form-group d-flex align-items-center">
                <input type="radio" name="true" value="1">
                <input type="text" name="answer1" class="form-control" placeholder="answer 1" >
            </div>
            
            <div class="form-group d-flex align-items-center">
                <input type="radio" name="true" value="2">
                <input type="text" name="answer2" class="form-control" placeholder="answer 2" >
            </div>
            <div class="form-group d-flex align-items-center">
                <input type="radio" name="true" value="3">
                <input type="text" name="answer3" class="form-control" placeholder="answer 3" >
            </div>
            <div class="form-group d-flex align-items-center">
                <input type="radio" name="true" value="4">
                <input type="text" name="answer4" class="form-control" placeholder="answer 4" >
            </div>
                <input type="hidden" name="subject" value="<?=$_REQUEST['subject']?>">
                
            <div class="text-center">
                <button class="btn btn-primary " >Add Question</button>
            </div>
        </div>
        </form>
        
    </div>
</body>
</html> 

