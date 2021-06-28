<?php

class Subject 
{
    // public 
    public function deleteSubject()
    {
        $conn = mysqli_connect("localhost", "root", "root", "laravel");
        $id = $_REQUEST['delete'];
        // var_dump($id);
        $sql = "DELETE FROM subjects_table WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: https://php/view/admin/subject.view.php");
            die();
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }

    public function updateSubject()
    {
        $conn = mysqli_connect("localhost", "root", "root", "laravel");
        $id = $_REQUEST['last_id'];
        $name = $_REQUEST['subject_name'];
        $sql = "UPDATE subjects_table SET name='$name' WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: https://php/view/admin/subject.view.php");
            die();
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();  
    }


    public function addSubject()
    {
        $conn = mysqli_connect("localhost", "root", "root", "laravel");
        $subject_name = $_REQUEST['subject_name'];
        $sql = "INSERT INTO subjects_table (name) VALUES ('$subject_name')";
        // var_dump($conn); 
            if (mysqli_query($conn, $sql)) {
                // var_dump($sql);
                header("Location: https://php/view/admin/subject.view.php");
                die();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                header("Location: https://php/view/admin/add-subject.view.php");
                die();
            }
        
            $conn->close();
            
    }
}