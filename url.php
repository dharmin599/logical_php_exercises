<!-- 
    parse_url List of components : Scheme, Host, Path
 -->


<?php
    
    $url = 'https://google.com/abc.php';
    $url = parse_url($url);
    // print_r($url);
    // die;

    echo 'Scheme : '.$url['scheme']."<br>";
    echo 'Host : '.$url['host']."<br>";
    echo 'Path : '.$url['path']."<br>";

?>