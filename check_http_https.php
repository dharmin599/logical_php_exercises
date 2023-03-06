<!-- 
    Write a PHP script, to check whether the page is called from 'https' or 'http'.
 -->



 <?php
    // print_r($_SERVER['HTTPS']);
    // die;

    if (!empty($_SERVER['HTTPS'])) {
        echo 'https is enabled';
    }
    else{
        echo 'http is enabled'."<br>";
    }
?>