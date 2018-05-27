<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Getting Started In PHP</title>
</head>
<body>
<?php

class Dog
{

    private $age;

    private $weight;

    private $color;

    /**
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     *
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     *
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     *
     * @param mixed $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    /**
     *
     * @param mixed $weight
     */
    public function setWeight(int $weight)
    {
        $this->weight = $weight;
    }

    /**
     *
     * @param mixed $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function bark()
    {
        echo 'WOOF! WOOF! <br>';
    }
}

$fido = new Dog();
$fido->setAge(3);
$fido->setWeight(15);
$fido->setColor('brown');

echo 'Fido is a ' . $fido->getColor() . ' dog <br>';
echo 'Fido is ' . $fido->getAge() . ' years old<br>';
echo 'Fido weighs ' . $fido->getWeight() . ' pounds<br>';

$fido->bark();

?>
</body>
</html>
