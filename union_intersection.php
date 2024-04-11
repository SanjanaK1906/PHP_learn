<?php
//Union and Intersection of two array
//Given two arrays, create union and intersection arrays that contain union and intersection of the elements present in the given arrays.
//The order of elements in output array doesn’t matter.

$arr1=[10,15,4,20];
$arr2=[8,4,2,10];
$arr_union= array_merge($arr1,$arr2);
$arr_inter= array_intersect($arr1, $arr2);
echo" Union array is :- ";
print_r($arr_union);
echo" Intersection array is :- ";
print_r($arr_inter);
?>
