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
        Vòng lặp trong PHP
        Vòng lặp thực hiện chu trình theo 1 số lần nhất
        Ví dụ : Vòng lặp các thứ trong tuần
        Chạy từ chủ nhật cho đến thứ 7 sau đó sẽ lặp lại
        Vòng lặp for :
        1 - điểm bắt đầu của vòng lặp
        2 - điều kiện chạy của vòng lặp
        3 - sự thay đổi của biến đếm sau mỗi lần chạy của vòng lặp

        Cú pháp lệnh for :
        for ( điểm bắt đầu ; điều kiện chạy vòng lặp ; sự thay đổi của biến đếm) {
            // code thực thi của vòng lặp for
        }
    </pre>

    <?php
    echo "in ra 0 -> 20: ";
    for($i = 0; $i < 20; $i++) {
        echo $i . "\t";
    }
    echo "<br>";

    echo "0 -> 20: chan: ";
    for($i = 0; $i < 20; $i += 2) {
        echo $i . "\t";
    }
    echo "<br>";

    echo "0 -> 20: chan: ";
    for($i = 0; $i < 20; $i += 1) {
        if(($i % 2) ==0) {
        echo $i . "\t";
        }
    }
    
    
    
    ?>
    
</body>
</html>