<!-- 
    Write a PHP script to count number of lines in a file.
 -->

 <?php

    $file = basename($_SERVER['PHP_SELF']);
    // print_r($file);
    
    $no_of_lines = count(file($file)); 
    // print_r($no_of_lines)

    echo "There are $no_of_lines lines in $file"."\n";
?>