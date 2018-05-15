<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php

echo 'Web Server: '.$_SERVER['SERVER_SOFTWARE'].'<br>';
echo 'This Script: '.$_SERVER['PHP_SELF'].'<br>';
echo 'Host Name: '.$_SERVER['HTTP_HOST'].'<br>';
echo 'Request Method: '.$_SERVER['REQUEST_METHOD'].'<br>';

foreach($_GET as $key => $value){
     echo '<hr>HTTP GET : ' . $key . ' = ' . $value ;
}
//copy this in url http://localhost/PHP-Examples/chapter2/supers.php?name=toyan&lang=PHP to see the above foreach output
?>
</body>
</html>
