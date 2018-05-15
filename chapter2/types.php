<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
$filestream = fopen('matrix.php', 'r');  //matrix.php is in same directory!
$data = array('PHP',1,2.3, TRUE,NULL, array() , new Directory , $filestream);


// foreach($data as $type){
//     echo '&bull;' . $type . "<br />";  //this errors out because it stop rendering at Directory
// }


foreach($data as $type){
    var_dump($type);
    echo '<br> ';
}

fclose($filestream);
echo gettype($filestream);

?>
</body>
</html>
