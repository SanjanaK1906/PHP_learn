<?php
# 0
# 0 1
# 0 2 4
# 0 3 6 9
# 0 4 8 12 16
# 0 5 10 15 20 25
# 0 6 12 18 24 30 36


function test($input){
    for($k =0 ; $k<= $input ; $k++){
        for($j = 0;$j<=$k;$j++){
            echo $k*$j." ";
        }
        echo"\n";
    }
}
$testing = test(6);
?>
