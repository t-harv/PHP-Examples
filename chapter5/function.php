<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
function greet(){
    echo 'Hello User!<br>';
}

greet();

function outer(){
    function inner(){
        echo 'Inner function called.<br>';
    }
    echo 'Inner function created.<br>';
}

outer();
inner();
?>
</body>
</html>
