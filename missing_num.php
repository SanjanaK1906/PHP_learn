<?php
$arr=[1,2,4,5];
$arr1= range(min($arr),max($arr));
$result= array_diff($arr1, $arr);
var_dump($result);
?>
