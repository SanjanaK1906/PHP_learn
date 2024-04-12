//Given a string S, find the longest palindromic substring in S.
//Incase there are 2 or more substrings of same length, return the substring which occurs first (with the least starting index)
//Input:The testcase consists of a String S.
//Output:Print the longest palindrome of the string given in test case.

<?php
function Palindrome($string){  
    if (strrev($string) == $string){  
        return 1;  
    } else{
        return 0;
    }
}  
// Driver Code
$ques = ["dabad","aabbab"]; 
// $ques= implode("",$ques);
$count= count($ques);
for ($i=0; $i<$count; $i++){
    if(array_map("Palindrome",$ques)){  
    echo "Palindrome \n";  
    } else {  
    echo "Not a Palindrome";  
    }    
}
?>
