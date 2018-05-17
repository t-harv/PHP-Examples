<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
$x = 5 ; $y = 10;

echo "X : $x , Y : $y <br>";

$x = $x ^ $y; /* 1010 ^ 0101 = 1111 (decimal 15) */

$y = $x ^ $y; /* 1111 ^ 0101 = 1010 (decimal 10) */

$x = $x ^ $y; /* 1111 ^ 1010 = 0101 (decimal 5) */

echo "X : $x , Y : $y <br>";

?>
</body>
</html>
