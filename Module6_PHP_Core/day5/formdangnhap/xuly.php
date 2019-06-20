<?php
session_start();

$user = $_POST['user_name_form'] ?? '1234';
$password = $_POST['password_form'] ?? '';

echo $user . " - " . $password;

    if($user == 'admin' && $password == '123456') {
        $_SESSION['user'] = $user;
        // header("location:mainpage.php");
        echo $user . $password;
    } else {
        // echo "sai thong tin dang nhap!";
        // include 'login.html';    
    }
?>