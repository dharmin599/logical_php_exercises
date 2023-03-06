<!-- 
    4. Create a simple HTML form and accept the user name and display the name through PHP echo statement.
 -->


 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML SAMPLE</title>
 </head>
 <body>
    <form action="" method="post">
        <h2>Please input your name here:</h2>
        <input type="text" name="name">
        <input type="submit" value="Submit your name">
    </form>
 </body>
 </html>



 <?php 
    $name = $_POST['name'];
    // print_r($name);die;
    echo "<h3> Hey How are you : $name </h3>";
 ?>