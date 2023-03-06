<!-- 
    Write a PHP script to get last modified information of a file. 
-->

<?php
    $current_file_name = basename($_SERVER['PHP_SELF']);
    // print_r($current_file_name);
    
    $file_last_modified = filemtime($current_file_name); 
    // print_r($file_last_modified);

    echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."<br>";

?>

