<?php

class Login 
{   
    public function checkAdmin()
    {
        // var_dump($_REQUEST);
        if($_REQUEST['login'] == 'admin'&& $_REQUEST['password'] == 'admin'){
            // echo '<pre>';
            // var_dump($_SERVER);
            // echo '</pre>';
            // require $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'view/admin' . DIRECTORY_SEPARATOR . 'subject.view.php';
            // require 'view/subject.view.php';
            header("Location: https://php/view/admin/subject.view.php");
            die();
            
        }else{
            require $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'login.view.php';
            // require 'login.view.php';
            // header("Location: https://php/view/login.view.php");
            // die();
        }
    }
}


$login = new Login();
$login->checkAdmin();