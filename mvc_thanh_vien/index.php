<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="asset\css\style.css">


    <title>Quản lý thành viên</title>
</head>
<body>
    
</body>
</html>

<?php
include_once 'Models/DBConfig.php';

$db = new DatabaseConnect();
$db->connect();

if(isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = "";
}

switch($controller) {
    case 'thanh_vien':
    require_once 'Controllers/thanhvien/index.php';
    break;
}


?>