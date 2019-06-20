<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <pre>
    Vòng lặp while
    Cú pháp :
    điểm khởi đầu của vòng lặp
    while(điều kiện chạy của vòng lặp) {
        // code thực thi bên trong vòng lặp


        // cuối vòng lặp
        sự thay đổi của biến đếm sau mỗi lần chạy
    }

</pre>
    <?php

    echo "0 -> 19: ";
    $i = 0;

    while ($i < 20) {
        echo $i . "\t";
        $i++;
    }

    echo "<br>0->19 chan: ";
    $i = 0;
    while ($i < 20) {
        echo $i . "\t";
        $i += 2;
    }

    echo "<br> 0->20 chan: ";
    $i = 0;

    while ($i < 20) {
        if ($i % 2 == 0) {
            echo $i . "\t";
        }
        $i++;
    }
    ?>

</body>

</html>