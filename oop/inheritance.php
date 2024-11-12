<?php
class Vehicle{
    private $brand;
    public function getbrand()
    {
        return $this->brand;
    }

    public function setbrand($brand)
    {
        $this->brand = $brand;
    }
}

class Car extends Vehicle{
    private $color;
    public function getcolor()
    {
        return $this->color;
    }

    public function setcolor($color)
    {
        $this->color = $color;
    }
}

$obj = new Car();

//set properties
$obj->setbrand('Suzuki');
$obj->setcolor('Black');

//get properties
$brand = $obj->getbrand();
$color = $obj->getcolor();

echo "The car brand is $brand and is $color in color.";

?>