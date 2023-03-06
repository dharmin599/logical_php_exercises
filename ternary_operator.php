<?php


function Testing($number){
    
    $all = $number > 30
    ? "greater than 30"
    : ($number > 20
    ? "greater than 20"
    : ($number >10
    ? "greater than 10"
    : "Input a number atleast greater than 10!")); 
    echo $number." : ".$all."<br>";
}
    Testing(32);
    Testing(21);
    Testing(12);
    Testing(4);
?>