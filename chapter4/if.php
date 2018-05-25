<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
$num = 8;
if ($num > 5) {
    echo "$num exceeds 5<br>";
}
if ($num <= 5) {
    echo "$num is below 6<br>";
}

if ($num % 2 == 0) {
    echo "$num is Even<br>";
}
if ($num % 2 != 0) {
    echo "$num is Odd<br>";
}
?>
</body>
</html>
