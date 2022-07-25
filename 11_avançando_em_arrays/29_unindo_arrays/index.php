<?php

$arr1 = [1, 2, 3];
$arr2 = [21, 42, 43];
$arr3 = [75, 23, 463];
$arr4 = ["sgasf", "gsk", "dkkk"];

$arrMerge = array_merge($arr1, $arr2, $arr3, $arr4, [0, 2]);

print_r($arrMerge);
echo "<br>";