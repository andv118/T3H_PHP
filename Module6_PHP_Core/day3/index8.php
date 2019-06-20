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
        Các cách khai báo mảng chỉ số
        Chú ý mảng chỉ số bắt đầu 0
    </pre>

    <?php
    // Cách 1 : truyền value vào
    $arr1 = array(1, 23, 3123, 12);
    // Cách 2 : truyền cả key và value vào
    $arr2 = array(
        "0" => 2,
        "wweq" => 2,
        "1weq" => 2,
        "1ewq" => 2,
        "1weq" => 2,
        "1sd" => 2,
        "1sda" => 2,
        "1as" => 2,
    );

    // Cách 3 : khai báo mảng trước
    // rồi mới gán giá trị cho các phần từ
    $arr3 = array();
    $arr3[] = 2;
    $arr3[] = 3;
    $arr3[] = 4;
    $arr3[] = 5;
    $arr3[] = 2;
    $arr3[] = 6;

    // Cách số 4 gần giống cách số 3 nhưng sẽ truyền key vào
    $arr4 = array();
    $arr4['asd'] = 2;
    $arr4['asdasd'] = 3;
    $arr4['aasd'] = 4;
    $arr4['adassd'] = 5;
    $arr4['ashgd'] = 2;
    $arr4['aiusd'] = 6;

    print_r($arr1);
    // echo "<pre>";
    // print_r($arr2);
    // echo "<pre>";
    // print_r($arr3);
    // echo "<pre>";
    // print_r($arr4);

    ?>

</body>

</html>