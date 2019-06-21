<?php

include_once 'database.php';
include_once 'productModel.php';

$productModel = new productModel("localhost", "root","", "t3h");
$testIndex = $productModel->index();

echo "<pre>";
print_r($testIndex);
echo "<pre>";

?>