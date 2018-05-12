<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
#String examples

$phrase = 'The truth is rarely pure';
$author = 'Oscar Wilde';

echo $phrase;

//more mix strings!
echo "<p>It is often said that <q>$phrase</q> </p>";

#php string concatenator! is . 

$phrase = $phrase.' and never simple' ;

echo "<p><q>$phrase</q> <cite>$author</cite></p>";

?>
</body>
</html>
