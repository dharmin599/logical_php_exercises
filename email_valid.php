<!-- 
    Write a simple PHP program to check that emails are valid. 
-->

<?php

    $email = "dharminmakrubiya18@gmail.com";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '"' . $email . '" = Yes,This email is Valid'."<br>";
    }
    else {
        echo '"' . $email . '" = No,This email is Invalid'."<br>";
    }
?>


