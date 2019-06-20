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
        Vòng lặp foreach chỉ dùng để lặp mảng
        cú pháp rút gọn
        foreach($mang as $value) {
            // code thực thi
            echo "br".$value;
        }
        cú pháp đầy đủ
        foreach($mang as $key => $value) {
            // code thực thi
            echo "br" . $key . " - " .$value;
        }
    </pre>

    <?php
    
    $arr1 = array(2,4,6,8);
    echo "<br> Rút gọn: ";

    foreach($arr1 as $value) {
        echo $value . "\t";
    }

    echo "<br> Đầy đủ<br>";
    foreach($arr1 as $key => $value) {
        echo "key: " .$key . " - ";
        echo "value: " .$value. "<br>";
    }
    
    
    ?>
    
</body>
</html>