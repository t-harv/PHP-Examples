<!DOCTYPE HTML>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
for($i = 1; $i < 4; $i++){
    for($j = 1; $j < 4; $i++){
        
        //broken!
//         echo "Running i = $i and j = $j <br>";
        if($i==2 && $j == 1){
            echo "Breaks inner loop when i = $i and j = $j<br>";
            break;
        }
        if($i == 1 && $j == 1){
            echo "Continues inner loop when 1 = $i and j = $j<br>";
            continue;
        }
        
    }
}
?>
</body>
</html>
