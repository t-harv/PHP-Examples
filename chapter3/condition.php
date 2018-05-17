<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
$a = NULL; $b = 8; $c = 'PHP Fun';

$verb = ($b == 1) ? 'is' : 'are';
echo "There $verb $b <hr>";

$parity = ($b % 2 != 0) ? 'Odd' : 'Even';
echo "$b is $parity <hr>";

$result = $a ?? $b ?? $c ; echo "abc : $result <br>";
$result = $c ?? $b ?? $a ; echo "cba : $result <br>";

// if($b % 2 != 0){
//     echo "true";
// }else
//     echo "false";


?>
</body>
</html>
