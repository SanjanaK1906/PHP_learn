//Columns in Excel are named A,B,C...Z and AA,AB,AC....AZ and BA, BB...BZ and so on. Given a string containing column name S as appears in an excel sheet, write a program to return its corresponding column number. 
//For Sample: A->1 B->2 C->3 Z->26.. AA->27 AB-> 28

<?php
function excel_col_to_num($col){
    $result= 0;
  $col= strtoupper($col);
  $len = strlen($col);
  for($i=0; $i<$len; $i++){
      $result = $result * 26 + (ord($col[$i]) - ord('A') + 1);
  }
  return $result;
}
$res= excel_col_to_num("AA");
var_dump($res);

?>
