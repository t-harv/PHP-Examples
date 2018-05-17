<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
$zero = 0; $nil = 0; $one = 1; $upr = 'A'; $lwr = 'a';

echo "0 == 0 : "; var_dump($zero == $nil);
echo "<br>0 == 1 : "; var_dump($zero == $one);
echo "<br>A == a : "; var_dump($upr == $lwr);
echo "<br>A != a : "; var_dump($upr != $lwr);  //typo in the book!

echo "<hr>1 > 0 : "; var_dump($one > $nil);
echo "<br>0 >= 0 : "; var_dump($zero >= $nil);
echo "<br>1 <= 0 : "; var_dump($one <= $nil);

echo "<hr>1 <=> 0 : "; var_dump($one <=> $nil);
echo "<br>1 <=> 1 : "; var_dump($one <=> $one);
echo "<br>0 <=> 1 : "; var_dump($nil <=> $one);


?>
</body>
</html>
