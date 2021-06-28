<?php

$conn = new mysqli("localhost", "root", "root", "laravel");

// if($_REQUEST){
//     return $_REQUEST;
// }

// class Login{
//     public function addSubject(){
//         $subject_name = $_REQUEST['subject_name'];

//         $sql = "INSERT INTO subjects_table ( name)
//         VALUES ('$subject_name')";
    
//         if ($conn->query($sql) === TRUE) {
//          return 'subject.php';
//         } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//         }
    
//         $conn->close();
//     }

    
// }
// $login = new Login();
// $login->addSubject
// ();