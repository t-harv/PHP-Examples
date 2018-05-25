<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
$a = $b = 5;

function modify(int $val, int &$ref)
{
    echo "Passed values : $val , $ref<br>";
    $val ++;
    $ref ++;
    echo "Incremented values:$val, $ref<hr>";
}

modify($a, $b);

echo "Stored Values : $a, $b";
?>
</body>
</html>
