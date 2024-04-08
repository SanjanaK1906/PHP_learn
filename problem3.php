//Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator.
function test_Num($num){
    $result = $num > 30 ? "greater than 30"
            : ($num > 20 ? "greater than 20" 
            : ($num > 10 ? "greater than 10"
            : "Input a num is less than 10"));
    var_dump($result);
}
test_Num(2);
