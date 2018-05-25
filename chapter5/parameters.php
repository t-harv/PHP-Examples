<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
function drink(string $tmp = 'hot', string $flavor = 'tea'){
    echo "Drink $tmp $flavor.<br>";
}

drink();
drink('iced');
drink('cold', 'lemonade');

function add(int ...$numbers){
    $total = 0;
    foreach($numbers as $num){
        $total += $num;
    }
    echo "<hr>Total : $total";
}

add(1,2,3);
?>
</body>
</html>
