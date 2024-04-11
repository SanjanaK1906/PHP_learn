<?php
//Given two arrays: arr1[0..m-1] and arr2[0..n-1]. Find whether arr2[] is a subset of arr1[] or not. Both arrays are not in sorted order. 
//It may be assumed that elements in both arrays are distinct.
//Examples: 
//Input: arr1[] = {11, 1, 13, 21, 3, 7}, arr2[] = {11, 3, 7, 1} 
//Output: arr2[] is a subset of arr1[]
//****************************************************************************************************************************************//

$arr1 = array(11, 1, 13, 21, 3, 7);
$arr2 = array(11, 3, 7, 1);
$a1=[];
$a2=[];
foreach ($arr1 as $x){
    $a1[$x]=$x; //we can also use array_flip than using foreach $a1=array_flip($arr1);
}
$result = 1;
foreach ($arr2 as $y){
   if (!isset($a1[$y])){
       $result = ++$result;
   }
}
if($result>1){
    echo"arr2[] is not subset of arr1[]";
}else{
    echo"arr2[] is subset of arr1[]";
}
?>
