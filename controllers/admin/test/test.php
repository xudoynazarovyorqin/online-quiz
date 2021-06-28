<?php
class Test 
{
    public $table_name;
    public function createTest()
    {
        $conn = mysqli_connect("localhost", "root", "root", "laravel");
        // if($_REQUEST['subject']){
            $this->table_name = $_REQUEST['subject'];
        // }
        // die(var_dump($this->table_name));
        $sql = "CREATE TABLE $this->table_name (  id int UNSIGNED AUTO_INCREMENT PRIMARY KEY, question varchar(225),  answer1 varchar(225), answer2 varchar(225), answer3 varchar(225), answer4 varchar(225), true_answer int  )";
        $sql2 = "INSERT INTO Tests (name) VALUES ('$this->table_name')";
        mysqli_query($conn, $sql2);
        if (mysqli_query($conn, $sql)) {
                require $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'view/admin/test' . DIRECTORY_SEPARATOR . 'create-test.view.php';
            } else {
                // requi    re $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'view/admin/test' . DIRECTORY_SEPARATOR . 'add-test.view.php';
                // echo "Error: " . $sql . "<br>" . $conn->error;
                header("Location: https://php/view/admin/test/create-test.view.php");
                die();
            }
        $conn->close();
    }
    public function addTest()
    {
        var_dump($_REQUEST);
        $conn = mysqli_connect("localhost", "root", "root", "laravel");
        $table = $_REQUEST['table'];
        $question = $_REQUEST['question'];
        $answer1 = $_REQUEST['answer1'];
        $answer2 = $_REQUEST['answer2'];
        $answer3 = $_REQUEST['answer3'];
        $answer4 = $_REQUEST['answer4'];
        $true_answer = $_REQUEST['true'];
        var_dump($this->table_name);
        $sql = "INSERT INTO $table (question, answer1, answer2, answer3, answer4, true_answer) VALUES ('$question', '$answer1', '$answer2', '$answer3', '$answer4','$true_answer')";
        // var_dump($question);   
        if (mysqli_query($conn,$sql)) {
                require "../../../view/admin/test/create-test.view.php";
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                header("Location: https://php/view/admin/add-subject.view.php");
                die();
            }
        
            $conn->close();
    }
}