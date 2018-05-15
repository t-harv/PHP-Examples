<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
$letters = array(
    'A',
    'B',
    'C',
    'D',
    'E',
    'F',
    'G',
    'H'
);
$numbers = array(
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9
);
$matrix = array(
    'Letter' => $letters,
    'Number' => $numbers
);

// i do not understand this 2d array :O!
// i don't understand why when the page is rendered the keys say L for A e for B, etc... The book say the keys should be
// Letter for each element.
//super weird, a space between $array and [$key] was required.  
echo "<p>Start: {$matrix['Letter'][0]}</p>";

foreach ($matrix as $array => $list) 
{
    echo '<ul>';
    foreach ($list as $key => $value) 
    {
        echo "<li>$array [$key] = $value";  //this was confusing but when you actually understand what it's saying its clear.  I forgot the space between array and [$keys] because i thought there was some type of array calculation going on but this is actually string printing out and their values!
    }
    echo '</ul>';
}

// echo "Printing out letters array";
// foreach ($letters as $yolo => $che) {
//     echo '<ul>';
//     echo "<li> $yolo . $che";
//     echo '</ul>';
// }

?>
</body>
</html>
