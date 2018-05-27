<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php

class Polygon{
    private $width, $height;
    
    function __construct(int $w=4, int $h=5){
        $this->width = $w;
        $this->height = $h;
    }
    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
}

class Rectangle extends Polygon{
    public function area(){
        return ($this->getWidth() * $this->getHeight());
    }
}

class Triangle extends Polygon{
    public function area(){
        return ($this->getWidth() * $this->getHeight() / 2);
    }
}

$rect = new Rectangle();
$trio = new Triangle();
echo 'Rectangle Area : '.$rect->area().'<hr>';
echo 'Triangle Area : '.$trio->area();

?>
</body>
</html>
