<?php
// find unique number in given array
$array = [ 1, 2,9, 3, 4, 4];
$new_array =[];
//As we know in array have unique index for each element apply logic accordingly
foreach ($array as $x){
    $new_array[$x] = $x;
}
print_r($new_array);
?>
