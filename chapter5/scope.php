<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
$number = 1;
echo "Global number : $number <br";
echo "huh?";

// function show_local()
// {
//     echo "test";
//     $number = 100;
//     echo "Local number : $number<hr>";
// }

function helloWorld(){
    echo "Hi Toyan";
}

helloWorld();
// show_local();

?>
</body>
</html>
