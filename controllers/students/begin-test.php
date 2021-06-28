<?php
class Student 
{
    public $username;
    public $table;
    public function beginTest()
    {
        $this->username = $_REQUEST['user_name'];
        $this->table = $_REQUEST['test'];
        // var_dump($this->table);           
                require $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'view/students' . DIRECTORY_SEPARATOR . 'test.view.php';
                // require "../../../view/students/test.view.php";
    }
    public function endTest()
    {
        // echo $this->username;
        // var_dump($_REQUEST);   
       
        // foreach( $_REQUEST['old'] as $key => $val)
        // {
            // var_dump($_REQUEST);
        // } 
        $conn = mysqli_connect("localhost", "root", "root", "laravel");
        
        $true = 0;
        $count = 0;
        foreach($_REQUEST as $key => $val){
            if(is_numeric($key)){
                // var_dump($key);
                $sql = "SELECT id, true_answer FROM Matematika WHERE id=$key";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    if($row['true_answer']==$val){
                        $true++;
                    }
                    $count++;
                  
                }
            }
            
        }

        $username = $_REQUEST['username'];
        $subject_name = $_REQUEST['subject'];

        $test_result =  $true."/".$count;
        $sql2 = "INSERT INTO student_result (username,subject,result) VALUES ('$username','$subject_name','$test_result')";
        mysqli_query($conn, $sql2);
       
            $conn->close();

            header("Location: https://php/view/students/show-answer.view.php");
            die();
        
    }
}
