<!-- 
    Write a PHP script, which changes the color of the first character of a word.
 -->


 <?php

    $text = 'Dharmin Makrubiya';
    $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
    // print_r($text);die;

    echo $text;
?>