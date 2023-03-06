<!-- 
    Write a PHP script to get the client IP address.
 -->


 <?php 

// print_r($_SERVER['HTTP_CLIENT_IP']);
// die;
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else{
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo $ip_address;


 ?>