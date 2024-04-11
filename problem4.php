<?php
//write a script that gets the current month and then prints out the season using if, else, and elseif. 
//You don’t have to worry about the exact date of the season switch. Count June, July, and August as summer, and September, October, and November as fall. 
//Count December, January, and February as winter, and March, April, and May as spring.

$temp = date('F');//get full name for half name use ('M)
if(in_array($temp,["June", "July", "August"])){
    echo "This is summer season";
}elseif(in_array($temp,["September", "October", "November"])){
    echo "This is fall season";
}elseif(in_array($temp,["December", "January","February"])){
    echo "This is winter season";
}elseif(in_array($temp,["March", "April","May"])){
    echo "This is spring season";
}else{
    echo "please check again";
}
?>
