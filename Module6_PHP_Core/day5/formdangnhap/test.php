<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" name="user1" placeholder="Nhập tên hoặc user" value="">
        <input type="password" name="password1" placeholder="Nhập mật khẩu" value="">
        <input type="submit" name="submit" value="Đăng nhập">
    </form>

    <?php
    $user = $_POST['user'] ?? '';
    $password = $_POST['password'] ?? '';
    echo $user . " - " .$password;
    ?>
    
</body>
</html>