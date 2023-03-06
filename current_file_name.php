<!-- 
    Write a PHP script to get the current file name. 
-->



<?php
    // print_r(basename($_SERVER['PHP_SELF']));

    $current_file_name = basename($_SERVER['PHP_SELF']);
    // print_r($current_file_name);
    echo $current_file_name."\n";
?>