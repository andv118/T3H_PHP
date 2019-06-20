<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Cách tạo ra 1 session trong PHP</h1>

<?php
$_SESSION['name'] = 'vanando';
$_SESSION['email'] = 'email';

$location = "ha noi";
$_SESSION['location'] = $location;

print_r($_SESSION);

?>
    
</body>
</html>