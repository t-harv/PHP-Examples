<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php
#array examples

//array with indicies
$days = array('Monday', 'Tuesday', 'Wednesday');

//for each loop!  just like java
foreach($days as $value){
    echo "&bull; $value";
}

//echo $days[0];

//associative arrays!!
$months = array('jan' => 'January', 'feb' => 'February', 'mar' =>'March');

echo '<dl>';
//notice in the for loop for associative arrays the key is added?  Could you do the same with non assoicative?  Let me try
foreach($months as $key => $value)
{
    echo "<dt>$key<dd>$value";
}
echo'</dl>';


//yep, you can do the same for non associative arrays!
foreach($days as $key => $value){
    echo "&bull; $key . $value";
}

?>
</body>
</html>
