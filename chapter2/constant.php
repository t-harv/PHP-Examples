<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
define('USER', 'Toyan');
define('PETS', ['Kitten', 'Puppy','Hamster']);

echo '<p>Hello ' . USER . ' how is your ' . PETS[1] . '?</p>';

echo '<p>You are using PHP version ' . PHP_VERSION ;

echo ' running on ' . PHP_OS .'</p';

?>
</body>
</html>
