<?php

require_once 'index8.php';

echo "<br>" . $arr1[1];
echo "<br>" . $arr1[3];

$arr1[1] = 100;
$arr1[3] = 200;
echo "<pre>";
print_r($arr1);


?>

